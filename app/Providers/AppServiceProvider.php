<?php

namespace App\Providers;

use App\Models\User;
use App\View\Components\Button;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Services\CalendarServiceManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CalendarServiceManager::class, function ($app) {
            return new CalendarServiceManager();
        });

        // Alias for convenience
        $this->app->alias(CalendarServiceManager::class, 'calendar');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Create configured roles and assign the privileged ones. This touches the
        // database, so it must never take the whole app (or `artisan migrate`) down
        // when the tables do not exist yet or the database is unreachable.
        try {
            if (Schema::hasTable(config('permission.table_names.roles', 'roles'))) {
                foreach (config('access.roles') as $roleName) {
                    Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
                }

                // Assign ENGINEER role to one specific email
                if ($engineerEmail = config('access.engineer_email')) {
                    if ($user = User::where('email', $engineerEmail)->first()) {
                        $user->syncRoles(['engineer']); // Priority role
                    }
                }

                // Assign master role to specific emails
                foreach (config('access.master_emails') as $email) {
                    if ($user = User::where('email', $email)->first()) {
                        $user->syncRoles(['master']); // Always force them to be master
                    }
                }
            }
        } catch (\Throwable $e) {
            report($e);
        }

        // Assign default user role to everyone else
        User::created(function ($user) {
            // Don't override engineer or master emails
            if ($user->email === config('access.engineer_email')) {
                return;
            }

            if (in_array($user->email, config('access.master_emails'), true)) {
                return;
            }

            // Make sure the role exists so a fresh install or a missing MASTER_ROLES entry
            // cannot make registration fail with RoleDoesNotExist.
            $role = Role::firstOrCreate(['name' => config('access.default_role'), 'guard_name' => 'web']);

            $user->assignRole($role);
        });

        Blade::component('button', \App\View\Components\Button::class);
    }
}

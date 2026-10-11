{{-- Sticky call / book bar for phones. Hidden on larger screens and on booking, admin and auth pages. --}}
@unless (request()->is('booking*', 'admin*', 'analysis*', 'dashboard*', 'profile*', 'login', 'register', 'forgot-password', 'reset-password*', 'team*', 'requests*'))
    <div class="lg:hidden fixed bottom-0 inset-x-0 z-40 bg-white border-t border-gray-200 shadow-[0_-4px_12px_rgba(0,0,0,0.08)] px-3 py-2 grid grid-cols-2 gap-2"
         style="padding-bottom: max(0.5rem, env(safe-area-inset-bottom));">
        <a href="tel:{{ config('facility.phone_tel') }}"
           class="flex items-center justify-center gap-2 py-3 rounded-lg border-2 border-navy text-navy font-bold text-sm">
            <i class="fas fa-phone-alt"></i> Call us
        </a>
        <a href="{{ route('booking.index') }}"
           class="flex items-center justify-center gap-2 py-3 rounded-lg btn-gold font-bold text-sm">
            <i class="fas fa-calendar-check"></i> Book a Tour
        </a>
    </div>
    {{-- Keep page content from being hidden behind the bar --}}
    <div class="lg:hidden h-16" aria-hidden="true"></div>
@endunless

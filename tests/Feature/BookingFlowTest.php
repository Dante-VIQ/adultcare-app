<?php

use App\Mail\BookingConfirmation;
use App\Mail\BookingFollowUp;
use App\Mail\BookingReminder;
use App\Mail\BookingReschedule;
use App\Mail\NewBookingNotification;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

uses(RefreshDatabase::class);

function makeBooking(array $overrides = []): Booking
{
    return Booking::create(array_merge([
        'type' => 'tour',
        'appointment_date' => Carbon::now()->addDays(3),
        'appointment_time' => '10:00',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.test',
        'phone' => '2065550100',
        'relationship' => 'child',
        'attendees' => 2,
        'status' => 'pending',
    ], $overrides));
}

it('does not expose the confirmation page without a signed link', function () {
    $booking = makeBooking();

    $this->get(route('booking.confirm', $booking))->assertForbidden();
    $this->get(URL::signedRoute('booking.confirm', $booking))->assertOk();
});

it('does not allow cancelling or rescheduling without a signed link', function () {
    $booking = makeBooking();

    $this->post(route('booking.cancel', $booking))->assertForbidden();
    $this->post(route('booking.reschedule', $booking))->assertForbidden();

    expect($booking->fresh()->status)->toBe('pending');
});

it('sends the customer confirmation and the admin notification', function () {
    Mail::fake();
    $booking = makeBooking();
    $service = app(\App\Services\EmailService::class);

    expect($service->sendBookingConfirmation($booking))->toBeTrue();
    expect($service->sendAdminNotification($booking))->toBeTrue();

    Mail::assertSent(BookingConfirmation::class, fn ($m) => $m->hasTo('jane@example.test'));
    Mail::assertSent(NewBookingNotification::class, fn ($m) => $m->hasTo(config('booking.email.admin')));
});

it('renders every booking email with real facility details and no placeholders', function () {
    $booking = makeBooking();

    $mails = [
        new BookingConfirmation($booking),
        new NewBookingNotification($booking),
        new BookingReminder($booking),
        new BookingReschedule($booking, Carbon::now()->addDays(2), '09:00'),
        new BookingFollowUp($booking),
    ];

    foreach ($mails as $mail) {
        $html = $mail->render();

        expect($html)
            ->not->toContain('555-1234')
            ->not->toContain('Luxury Lane')
            ->not->toContain('amazingpalaceseattle.com')
            ->not->toContain('AFH-123456');
    }

    expect((new BookingConfirmation($booking))->render())->toContain(config('facility.address_line'));
});

it('routes the admin bookings export to the export action, not the show action', function () {
    $route = app('router')->getRoutes()->match(Request::create('/admin/bookings/export', 'GET'));

    expect($route->getName())->toBe('admin.bookings.export');
});

it('uses the real facility contact details everywhere on the booking page', function () {
    $this->get(route('booking.index'))
        ->assertOk()
        ->assertDontSee('555-1234')
        ->assertDontSee('Luxury Lane');
});

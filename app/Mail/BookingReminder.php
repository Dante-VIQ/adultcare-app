<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $reminderDetails;
    public $directions;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $this->reminderDetails = $this->prepareReminderDetails();
        $this->directions = $this->getDirections();
    }

    public function build()
    {
        $subject = "Reminder: Your Amazing Palace Appointment Tomorrow";

        return $this->subject($subject)
                    ->view('emails.booking.reminder')
                    ->with([
                        'booking' => $this->booking,
                        'details' => $this->reminderDetails,
                        'directions' => $this->directions,
                        'cancelUrl' => route('booking.cancel', $this->booking),
                        'rescheduleUrl' => route('booking.reschedule', $this->booking)
                    ]);
    }

    private function prepareReminderDetails()
    {
        return [
            'Appointment' => "{$this->booking->formatted_date} at {$this->booking->formatted_time}",
            'Type' => $this->booking->type_label,
            'Duration' => $this->booking->duration . ' minutes',
            'Location' => config('facility.address_line'),
            'Contact' => config('facility.phone'),
            'Check-in' => 'Please arrive 10-15 minutes before your appointment'
        ];
    }

    private function getDirections()
    {
        $address = config('facility.address_line');

        return [
            'Address' => $address,
            'Map' => 'https://www.google.com/maps/search/?api=1&query='.rawurlencode($address),
        ];
    }
}

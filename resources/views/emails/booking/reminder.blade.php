@extends('emails.booking.layout')

@section('title', 'Appointment reminder')
@section('heading', 'Your appointment is tomorrow')

@section('body')
    <p>This is a friendly reminder of your {{ strtolower($booking->type_label) }} at {{ config('facility.name') }}.
        We look forward to meeting you.</p>

    @if (! empty($directions['Map']))
        <p><a href="{{ $directions['Map'] }}" style="display:inline-block;background:#d4af37;color:#0a2463;padding:10px 18px;border-radius:6px;text-decoration:none;font-weight:bold;">Get directions</a></p>
    @endif
@endsection

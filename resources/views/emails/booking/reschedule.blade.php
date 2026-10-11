@extends('emails.booking.layout')

@section('title', 'Appointment rescheduled')
@section('heading', 'Your appointment has been rescheduled')

@section('body')
    <p>Your appointment has moved from <strong>{{ $oldAppointment }}</strong> to <strong>{{ $newAppointment }}</strong>.</p>
@endsection

@extends('emails.booking.layout')

@section('title', 'Thank you for visiting')
@section('heading', 'Thank you for visiting')

@section('body')
    <p>Thank you for taking the time to visit {{ config('facility.name') }}. We hope it helped you picture life here for your loved one.</p>

    <p><strong>If you have questions, we are happy to help with:</strong></p>
    <ul>
        @foreach ($questions as $question)
            <li>{{ $question }}</li>
        @endforeach
    </ul>

    <p><strong>Possible next steps:</strong></p>
    <ul>
        @foreach ($nextSteps as $step)
            <li>{{ $step }}</li>
        @endforeach
    </ul>
@endsection

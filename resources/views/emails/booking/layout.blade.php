<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body style="margin:0;padding:0;background:#f5f5f5;font-family:'Helvetica Neue',Arial,sans-serif;line-height:1.6;color:#333;">
    <div style="max-width:640px;margin:0 auto;background:#fff;">
        <div style="background:#0a2463;color:#fff;padding:24px;text-align:center;">
            <h1 style="margin:0;font-size:22px;">{{ config('facility.name') }}</h1>
            <p style="margin:6px 0 0;opacity:.85;">@yield('heading')</p>
        </div>
        <div style="padding:24px;">
            <p>Dear {{ $booking->first_name }},</p>
            @yield('body')

            @isset($details)
                <table style="width:100%;border-collapse:collapse;margin:16px 0;">
                    @foreach ($details as $label => $value)
                        <tr>
                            <td style="padding:8px 0;border-bottom:1px solid #eee;color:#666;width:40%;">{{ $label }}</td>
                            <td style="padding:8px 0;border-bottom:1px solid #eee;"><strong>{{ $value }}</strong></td>
                        </tr>
                    @endforeach
                </table>
            @endisset

            <p style="margin-top:24px;">Questions, or need to change your appointment? Call
                <a href="tel:{{ config('facility.phone_tel') }}">{{ config('facility.phone') }}</a>
                or email <a href="mailto:{{ config('facility.email') }}">{{ config('facility.email') }}</a>.</p>
        </div>
        <div style="background:#f0f0f0;padding:16px;text-align:center;font-size:12px;color:#777;">
            {{ config('facility.name') }} &middot; {{ config('facility.address_line') }}
        </div>
    </div>
</body>
</html>

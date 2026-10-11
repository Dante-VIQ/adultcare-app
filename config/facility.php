<?php

/*
| Public details of the home, used by emails, calendar events and booking pages so there is
| one place to change them. Defaults match the live website; override in .env if they change.
*/

return [
    'name' => env('FACILITY_NAME', 'Amazing Palace Adult Family Home'),
    'address_line' => env('FACILITY_ADDRESS', '2638 26th Pl SE, Auburn, WA 98002'),
    'phone' => env('FACILITY_PHONE', '(206) 488-9285'),
    'phone_tel' => env('FACILITY_PHONE_TEL', '+12064889285'),
    'email' => env('FACILITY_EMAIL', 'amazingpalaceafh@gmail.com'),
];

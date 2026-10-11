<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('renders every public page without errors', function (string $uri) {
    $this->get($uri)->assertOk();
})->with([
    '/',
    '/all-services',
    '/all-about',
    '/service-area',
    '/contact',
    '/facility',
    '/careteam',
    '/gallery',
    '/booking',
    '/sitemap.xml',
]);

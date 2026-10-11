<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('puts a Book a Tour call to action in the header and hero of the homepage', function () {
    $html = $this->get('/')->assertOk()->getContent();

    expect(substr_count($html, route('booking.index')))->toBeGreaterThanOrEqual(3);
    expect($html)->toContain('Book a Tour')->not->toContain('Book a Ride');
});

it('shows one consistent phone number across public pages', function () {
    foreach (['/', '/contact', '/facility', '/all-services', '/booking'] as $uri) {
        $html = $this->get($uri)->getContent();

        expect($html)
            ->not->toContain('545-1994')
            ->not->toContain('5451994')
            ->not->toContain('600-5593')
            ->not->toContain('6005593');
    }
});

it('shows the sticky call and book bar on public pages but not on the booking form', function () {
    $this->get('/facility')->assertSee('Call us')->assertSee('Book a Tour');
    $this->get('/booking')->assertDontSee('Call us');
});

it('has no dead hash links on the homepage', function () {
    $html = $this->get('/')->getContent();

    expect($html)->not->toMatch('/<a[^>]+href="#"/');
});

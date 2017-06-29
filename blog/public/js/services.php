<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'https://api.mailgun.net/v3/startupsclub.org',
        'secret' => 'key-40b677d25c0510be0a33a2cac5c0ae6a',
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '1842774372632461',
    'client_secret' => '4fd2400e592caad1a939a025d80a8765',
    'redirect' => 'http://members.startupsclub.org/callback',
],
'linkedin' => [
        'client_id' => '816wgdlmgdr9yf',
        'client_secret' => 'h4NdBHRXpKD2lU6m',
        'redirect' => 'http://members.startupsclub.org/callbacklink'
    ],


];

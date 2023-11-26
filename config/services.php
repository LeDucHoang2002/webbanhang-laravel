<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '3725450977676335',
        'client_secret' => 'd13e2656289cd0989539dd310cb2a98b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback', 
    ],

    'google' => [
        'client_id' => '401100374140-uu8e1e8sjla6hkh67bgjnek7kcs9oo2h.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback', 
    ],


];

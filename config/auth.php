<?php

// config/auth.php

return [
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users', // This is the provider for regular users
        ],

        'doctor' => [
            'driver' => 'session',
            'provider' => 'doctors', // This is the provider for doctors
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usercode::class,
        ],

        'doctors' => [
            'driver' => 'eloquent',
            'model' => App\Models\DoctorRegistration::class, // DoctorRegistration model for doctors
        ],
    ],
];

<?php

use Illuminate\Support\Facades\Route;

Route::get('/practice', function () {
    $questions = [
        [
            'question' => 'What is Laravel?',
            'answer' => 'Laravel is a PHP framework for web artisans.'
        ],
        [
            'question' => 'What is the primary feature of Laravel?',
            'answer' => 'The primary feature of Laravel is its elegant syntax which makes web development tasks such as routing, authentication, and caching easier.'
        ],
        [
            'question' => 'What is Eloquent in Laravel?',
            'answer' => 'Eloquent is Laravel\'s ORM (Object-Relational Mapping) which provides an easy way to interact with the database using an active record pattern.'
        ],
        [
            'question' => 'What is Blade in Laravel?',
            'answer' => 'Blade is the simple yet powerful templating engine provided with Laravel. It allows you to use plain PHP code in your views and includes features like template inheritance and sections.'
        ],
        [
            'question' => 'How do you define routes in Laravel?',
            'answer' => 'Routes in Laravel are defined in the `routes/web.php` file for web routes and `routes/api.php` for API routes. You can define a route using the `Route::get`, `Route::post`, and other HTTP verb methods.'
        ]
    ];

    foreach ($questions as $q) {
        echo "<strong>Question:</strong> " . $q['question'] . "<br>";
        echo "<strong>Answer:</strong> " . $q['answer'] . "<br><br>";
    }


    Route::get('/products/{category}/{id}', function ($category, $id) {
        return "Product $id in category $category";
    })->where(['id' => '[0-9]+', 'category' => '[A-Za-z]+']);

    Route::get('/products/{category}/{id}/{email}', function ($category, $id, $email) {
        return "Product $id in category $category with email $email";
    })->where([
        'id' => '[0-9]+',
        'category' => '[A-Za-z]+',
        'email' => '[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}'
    ]);

    Route::get('/dob/{dob}', function ($dob) {
        return "Date of Birth: $dob";
    })->where('dob', '(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])-\d{2}');
    Route::get('/values/{pi?}/{name?}', function ($pi = 3.14159, $name = "Rubesh") {
        return "Value of Pi: $pi, Name: $name";
    });
    

Route::get('/welcome', function () {
    return view('welcome');
});    
    
});



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
});

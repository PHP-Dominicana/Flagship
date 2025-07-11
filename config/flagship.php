<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cache Settings
    |--------------------------------------------------------------------------
    */
    'cache_enabled' => env('FLAGSHIP_CACHE_ENABLED', true),
    'cache_ttl' => env('FLAGSHIP_CACHE_TTL', 3600),

    /*
    |--------------------------------------------------------------------------
    | Default Settings
    |--------------------------------------------------------------------------
    */
    'default_state' => env('FLAGSHIP_DEFAULT_STATE', false),

    /*
    |--------------------------------------------------------------------------
    | Rule Evaluator
    |--------------------------------------------------------------------------
    |
    | Define how targeting rules are evaluated. Options:
    | - A closure: fn (array $rules, $user) => bool
    | - An invokable class: App\Services\CustomEvaluator::class
    | - null: will fallback to always-true evaluator
    |
    */
    'evaluator' => null,
];

<?php

use App\Repositories\AuthRepo;

if (!function_exists('hpcAuth')) {
    function hpcAuth()
    {
        return app(AuthRepo::class);
    }
}

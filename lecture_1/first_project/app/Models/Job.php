<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all(): array{
        return [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$10000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$6000',
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '$8000',
            ]
        ];~
    }

    public static function find (int $id): array{
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            return abort(404);
        }

        return $job;
    }
}

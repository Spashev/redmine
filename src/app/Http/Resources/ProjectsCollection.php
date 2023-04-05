<?php

namespace App\Http\Resources;

class ProjectsCollection implements BaseCollection
{
    public static function toArray(array $data): array
    {
        return [
            "count" => $data['total_count'],
            "results" => $data['projects']
        ];
    }
}

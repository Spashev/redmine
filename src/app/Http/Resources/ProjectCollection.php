<?php

namespace App\Http\Resources;

class ProjectCollection implements BaseCollection
{
    public static function toArray($data): array
    {
        return (array)$data;
    }
}

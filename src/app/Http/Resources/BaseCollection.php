<?php

namespace App\Http\Resources;

interface BaseCollection
{
    public static function toArray(array $data): array;
}

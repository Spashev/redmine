<?php

namespace App\Services;

interface TrackerServiceInterface
{
    public function create(array $params);
    public function get(int $id);
    public function all(array $params);
    public function update(int $id, array $params);
    public function remove(int $id);
}

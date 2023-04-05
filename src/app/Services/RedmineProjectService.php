<?php

namespace App\Services;

use Redmine\Client\NativeCurlClient;

class RedmineProjectService implements TrackerServiceInterface
{
    private NativeCurlClient $client;
    public function __construct(NativeCurlClient $client)
    {
        $this->client = $client;
    }

    public function create(array $params)
    {
        return $this->client->getApi('project')->create([
            'name' => $params['name'],
            'identifier' => $params['identifier'],
            'description' => $params['description'] ?? null,
            'homepage' => $params['homepage'] ?? null
        ]);
    }

    public function all(array $params)
    {
        return $this->client->getApi('project')->all($params);
    }

    public function get(int $id)
    {
        return $this->client->getApi('project')->show($id);
    }

    public function update(int $id, array $params)
    {
        return $this->client->getApi('project')->update($id, $params);
    }

    public function remove(int $id)
    {
        return $this->client->getApi('project')->remove($id);
    }
}

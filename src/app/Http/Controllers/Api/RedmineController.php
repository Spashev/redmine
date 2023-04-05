<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RedmineCreateRequest;
use App\Http\Requests\RedmineUpdateRequest;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectsCollection;
use App\Services\TrackerServiceInterface;
use Illuminate\Http\Response;

class RedmineController extends Controller
{
    private TrackerServiceInterface $service;

    public function __construct(TrackerServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(): array
    {
        $projects = $this->service->all([
            'limit' => 25,
            'offset' => 0
        ]);

        return ProjectsCollection::toArray($projects);
    }

    public function store(RedmineCreateRequest $request): array
    {
        $project = $this->service->create($request->toArray());

        return ProjectCollection::toArray($project);
    }

    public function show(string $id): array
    {
        $project = $this->service->get((int)$id);

        return ProjectCollection::toArray($project);
    }

    public function update(RedmineUpdateRequest $request, string $id): Response
    {
        $this->service->update((int)$id, $request->toArray());

        return response()->noContent();
    }

    public function destroy(string $id): Response
    {
        $this->service->remove((int)$id);

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Team;
use App\Services\CrudService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $views = 'teams';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Team::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Team::class);
    }

    public function show(Team $team)
    {
        return $this->crudService->show($team,$this->views);
    }

    public function edit(Team $team)
    {
        return $this->crudService->edit($team,$this->views);
    }

    public function update(MainRequest $request, Team $team)
    {
        return $this->crudService->update($request,$team);
    }

    public function destroy(Team $team)
    {
        return $this->crudService->destroy($team);
    }



}

<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Category;
use App\Models\User;
use App\Services\CrudService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $views = 'users';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(User::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,User::class);
    }

    public function show(User $user)
    {
        return $this->crudService->show($user,$this->views);
    }

    public function edit(User $user)
    {
        return $this->crudService->edit($user,$this->views);
    }

    public function update(MainRequest $request, User $user)
    {
        return $this->crudService->update($request,$user);
    }

    public function destroy(User $user)
    {
        return $this->crudService->destroy($user);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Services\CrudService;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    private $crudService;
    public function __construct(CrudService $crudService) 
    {
        $this->crudService = $crudService;        
    }

    public function store(CrudRequest $request)
    {
        $validated = $request->validated();
        $userStored = $this->crudService->createUser($validated);
        return redirect()->back();
    }

    public function index()
    {
        $users = $this->crudService->allUsers();
        return view('welcome', compact('users'));
    }

    public function show()
    {
        $user = $this->crudService->getUser();
        return view('show', compact('user'));
    }



    



}

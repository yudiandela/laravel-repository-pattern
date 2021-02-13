<?php

namespace App\Http\Controllers;

use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json($this->repository->paginate(5), 200);
    }
}

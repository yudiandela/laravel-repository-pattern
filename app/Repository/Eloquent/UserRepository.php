<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     *
     * @var Model
     */
    protected $model;

    /**
     * UserRepository constructor
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}

<?php

namespace App\Repositories\Task;

use App\Repositories\BaseRepository;
use App\Repositories\Task\TaskRepositoryInterface;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Task::class;
    }

    public function getProduct()
    {
        return $this->model->select('product_name')->take(5)->get();
    }
}
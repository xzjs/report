<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 16/3/25
 * Time: 下午8:34
 */

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository{
    public function forUser(User $user){
        return Task::where('user_id',$user->id)->orderBy('created_at','asc')->get();
    }
}
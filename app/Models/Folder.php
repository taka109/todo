<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Folder extends Model
{
    use HasFactory;
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['created_at', 'updated_at'];
    public function task(){
        return $this->hasMany(Task::class);
    }
}

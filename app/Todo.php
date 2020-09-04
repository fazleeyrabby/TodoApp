<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table="todos";
    protected $primaryKey="id";
    protected $fillable=[
        'project_id',
        'user_id',
        'todo',
        'description',
        'entry_date',
    ];
}

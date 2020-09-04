<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table="brand";
    protected $primaryKey="id";
    protected $dates = ['entry_date'];
    protected $fillable=[
        'name',
        'entry_date',
    ];
}

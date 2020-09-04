<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    
    protected $table="models";
    protected $primaryKey="id";
    protected $dates = ['entry_date'];
    protected $fillable=[
        'brand_id',
        'name',
        'entry_date',
    ];
}

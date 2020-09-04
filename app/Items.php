<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
   	protected $table="items";
    protected $primaryKey="id";
    protected $fillable=[
        'brand_id',
        'model_id',
        'name',
        'description',
        'entry_date',
    ];
}

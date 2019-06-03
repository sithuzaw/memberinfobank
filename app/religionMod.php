<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class religionMod extends Model
{
    protected $fillable=['religionDesc','active','remark'];
    protected $primaryKey='religionId';
}

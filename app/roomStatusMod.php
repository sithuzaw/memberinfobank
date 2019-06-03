<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomStatusMod extends Model
{
    protected $fillable=['roomStatusDesc','active','remark'];
    protected $primaryKey='roomStatusId';
}

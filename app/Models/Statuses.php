<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['name'];
    protected $guarded = ['id'];
}
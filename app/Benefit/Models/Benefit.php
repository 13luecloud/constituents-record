<?php

namespace App\Benefit\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasUlids;

    protected $guarded = ['id'];
}

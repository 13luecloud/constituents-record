<?php

namespace App\Address\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasUlids;

    protected $guarded = ['id'];

    public function barangays(): HasMany
    {
        return $this->hasMany(Barangay::class);
    }
}

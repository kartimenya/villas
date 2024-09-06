<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Villa extends Model
{
    use HasFactory;

    public function apartments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Apartment::class);
    }
}

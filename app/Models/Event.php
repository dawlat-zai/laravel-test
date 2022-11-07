<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /**
     * An event may have many workshops
     *
     * @return HasMany
     */
    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class);
    }
}

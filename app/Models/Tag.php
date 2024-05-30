<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    /**
     * Get all of the jobs for the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

}

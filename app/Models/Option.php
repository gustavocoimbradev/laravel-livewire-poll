<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    protected $fillable = ['name'];
    public function poll(): BelongsTo {
        return $this->belongsTo(Poll::model);
    }

    public function votes(): HasMany {
        return $this->hasMany(Vote::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    protected $fillable = ['title', 'deleted'];
    public function options(): HasMany{
        return $this->hasMany(Option::class); 
    }
}

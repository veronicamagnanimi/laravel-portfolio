<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technology() {
        return $this->belongsToMany(Technology::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimaryCategory extends Model
{
    public function SecondaryCategories()
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}

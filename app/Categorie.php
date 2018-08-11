<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }

}

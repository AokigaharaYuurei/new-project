<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
     public function product(): BelongsToMany{
        return $this->belongsToMany(Product::class, 'feature_products')
        ->withPivot('value');
     }
    
}

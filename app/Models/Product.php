<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $guarded=[];


    public function category() :BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function features() :BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'feature_products')
        ->withPivot('value');
    }
    
}

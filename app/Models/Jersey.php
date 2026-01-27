<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jersey extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function material(): BelongsTo
    {
        return $this->belongsTo(MateriaJersey::class, 'primary_material_id');
    }

    public function primaty_color(): BelongsTo
    {
        return $this->belongsTo(JerseyPrimaryColor::class, 'primary_color_id');
    }

    public function colort_accents(): BelongsToMany
    {
        return $this->belongsToMany(ColorAccentJersey::class, 'color_accent_jersey', 'jersey_id', 'color_accent_id');
    }

    public function images()
    {
        return $this->hasMany(JerseyImage::class);
    }
}

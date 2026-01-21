<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class MateriaJersey extends Pivot
{
    use SoftDeletes;
    protected $guarded = [];
}

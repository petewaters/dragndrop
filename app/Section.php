<?php

namespace App;

use App\Part;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name'
    ];

    public function parts()
    {
        return $this->hasMany(Part::class)->orderBy('order', 'asc');
    }
}

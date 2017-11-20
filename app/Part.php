<?php

namespace App;

use App\Section;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'name',
        'order'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}

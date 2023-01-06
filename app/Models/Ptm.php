<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptm extends Model
{
    use HasFactory;

    public function PtmDict()
    {
        return $this->belongsTo('App\PtmDict');
    }
}

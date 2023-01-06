<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PtmDict extends Model
{
    use HasFactory;
    public function Ptm()
    {
        return $this->belongsTo('App\Ptm');
    }
}

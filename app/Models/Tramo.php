<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tramo extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "inicio_carret","fin_carret","carretera_id"
    ];
    public function carretera(){
        return $this->belongsTo("App\Models\Carretera")->withTrashed();
    }
}

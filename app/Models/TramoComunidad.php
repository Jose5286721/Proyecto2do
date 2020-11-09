<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TramoComunidad extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "comunidad_id","km_inicio","km_fin","tramo_id"
    ];
    public function comunidad(){
        return $this->belongsTo("App\Models\Comunidad")->withTrashed();
    }
    public function tramo(){
        return $this->belongsTo("App\Models\Tramo");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distritos extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $table="distritos";
    protected $fillable=["nombre","provincia_id"];
    public $timestamps=false;
    public function provincias(){
        return $this->belongsTo(provincias::class);
    }
}

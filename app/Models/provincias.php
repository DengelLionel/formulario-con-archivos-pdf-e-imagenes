<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $table="provincias";
    protected $fillable=["id","nombre"];
    public $timestamps=false;
    public function distritos(){
        return $this->hasMany(distritos::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boshqarma extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function computer(){
        return $this->hasMany(Compyuter::class,'boshqarma_id','id');
    }
}

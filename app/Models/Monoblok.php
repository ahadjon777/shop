<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monoblok extends Model
{
    use HasFactory;
    protected $fillable = ['model','seria_name','ishlabgan_sana','hisob_sana','olindi','topshirdi','ozu hajmi','boshqarma_id'];

    public function boshqarma() {
        return $this->belongsTo(Boshqarma::class,'boshqarma_id','id');
    }
}

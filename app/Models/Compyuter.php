<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compyuter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getBoshqarma()
    {
        return $this->hasOne(Compyuter::class, 'boshqarma_id', 'id');
    }
}

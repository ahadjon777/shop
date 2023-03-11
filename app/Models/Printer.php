<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPrinter()
    {
        return $this->hasOne(Boshqarma::class, 'boshqarma_id', 'id');
    }
}

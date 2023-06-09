<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Tes extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'id_kategori',
        'kategori_alat',
        'foto',
        'deskripsi_kategori',
    ];

    public function alat()
    {
        return $this->hasMany(Alat::class,'id_alat');
    }
}

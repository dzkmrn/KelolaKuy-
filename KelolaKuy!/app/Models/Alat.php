<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='alat';
    protected $primaryKey = 'id_alat';

    protected $fillable = [
        'id_alat',
        'id_jenis',
        'id_kategori',
        'nama_alat',
        'foto_alat',
        'merk_alat',
        'stok_alat',
    ];
    
    public function jenis()
    {
        return $this->belongsTo(Jenis::class,'id_alat','id_jenis');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_alat','id_kategori');
    }


}

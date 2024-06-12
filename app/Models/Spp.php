<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Spp extends Model
{
    use HasFactory;

    protected $table = 'spp';
    protected $primaryKey = 'id';  // Tambahkan ini
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
    	'tahun',
    	'nominal',
        'id_kelas',
        'tipe_tagihan'
    ];

    public function siswa()
    {
    	return $this->hasMany(Siswa::class);
    }
}

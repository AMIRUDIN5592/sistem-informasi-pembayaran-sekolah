<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'id';  // Tambahkan ini
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
    	'nama_kelas',
    	'kompetensi_keahlian',
    ];

    public function siswa()
    {
    	return $this->hasMany(Siswa::class);
    }
}

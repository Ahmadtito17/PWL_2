<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primarykey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id',
    ];

    public function kelas() {
        return $this->belongsTo(KelasModel::class);
    }

    public function mahasiswa_matkul()
    {
        return $this->hasMany(mahasiswa_matkul::class);
    }
}

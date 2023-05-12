<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa_matkul extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matkul';

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(MatkulModel::class,'matakuliah_id','kode_mk');
    }
}

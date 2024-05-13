<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanSiswa extends Model
{
    use HasFactory;
    protected $table = 'jurusan_siswa';
    public function list()
    {
        return $this->hasMany(ListSiswa::class, 'jurusan_id', 'id');
    }
}

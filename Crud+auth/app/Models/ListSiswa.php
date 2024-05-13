<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListSiswa extends Model
{
    use HasFactory;
    protected $table = "list_siswa";
    public function jurus()
    {
        return $this->belongsTo(JurusanSiswa::class, 'jurusan_id', 'id');
    }

}

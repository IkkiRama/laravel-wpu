<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Siswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nrp','email', 'jurusan'];
}

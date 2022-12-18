<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputJadwal extends Model
{
    use HasFactory;

    protected $table = 'inputjadwal';
    protected $fillable = ['', 'nama', 'nrp', 'lab', 'dospem1','dospem2','dosji1','dosji2','hari','tgl','ruang','',''];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'program_studi';
    protected $primaryKey = 'kode_prodi';
    protected $guarded = [];

    public $incrementing = false;

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa', 'program_studi');
    }
}

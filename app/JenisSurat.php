<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $guarded = [
        'id'
    ];

    public function persuratan()
    {
        return $this->hasMany('App\Persuratan', 'jenis_surat');
    }
}

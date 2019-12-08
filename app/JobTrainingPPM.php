<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTrainingPPM extends Model
{
    protected $guarded = [
        'id'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa', 'mahasiswa', 'nim');
    }

    public function persuratan()
    {
        return $this->hasOne('App\Persuratan', 'detail');
    }
}

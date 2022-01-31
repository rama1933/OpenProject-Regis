<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran_balik extends Model
{
     public $timestamps = false;
    protected $table = 'tbl_master_pendaftaran_balik_nama';
    protected $guarded = [''];

    public function biodata()
    {
        return $this->hasMany(Biodata::class, 'id', 'biodata_id');
    }
}

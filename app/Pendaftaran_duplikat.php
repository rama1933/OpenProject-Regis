<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran_duplikat extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_master_pendaftaran_duplikat';
    protected $guarded = [''];

    public function biodata()
    {
        return $this->hasMany(Biodata::class, 'id', 'biodata_id');
    }
}

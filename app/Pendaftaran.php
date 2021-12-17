<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
        public $timestamps = false;
    protected $table = 'tbl_master_pendaftaran';
    protected $guarded = [''];
}

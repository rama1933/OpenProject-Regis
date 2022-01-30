<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    //
    public $timestamps = false;
    protected $table = 'tbl_master_biodata';
    protected $guarded = [''];
}

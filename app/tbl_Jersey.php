<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_Jersey extends Model
{
    protected $dillable = ["j_code","j_name","j_size","j_price","stock","j_img"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View3d extends Model
{
    public $table = "view_3d";

    protected $fillable = ['date', 'playerid','agentid','currency','bet','win','rake','tournament','net','fin','aams_table','aams_ticket'];
    protected $dates = ['date']; 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventoscalendar extends Model
{
    protected $table = 'events';
    protected $fillable = ['title', 'actividades', 'start', 'end','color'];
    //protected $hidden = ['id'];
}

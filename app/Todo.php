<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  /***
   * 
   */
   
    protected $fillable = [
        'description', 'responsible', 'priority','complited'
    ];
}

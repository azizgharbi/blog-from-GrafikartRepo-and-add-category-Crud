<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachement extends Model
{

  public $guarded = [] ; /*fillable inverse */

  /*protected $fillable = ['name', 'attachement_type','	attachement_id'];*/


   public function attachement () {
      return $this->morphTo();
   }


}

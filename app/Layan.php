<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layan extends Model
{
  protected $table = 'layan';
  protected $primaryKey = 'id_pesan';
  public $timestamps = false;
}

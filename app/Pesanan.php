<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
  protected $table = 'pesanan';
  protected $primaryKey = 'id_pesan';
  public $timestamps = false;
}

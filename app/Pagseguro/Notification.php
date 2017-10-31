<?php

namespace App\Pagseguro;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'pagseguro_notifications';
  protected $fillable = ['code', 'reference'];
}

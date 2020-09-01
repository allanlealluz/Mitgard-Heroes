<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
  protected $filleble = [
      'id',
      'nome'
      ];
  protected $table = 'pessoas';
}


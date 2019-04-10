<?php

namespace Ferita\Products\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //  protected $table = "products"; по умолчанию
    protected $guarded = ['id', 'created_at', 'updated_at'];

}

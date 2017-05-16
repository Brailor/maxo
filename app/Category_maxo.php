<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_maxo extends Model
{
  public function subcategories() {
    return $this->hasMany('App\Subcategory');
  }

}

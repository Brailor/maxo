<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function product() {
      return $this->hasOne('App\Product');
    }

    public function category() {
      return $this->belongsTo('App\Category_maxo');
    }
}

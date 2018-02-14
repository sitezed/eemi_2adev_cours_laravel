<?php

namespace Eemi;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $table = 'articles';
  public function user() {
    return $this->belongsTo('Eemi\User', 'user_id'); // avec cette methode je recupere la relation User rattachée à l'article
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
  use HasFactory;

  protected $fillable = ['tweet'];

  ///一対多の連携の設定　自分が一
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

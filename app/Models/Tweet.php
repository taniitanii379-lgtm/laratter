<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Tweet extends Model
{
  use HasFactory;

  protected $fillable = ['tweet'];

    // 🔽 1対多の関係
  public function comments()
  {
    return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
  }

  ///一対多の連携の設定　自分が一
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function liked()
  {
      return $this->belongsToMany(User::class)->withTimestamps();
  }

}

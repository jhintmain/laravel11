<?php

namespace App\Models;

use App\Observers\MemberObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Member extends Model
{
    use HasApiTokens,HasFactory,SoftDeletes;

    protected $table = 'member';

    protected $guarded = [];

    protected static function booted()
    {
        static::observe(MemberObserver::class);
    }
}

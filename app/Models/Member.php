<?php

namespace App\Models;

use App\Observers\MemberObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'member';

    protected $guarded = [];

    protected static function booted()
    {
        static::observe(MemberObserver::class);
    }
}
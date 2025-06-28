<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Community;

class Group extends Model
{
    protected $fillable = ['community_id', 'name', 'description'];

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

}

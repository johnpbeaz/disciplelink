<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Community;
use App\Models\User;
use App\Models\Member;

class Group extends Model
{
    protected $fillable = ['community_id', 'name', 'description', 'group_leader_id'];

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'group_leader_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Community;
use App\Models\User;

class Group extends Model
{
    protected $fillable = ['community_id', 'name', 'description', 'leader_id'];


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
        return $this->belongsTo(User::class, 'leader_id');
    }

}

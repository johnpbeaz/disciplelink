<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Community extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * The users who are leaders of this community.
     */
    public function leaders()
    {
        return $this->belongsToMany(Member::class, 'community_user', 'community_id', 'member_id')
            ->whereHas('roles', function ($query) {
                $query->where('name', 'community_leader');
            });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Community extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * The members who are leaders of this community.
     */
    public function leaders()
    {
        return $this->belongsToMany(Member::class, 'community_member', 'community_id', 'member_id')
            ->whereHas('roles', function ($query) {
                $query->where('name', 'community_leader');
            });
    }
}

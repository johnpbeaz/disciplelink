<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Community extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * The users who are leaders of this community.
     */
    public function leaders()
    {
        return $this->belongsToMany(User::class, 'community_user', 'community_id', 'user_id')
            ->whereHas('roles', function ($query) {
                $query->where('name', 'community_leader');
            });
    }
}

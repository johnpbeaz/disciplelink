<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'group_id',
    ];

    /**
     * Get the group that the member belongs to.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }


}

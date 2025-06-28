<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->foreignId('community_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }


}

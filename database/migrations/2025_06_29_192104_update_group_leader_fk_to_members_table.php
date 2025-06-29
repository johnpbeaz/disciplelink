<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            // Drop the existing foreign key
            $table->dropForeign(['group_leader_id']);

            // Add a new one referencing members
            $table->foreign('group_leader_id')
                  ->references('id')->on('members')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign(['group_leader_id']);
            $table->foreign('group_leader_id')
                  ->references('id')->on('users')
                  ->onDelete('set null');
        });
    }
};

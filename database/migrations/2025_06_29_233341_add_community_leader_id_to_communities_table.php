<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->foreignId('community_leader_id')
                  ->nullable()
                  ->constrained('members')
                  ->nullOnDelete(); // optional behavior
        });
    }

    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->dropForeign(['community_leader_id']);
            $table->dropColumn('community_leader_id');
        });
    }
};

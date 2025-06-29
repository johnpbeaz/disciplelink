<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->foreignId('group_id')->nullable()->constrained()->change();
        });
    }

    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->foreignId('group_id')->nullable(false)->constrained()->change();
        });
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE members DROP CONSTRAINT IF EXISTS members_group_id_foreign');
        } elseif (DB::getDriverName() === 'mysql') {
            DB::statement('ALTER TABLE members DROP FOREIGN KEY IF EXISTS members_group_id_foreign');
        }

        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id')->nullable()->change();
        });

        Schema::table('members', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE members DROP CONSTRAINT IF EXISTS members_group_id_foreign');
        } elseif (DB::getDriverName() === 'mysql') {
            DB::statement('ALTER TABLE members DROP FOREIGN KEY IF EXISTS members_group_id_foreign');
        }

        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id')->nullable(false)->change();
        });

        Schema::table('members', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups')->cascadeOnDelete();
        });
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('members', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->string('name')->after('id');
        });
    }

    public function down()
    {
        Schema::table('members', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->dropColumn('name');
        });
    }

};

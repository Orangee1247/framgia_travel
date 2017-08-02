<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifyTableV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable()->default(null)->change();
            $table->string('name')->nullable()->default(null)->change();
            $table->date('date_of_birth')->nullable()->default(null)->change();
        });

        Schema::table('provinces', function (Blueprint $table) {
            $table->string('img_name')->nullable()->default(null);
            $table->string('img_url')->nullable()->default(null);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable(false)->change();
            $table->string('name')->nullable(false)->change();
            $table->date('date_of_birth')->nullable(false)->change();
        });

        Schema::table('provinces', function (Blueprint $table) {
            $table->string('img_name')->nullable(false)->change();
            $table->string('img_url')->nullable(false)->change();
        });
    }
}

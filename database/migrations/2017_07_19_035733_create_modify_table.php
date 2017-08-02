<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->default(null)->change();
            $table->string('address')->default(null)->change();
            $table->string('self_describe')->default(null)->change();
        });

        Schema::table('user_gallerys', function (Blueprint $table) {
            $table->string('img_url')->default(null)->change();
        });

        Schema::table('provinces', function (Blueprint $table) {
            $table->string('description')->default(null)->change();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('description')->default(null)->change();
            $table->string('address')->default(null)->change();
            $table->string('open_time')->default(null)->change();
            $table->string('expected_price')->default(null)->change();
        });

        Schema::table('service_gallerys', function (Blueprint $table) {
            $table->string('img_url')->default(null)->change();
        });

        Schema::table('plans', function (Blueprint $table) {
            $table->string('description')->default(null)->change();
        });

        Schema::table('requested_services', function (Blueprint $table) {
            $table->string('description')->default(null)->change();
            $table->string('address')->default(null)->change();
            $table->string('open_time')->default(null)->change();
            $table->string('expected_price')->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->default(false)->change();
            $table->string('address')->default(false)->change();
            $table->string('self_describe')->default(false)->change();
        });

        Schema::table('user_gallerys', function (Blueprint $table) {
            $table->string('img_url')->default(false)->change();
        });

        Schema::table('provinces', function (Blueprint $table) {
            $table->string('description')->default(false)->change();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('description')->default(false)->change();
            $table->string('address')->default(false)->change();
            $table->string('open_time')->default(false)->change();
            $table->string('expected_price')->default(false)->change();
        });

        Schema::table('service_gallerys', function (Blueprint $table) {
            $table->string('img_url')->default(false)->change();
        });

        Schema::table('plans', function (Blueprint $table) {
            $table->string('description')->default(false)->change();
        });

        Schema::table('requested_services', function (Blueprint $table) {
            $table->string('description')->default(false)->change();
            $table->string('address')->default(false)->change();
            $table->string('open_time')->default(false)->change();
            $table->string('expected_price')->default(false)->change();
        });
    }
}

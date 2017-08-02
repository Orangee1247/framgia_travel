<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifyTableV3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_pic')->nullable()->default(null);
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('profile_pic')->nullable()->default(null);
        });

        Schema::table('service_gallerys', function (Blueprint $table) {
            $table->string('province_name')->nullable()->default(null);
            $table->string('pic_name')->nullable()->default(null);
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
            $table->string('profile_pic')->nullable(false)->change();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('profile_pic')->nullable(false)->change();
        });

        Schema::table('service_gallerys', function (Blueprint $table) {
            $table->string('province_name')->nullable(false)->change();
            $table->string('pic_name')->nullable(false)->change();
        });
    }
}

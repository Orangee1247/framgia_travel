<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinceGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('province_gallery')) {
            Schema::create('province_gallery', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('province_id')->unsigned()->nullable()->default(null);
                $table->string('img_url')->nullable()->default(null);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('province_gallery');
    }
}

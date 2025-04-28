<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('contacts')->nullable();
            $table->text('address')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->text('logo')->nullable();
            $table->tinyInteger('slider_status')->default(0);
            $table->string('ad_title')->nullable();
            $table->text('ad_text')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_text')->nullable();
            $table->text('footer_description')->nullable();
            $table->string('video_size')->nullable();
            $table->text('copy_right')->nullable();
            $table->text('patient_text')->nullable();
            $table->text('doctor_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};

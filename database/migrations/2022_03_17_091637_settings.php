<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('favicon')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('whatsappDurum',[1,2])->default(1);
            $table->string('linkedin')->nullable();
            $table->enum('linkedinDurum',[1,2])->default(1);
            $table->string('instagram')->nullable();
            $table->enum('instagramDurum',[1,2])->default(1);
            $table->string('phone')->nullable();
            $table->enum('phoneDurum',[1,2])->default(1);
            $table->string('mail')->nullable();
            $table->enum('mailDurum',[1,2])->default(1);
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

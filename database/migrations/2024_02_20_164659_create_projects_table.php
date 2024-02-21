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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 64);
            $table->string('used_technologies', 250);
            $table->date('create_date');
            $table->date('start_date');
            $table->date('completed_date')->nullable;
            $table->string('status', 64);
            $table->text('description', 3000);
            $table->string('web_site', 250);
            $table->string('image_link', 250);
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
        Schema::dropIfExists('projects');
    }
};

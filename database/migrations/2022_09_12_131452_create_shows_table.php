<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('headliner_one');
            $table->json('headliner_one_description')->nullable();
            $table->string('headliner_one_country')->nullable();
            $table->string('support_one')->nullable();
            $table->json('support_one_description')->nullable();
            $table->date('date');
            $table->string('slug');
            $table->longText('summary');
            $table->json('tags');
            $table->string('venue');
            $table->decimal('price', 4, 2);
            $table->string('image-url')->nullable();
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
        Schema::dropIfExists('shows');
    }
};

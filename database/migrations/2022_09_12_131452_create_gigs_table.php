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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->string('headliner_one');
            $table->string('headliner_one_country')->nullable();
            $table->string('headliner_two')->nullable();
            $table->string('headliner_three')->nullable();
            $table->string('headliner_four')->nullable();
            $table->string('first_support_band')->nullable();
            $table->string('second_support_band')->nullable();
            $table->string('third_support_band')->nullable();
            $table->string('fourth_support_band')->nullable();
            $table->date('date');
            $table->json('description')->nullable();
            $table->string('slug');
            $table->string('tags');
            $table->string('venue');
            $table->decimal('price', 4, 2);
            $table->string('logo-url')->nullable();
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
        Schema::dropIfExists('gigs');
    }
};

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
    { {
            Schema::create('photos', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('artist');
                $table->string('exhibition');
                $table->integer('year');
                $table->boolean('like');
                $table->text('filename');
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
    }
};

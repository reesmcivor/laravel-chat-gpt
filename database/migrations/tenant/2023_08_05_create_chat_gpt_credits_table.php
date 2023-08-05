<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gpt_queries', function (Blueprint $table) {
            $table->id();
            $table->text('query');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gpt_queries');
    }
};

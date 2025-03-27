<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('articles_id');
            $table->Integer('user_id');
            $table->string('comment');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');

        Schema::table('comments', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};

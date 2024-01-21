<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('movings', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }
};

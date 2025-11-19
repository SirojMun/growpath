<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gold_purchases', function (Blueprint $table) {
            #id_purchase, status, date, user_id (fk), id package(fk)
            $table->id('id_purchase')->primary();
            $table->string('status');
            $table->date('date');
            $table->string('id_user', 10);
            $table->string('id_package', 10);
            $table->foreign('id_user')->references('id_user')->on('user_growpaths')->onDelete('cascade');
            $table->foreign('id_package')->references('id_package')->on('gold_shops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_purchases');
    }
};

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
        Schema::create('commande-article', function (Blueprint $table) {
            $table->id();
            $table->integer("quantite");
            $table->unsignedBigInteger("commande_id");
            $table->foreign("commande_id")->references("id")->on('commandes')->onDelete('cascade');

            $table->unsignedBigInteger("article_id");
            $table->foreign("article_id")->references("id")->on('articles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

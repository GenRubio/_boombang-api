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
        Schema::create('api_sceneries', function (Blueprint $table) {
            $table->id();
            $table->integer('model_id');
            $table->integer('type_id')->comment('1: area, 2: island, 3: game, 4: home');
            $table->integer('accessibility_type_id')->comment('1: public, 0: private');
            $table->string('name');
            $table->integer('uppert_price')->default(0);
            $table->integer('coco_price')->default(0);
            $table->integer('max_visitors')->nullable();
            $table->longText('content')->nullable();
            $table->longText('map_area');
            $table->integer('door_position_x')->default(0);
            $table->integer('door_position_y')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_sceneries');
    }
};

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
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image', 50);
            $table->string('video', 50);
            $table->text('link')->nullable();
            $table->string('title', 50);
            $table->enum('status',['0','1'])->default(1)->comment('0 => deactive , 1 => active');
            $table->tinyInteger('sort')->default(1);
            $table->timestamp('created_at')->useCurrent()->index('created_at');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate()->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};

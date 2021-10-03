<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('hint1',255);
            $table->string('hint2',200);
            $table->string('authorname',100);
            $table->text('desc1');
            $table->text('desc2');
            $table->text('desc3');
            $table->string('postimg',255);
            $table->string('blogimg',255);
            $table->text('desc4');
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
        Schema::dropIfExists('blogs');
    }
}

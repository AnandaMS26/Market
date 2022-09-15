<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('picture')->nullable();
            $table->string('mentor');
            $table->float('rating');
            $table->integer('time');
            $table->integer('lesson');
            $table->string('level');
            $table->text('desc_detail')->nullable();
            $table->text('desc_goal')->nullable();
            $table->text('desc_syllabus')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academy_packages');
    }
}

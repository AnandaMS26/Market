<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSilabusPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('silabus_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academy_package_id')->constrained('academy_packages')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('silabus_title');
            $table->integer('silabus_time');
            $table->integer('silabus_lesson');
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
        Schema::dropIfExists('silabus_packages');
    }
}

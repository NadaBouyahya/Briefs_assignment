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
        Schema::create('student_briefs', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('brief_id');

            $table->primary(['student_id', 'brief_id'], 'id_studentBrief');

            $table->foreign('student_id')->references('id')->on('students')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('brief_id')->references('id_brief')->on('briefs')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('student_briefs');
    }
};

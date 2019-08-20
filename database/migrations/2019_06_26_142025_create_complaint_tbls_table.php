<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_tbls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('student_id');
            $table->string('categories');
            $table->string('types');
            $table->date('complaint_date');
            $table->string('department');
            $table->string('campus');
            $table->text('description_of_complaint')->nullable();
            $table->text('uplode_file');
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
        Schema::dropIfExists('complaint_tbls');
    }
}

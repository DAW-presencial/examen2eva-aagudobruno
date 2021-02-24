<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('docType');
            $table->string('dni', 9)->unique();
            $table->string('tutorName');
            $table->string('tutorSurname1');
            $table->string('tutorSurname2')->nullable();
            $table->string('dniCountry');
            $table->string('province');
            $table->string('municipi');
            $table->enum('status',['active', 'inactive']);
            $table->char('tlf', 9);
            $table->string('email');
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
        Schema::dropIfExists('tutors');
    }
}

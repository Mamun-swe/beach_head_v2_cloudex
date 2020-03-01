<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region');
            $table->string('name');
            $table->string('city');
            $table->string('advisory_exp_1');
            $table->string('advisory_exp_2');
            $table->string('advisory_exp_3');
            $table->string('mrkets_1');
            $table->string('mrkets_2');
            $table->string('mrkets_3');
            $table->string('sector_1');
            $table->string('sector_2');
            $table->string('sector_3');
            $table->string('founder_ceo_exp');
            $table->string('govt_regulatory_exp');
            $table->string('years_of_experience');
            $table->string('nz_working_experience');
            $table->integer('point')->default('0');
            $table->integer('status')->default('1');
            $table->text('profile_url');
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
        Schema::dropIfExists('members');
    }
}

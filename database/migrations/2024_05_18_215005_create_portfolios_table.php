<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('education');
            $table->text('company1');
            $table->text('description1');
            $table->text('company2');
            $table->text('description2');
            $table->text('company3');
            $table->text('description3');
            $table->text('skill1');
            $table->text('skill2');
            $table->text('skill3');
            $table->text('skill4');
            $table->text('describe_your_self');
            $table->text('project1');
            $table->text('project2');
            $table->text('project3');
            $table->text('project4');
            $table->text('your_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

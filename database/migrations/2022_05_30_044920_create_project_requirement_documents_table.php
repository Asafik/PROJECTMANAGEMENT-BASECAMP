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
        Schema::create('project_requirement_documents', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_type');
            $table->text('description');
            $table->string('opd_name');
            $table->string('project_files')->nullable();
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
        Schema::dropIfExists('project_requirement_documents');
    }
};

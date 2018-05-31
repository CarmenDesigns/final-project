<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("location");
            $table->integer("posted_by_id");
            $table->integer("job_type_id");
            $table->integer("company_id");
            $table->string("title");
            $table->mediumText("job-description");
            $table->unsignedInteger("job_location_id");
            $table->foreign("job_location_id")->references("id")->on("job_locations");
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
        Schema::dropIfExists('jobs');
    }
}

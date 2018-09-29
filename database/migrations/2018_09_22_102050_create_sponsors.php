<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;



class CreateSponsors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function($collection)
        {
            $collection->string('url');
            $collection->string('content');
            $collection->string('active');
            $collection->string('type');
            $collection->string('name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}

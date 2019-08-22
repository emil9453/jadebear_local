<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1566477675SpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('special_offers')) {
            Schema::create('special_offers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('photo')->nullable();
                $table->string('caption1')->nullable();
                $table->string('caption2')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_offers');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1566477445RelationshipHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('relationship_histories')) {
            Schema::create('relationship_histories', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('year')->nullable();
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
        Schema::dropIfExists('relationship_histories');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1566644666WhyExactlyWesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('why_exactly_wes')) {
            Schema::create('why_exactly_wes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('caption')->nullable();
                $table->text('text')->nullable();
                
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
        Schema::dropIfExists('why_exactly_wes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1565687935TeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('team_members')) {
            Schema::create('team_members', function (Blueprint $table) {
                $table->increments('id');
                $table->string('position')->nullable();
                $table->string('name');
                $table->string('surname')->nullable();
                $table->text('about')->nullable();
                $table->string('photo')->nullable();
                
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
        Schema::dropIfExists('team_members');
    }
}

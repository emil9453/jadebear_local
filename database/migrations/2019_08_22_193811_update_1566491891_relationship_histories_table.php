<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1566491891RelationshipHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relationship_histories', function (Blueprint $table) {
            if(Schema::hasColumn('relationship_histories', 'caption2')) {
                $table->dropColumn('caption2');
            }
            
        });
Schema::table('relationship_histories', function (Blueprint $table) {
            
if (!Schema::hasColumn('relationship_histories', 'text')) {
                $table->text('text')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relationship_histories', function (Blueprint $table) {
            $table->dropColumn('text');
            
        });
Schema::table('relationship_histories', function (Blueprint $table) {
                        $table->string('caption2')->nullable();
                
        });

    }
}

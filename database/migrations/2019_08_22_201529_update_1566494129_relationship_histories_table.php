<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1566494129RelationshipHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relationship_histories', function (Blueprint $table) {
            if(Schema::hasColumn('relationship_histories', 'text')) {
                $table->dropColumn('text');
            }
            
        });
Schema::table('relationship_histories', function (Blueprint $table) {
            
if (!Schema::hasColumn('relationship_histories', 'text1')) {
                $table->text('text1')->nullable();
                }
if (!Schema::hasColumn('relationship_histories', 'caption2')) {
                $table->string('caption2')->nullable();
                }
if (!Schema::hasColumn('relationship_histories', 'text2')) {
                $table->text('text2')->nullable();
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
            $table->dropColumn('text1');
            $table->dropColumn('caption2');
            $table->dropColumn('text2');
            
        });
Schema::table('relationship_histories', function (Blueprint $table) {
                        $table->text('text')->nullable();
                
        });

    }
}

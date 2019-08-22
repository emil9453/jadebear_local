<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1566494493SpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('special_offers', function (Blueprint $table) {
            if(Schema::hasColumn('special_offers', 'text')) {
                $table->dropColumn('text');
            }
            
        });
Schema::table('special_offers', function (Blueprint $table) {
            
if (!Schema::hasColumn('special_offers', 'text1')) {
                $table->text('text1')->nullable();
                }
if (!Schema::hasColumn('special_offers', 'caption2')) {
                $table->string('caption2')->nullable();
                }
if (!Schema::hasColumn('special_offers', 'tetxt2')) {
                $table->text('tetxt2')->nullable();
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
        Schema::table('special_offers', function (Blueprint $table) {
            $table->dropColumn('text1');
            $table->dropColumn('caption2');
            $table->dropColumn('tetxt2');
            
        });
Schema::table('special_offers', function (Blueprint $table) {
                        $table->text('text')->nullable();
                
        });

    }
}

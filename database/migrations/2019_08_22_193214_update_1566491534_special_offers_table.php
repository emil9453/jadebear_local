<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1566491534SpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('special_offers', function (Blueprint $table) {
            if(Schema::hasColumn('special_offers', 'caption2')) {
                $table->dropColumn('caption2');
            }
            
        });
Schema::table('special_offers', function (Blueprint $table) {
            
if (!Schema::hasColumn('special_offers', 'text')) {
                $table->text('text')->nullable();
                }
if (!Schema::hasColumn('special_offers', 'photo_name')) {
                $table->string('photo_name')->nullable();
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
            $table->dropColumn('text');
            $table->dropColumn('photo_name');
            
        });
Schema::table('special_offers', function (Blueprint $table) {
                        $table->string('caption2')->nullable();
                
        });

    }
}

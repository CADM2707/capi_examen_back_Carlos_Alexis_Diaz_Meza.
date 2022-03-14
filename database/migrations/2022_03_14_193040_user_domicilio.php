<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->id();        
        $table->string('user_id');                        
        $table->string('domicilio');                        
        $table->string('numero_exterior');                                                    
        $table->string('colonia');                        
        $table->number('cp',5);                        
        $table->string('ciudad');                        
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

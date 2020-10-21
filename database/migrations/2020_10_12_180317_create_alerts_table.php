<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('groupe_sanguin');
            $table->string('ville');
            $table->string('position');
            $table->text('message')->nullable();
            $table->date('date_alert');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alerts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    
    }
}

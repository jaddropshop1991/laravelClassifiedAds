<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToAdvertisments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advertisments', function (Blueprint $table) {
            //
            $table->string('slug')->after('name');
            $table->string('link')->nullabel()->change();
            $table->string('phone_number')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertisments', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
        });
    }
}
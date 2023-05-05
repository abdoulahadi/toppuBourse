<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('ine')->default('valeur_par_defaut')->change();
            $table->string('telephone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->boolean('admin')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('ine')->nullable(false)->change();
            $table->string('telephone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->boolean('admin')->default(false)->change();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('category_type_id')->unsigned()->nullable();

            // Adding foreign key constraint
            $table->foreign('category_type_id')->references('id')->on('category_types')->onDelete('set null');
        });
    }

    public function down() {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_type_id']);
            $table->dropColumn('category_type_id');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->nullable()->after('title');
            $table->foreign('place_id')->references('id')->on('places');

            $table->unsignedBigInteger('editorial_id')->nullable()->after('title');
            $table->foreign('editorial_id')->references('id')->on('editorials');

            $table->string('cdu',20)->after('title');
            $table->foreign('cdu')->references('cdu')->on('cdus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_place_id_foreign');
            $table->dropColumn('place_id');

            $table->dropForeign('books_editorial_id_foreign');
            $table->dropColumn('editorial_id');

            $table->dropForeign('books_cdu_foreign');
            $table->dropColumn('cdu');
        });
       
    }
}

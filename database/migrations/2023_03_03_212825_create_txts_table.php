<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Index;
use App\Models\Language;
class CreateTxtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('txts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Index::class);
            $table->foreignIdFor(Language::class);
            $table->text('txt');
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
        Schema::dropIfExists('txts');
    }
}

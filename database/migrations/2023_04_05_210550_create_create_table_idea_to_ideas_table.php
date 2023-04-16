<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Idea;
use Illuminate\Support\Facades\Schema;

class CreateCreateTableIdeaToIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_to_idea', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->foreignIdFor(Idea::class, 'pidea_id');
            $table->foreignIdFor(Idea::class, 'cidea_id');
            $table->timestamps();
            $table->foreign('pidea_id', 'pideas_to_idea_fk')->on('ideas')->references('id')->change();
            $table->foreign('cidea_id', 'cideas_to_idea_fk')->on('ideas')->references('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idea_to_idea');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateTovarsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('tovars',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->text("body")->nullable();
            $table->string("picture")->nullable();
            $table->string("url")->nullable();
            $table->string("product_key")->nullable();
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->integer("catalogs_id")->references("id")->on("catalogs")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->string("count")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tovars');
    }

}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('image');
            $table->string('ad');
            $table->string('cins');
            $table->string('dogum_tarixi');
            $table->integer('teleb_olunan');
            $table->integer('verilen');
            $table->string('unvani');
            $table->string('xesteliyi');
            $table->string('mualice_yeri');
            $table->string('ad_elaqe1');
            $table->string('ad_elaqe2');
            $table->integer('elaqe1');
            $table->integer('elaqe2');
            $table->string('hesab');
            $table->string('hesab_bank');
            $table->string('status')->default(0);
            $table->string('status_2');
            $table->longText('content');
            $table->integer('hit')->default(0);
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

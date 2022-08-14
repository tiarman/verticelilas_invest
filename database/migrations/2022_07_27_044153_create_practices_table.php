<?php

use App\Models\Practice;
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
        Schema::create(with(new Practice)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->longText('description');
            $table->string('status')->default(Practice::$statusArray[1]);
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
        Schema::dropIfExists(with(new Practice)->getTable());
    }
};

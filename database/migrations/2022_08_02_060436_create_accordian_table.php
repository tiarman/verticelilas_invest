<?php

use App\Models\Accordian;
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
        Schema::create(with(new Accordian)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('partner_id');
            $table->string('title');
            $table->longText('description');
            $table->string('status')->default(Accordian::$statusArray[1]);
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
        Schema::dropIfExists(with(new Accordian)->getTable());
    }
};

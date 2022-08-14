<?php

use App\Models\Interview;
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
        Schema::create(with(new Interview)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('partner_id');
            $table->string('type');
            $table->string('link');
            $table->string('status')->default(Interview::$statusArray[1]);
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
        Schema::dropIfExists(with(new Interview)->getTable());
    }
};

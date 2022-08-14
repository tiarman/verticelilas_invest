<?php

use App\Models\Publication;
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
        Schema::create(with(new Publication)->getTable(), function (Blueprint $table) {
            // id, partner_id, name, image, link, file, status
            $table->id();
            $table->unsignedBigInteger('partner_id');
            $table->string('name');
            $table->string('image');
            $table->string('link')->nullable();
            $table->string('file');
            $table->string('status')->default(Publication::$statusArray[1]);
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
        Schema::dropIfExists(with(new Publication)->getTable());
    }
};

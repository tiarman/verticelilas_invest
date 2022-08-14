<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProfessionalMembership;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(with(new ProfessionalMembership)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('partner_id');
            $table->string('title');
            $table->string('short_description');
            $table->string('link');
            $table->string('status')->default(ProfessionalMembership::$statusArray[1]);
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
        Schema::dropIfExists(with(new ProfessionalMembership)->getTable());
    }
};

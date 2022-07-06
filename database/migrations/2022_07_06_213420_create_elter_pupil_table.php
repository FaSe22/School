<?php

use App\Models\Elter;
use App\Models\Pupil;
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
        Schema::create('elter_pupil', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Elter::class);
            $table->foreignIdFor(Pupil::class);
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
        Schema::dropIfExists('elter_pupil');
    }
};

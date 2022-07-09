<?php

use App\Models\Pupil;
use App\Models\Task;
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
        Schema::create('pupil_task', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Task::class)->constrained();
            $table->foreignIdFor(Pupil::class)->constrained();
            $table->boolean('solved');
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
        Schema::dropIfExists('pupil_task');
    }
};

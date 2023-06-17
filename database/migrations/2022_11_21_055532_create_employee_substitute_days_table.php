<?php

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
        Schema::create('employee_substitute_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->date('work_date');
            $table->date('substituted_to_date');
            $table->json('extra')->nullable();
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
        Schema::dropIfExists('employee_substitute_days');
    }
};

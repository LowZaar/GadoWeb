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
        Schema::create('cattle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->integer('bovine_earring_id');
            $table->integer('association_id')->nullable();
            $table->foreignId('flock_id')->nullable()->constrained('flocks');
            $table->foreignId('breed_id')->constrained('breeds');
            $table->foreignId('father_id')->nullable()->constrained('cattle');
            $table->foreignId('mother_id')->nullable()->constrained('cattle');
            $table->string('name', 100);
            $table->string('category', 100);
            $table->integer('sex');
            $table->date('born_date');
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
        Schema::dropIfExists('cattle');
    }
};

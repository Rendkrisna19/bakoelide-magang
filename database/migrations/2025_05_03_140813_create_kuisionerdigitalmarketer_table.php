<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_kuisionerdigitalmarketer_table.php

public function up()
{
    Schema::create('kuisionerdigitalmarketer', function (Blueprint $table) {
        $table->id();
        $table->string('user_name');
        $table->string('user_email');
        $table->string('tujuan');
        $table->json('tantangan');
        $table->string('social_commerce');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuisionerdigitalmarketer');
    }
};
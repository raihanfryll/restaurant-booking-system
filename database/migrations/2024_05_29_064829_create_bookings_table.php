<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bookingNo', 12);
            $table->string('fullName');
            $table->string('emailId');
            $table->string('phoneNumber', 12);
            $table->date('bookingDate');
            $table->string('bookingTime');
            $table->string('noAdults', 20);
            $table->string('noChildrens', 20);
            $table->string('tableId', 11);
            $table->string('adminremark')->nullable();
            $table->string('boookingStatus', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

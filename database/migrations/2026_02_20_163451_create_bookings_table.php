<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->string('kode_booking');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->unsignedInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan');
            $table->unsignedInteger('id_jenis_servis');
            $table->foreign('id_jenis_servis')->references('id_jenis_servis')->on('jenis_servis');
            $table->string('nomor_plat');
            $table->dateTime('tanggal_booking');
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'completed'
            ])->default('pending');
            $table->text('catatan_keluhan')->nullable();
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

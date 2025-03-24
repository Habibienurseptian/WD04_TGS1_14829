<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    public function up(): void{
        Schema::create('periksas', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->foreignId('id_pasien')->constrained('pasiens')->on('users')->onDelete('cascade');
            $table->foreignId('id_dokter')->constrained('dokters')->on('users')->onDelete('cascade');
            $table->timestamp('tgl_periksa')->nulllable();
            $table->string('catatan')->nulllable()->max(255);
            $table->integer('biaya_periksa')->nulllable();
        });
    }
}

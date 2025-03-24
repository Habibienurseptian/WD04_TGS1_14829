<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Periksa extends Model
{
    public function up(): void{
        Schema::create('detail__periksas', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->foreignId('id_periksa')->constrained('periksas')->on('periksas')->onDelete('cascade');
            $table->foreignId('id_obat')->constrained('obats')->on('obats')->onDelete('cascade');
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function up(): void{
        Schema::create('obats', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('nama_obat')->max(255);
            $table->string('kemasan')->max(255);
            $table->integer('harga')->nulllable();
        });
    }
}

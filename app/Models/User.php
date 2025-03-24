<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function up(): void{
        Schema::create('users', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->String('nama')->max(255);
            $table->string('email')->unique(255);
            $table->string('password')->max(8);
            $table->string('no_hp')->max(50);
            $table->string('role')->default('user')->max(50);
        });
    }
}

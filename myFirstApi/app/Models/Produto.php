<?php

 namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Foundation\Auth\Produto as Authenticatable;
 use Illuminate\Notifications\Notifiable;
 use Laravel\Sanctum\HasApiTokens;

 class Produto extends Authenticatable
 {
    use HasApiTokens, HasFactory, Notifiable;

     /**
      * The attributes that are mass assignable.
      *
     * @var array<int, string>
     */
     protected $fillable = [
         'nome',
         'valor',
         'descricao',
     ];
 }

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Produto extends Model
// {
//     use HasFactory;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'nome',
//         'valor',
//         'descrição',
//     ];
// }


<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PatelContact extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'text_name','text_email','text_phone','text_subject','text_comment'
    ];
    protected $table='contacts';
}

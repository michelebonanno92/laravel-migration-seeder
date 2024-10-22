<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Va a cercare nel DB la tabella che si chiama al plurale in snake case, cioè trains 
class Train extends Model
{
    use HasFactory;
    // altrimenti dovrei cambiare il protected della $table 
    //  es protected $table = 'NOME DEL MODEL'
}

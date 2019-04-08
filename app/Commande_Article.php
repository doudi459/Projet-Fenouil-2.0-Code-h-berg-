<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande_Article extends Model
{
    protected  $table = 'Article_commend';
    protected  $primaryKey = 'numéro';
}

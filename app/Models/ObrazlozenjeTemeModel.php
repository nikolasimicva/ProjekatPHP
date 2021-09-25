<?php

namespace App\Models;

use CodeIgniter\Model;

class ObrazlozenjeTemeModel extends Model
{
    protected $table = 'obrazlozenje_teme';
    protected $allowedFields = [
        'id_rad', 'autor', 'oblast_rada', 'predmet_cilj_metode', 'sadrzaj_ocekivani_rezultat	
        ',
    ];
    protected $returnType = 'object';
}
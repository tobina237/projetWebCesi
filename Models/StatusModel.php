<?php

namespace App\Models;

class StatusModel extends Model{
    protected $id;
    protected $nom;

    public function __construct(){
        $this->table = str_replace('Model', '', str_replace(__NAMESPACE__.'\\','',__CLASS__));
    }
    
    public function getName(){
        return $this->nom;
    }
}
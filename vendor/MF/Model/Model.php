<?php

namespace MF\Model;

class Model{

    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

}
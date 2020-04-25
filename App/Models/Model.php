<?php
    namespace app\Models;

    use \app\DB;

class Model {

        protected $db;

        public function __construct() {
            $this->db = new DB();
        }

        
    }
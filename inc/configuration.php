<?php

class sql {

    public $conn;

    public function__construct() {

        return $this-> conn = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

    }
    public function query($string_query) {

        return mysqli_query($this->conn,"$string_query");

    }

    public function__destruct(){

        mysqli_close($this->conn);

    }
}


?>

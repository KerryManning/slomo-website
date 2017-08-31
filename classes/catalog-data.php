<?php

class CatalogData {
    private $db;
    private $sql;

    public function setDb($db) {
        $this->db = $db;
    }

    public function query($query) {
        $this->sql = $this->db->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if(is_null($type)) {
            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                
            }
        }
        $this->sql->bindValue($param, $value, $type);
    }

    public function execute() {
        try {
            return $this->sql->execute();
        } catch (Exception $e) {
            echo "<p>Unable to retrieve results from database</p>";
            exit;
        }
    }

    public function full_catgalog_thumb_array() {
        $this->execute();
        while ($data = $this->sql->fetch(PDO::FETCH_ASSOC)) {
            $catalog[$book["id"] = $data["id"]] ["title"] = $data["title"];
            $catalog[$book["id"] = $data["id"]] ["artist"] = $data["artist"];
            $catalog[$book["id"] = $data["id"]] ["price"] = $data["price"];
            $catalog[$book["id"] = $data["id"]] ["img"] = $data["img"];
            $catalog[$book["id"] = $data["id"]] ["front_page"] = $data["front_page"];
            $catalog[$book["id"] = $data["id"]] ["url_title"] = $data["url_title"];
        }
        return $catalog;
    }


    public function single_book_array() {
        $this->execute();
        $book = $this->sql->fetch();
        return $book;
    }
}



<?php
    namespace app\server\models;

    use app\server\controllers\Conn;
    use PDO;

    class Animal {
        public function all() {
            return Conn::getConn()->query("select * from animias")->fetchAll(PDO::FETCH_ASSOC);
        }

        public function find($id) {
            return Conn::getConn()->query("select * from animais where id=".$id)->fetch(PDO::FETCH_ASSOC);
        }
    }
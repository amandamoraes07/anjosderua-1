<?php
    namespace app\server\models;

    use app\server\controllers\Conn;

    class Login {

        public static function logarCommonUser($login, $pass) {
            $result = Conn::getConn()->prepare("select * from associados where email=? and pass=?");
            $result->bindValue(1, $login);
            $result->bindValue(2, $pass);
            $result->execute();
            return $result->rowCount();
        }

        public static function logarAdmin($login, $pass) {
            $result = Conn::getConn()->prepare("select * from admin where login=? and pass=?");
            $result->bindValue(1, $login);
            $result->bindValue(2, $pass);
            $result->execute();
            return $result->rowCount();
        }
    }
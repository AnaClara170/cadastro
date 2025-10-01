<?php
class Caminho{
    public static $usuario = "root";
    public static $senha = "";
    public static $connect = null;

    private static function Conectar(){
        try{
            if(self::$connect==null){
               self::$connet = new PDO(
                'mysql:host=localhost;
                dbname=bdturma_b;',
                self::$usuario,self::$senha
               );
            }
        }catch(Exception $ex){
            echo 'Mensagem: ' .$ex->getMessage();
            die;

        }
        return self::$connect;
        }
        public function getConn(){
            return self::Conectar();
        }
}
?>
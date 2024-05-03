<?php

class Client extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Client();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }


    // affichage clients
    public function get_all_clients()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM clients');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }



}
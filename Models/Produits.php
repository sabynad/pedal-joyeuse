<?php

class Produits extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Produits();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }


    // affichage du personnels
    public function get_all_produits()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM produits');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }



}
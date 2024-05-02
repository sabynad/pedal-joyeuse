<?php

class Personnel extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Personnel();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    public function get_all_personnels()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM personnel');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }



}
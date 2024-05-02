<?php
abstract class Controller		//Ceci est le controleur par defaut
{

	abstract public function action_default();

		public function __construct()
		{
			if(isset($_GET['action'])and method_exists($this,"action_".$_GET ["action"]))
			{
				$action="action_".$_GET['action']; 
				$this->$action();					//On appelle cette action
			}
			else $this->action_default();			//sinon action par défaut
		}

	protected function render($vue,$data=[])		//Fonction qui recupere les données et les transmet a la vu
	{
		extract($data);								
		if(isset($_GET["controller"]))
		{											
			$Controller_actif=lcfirst($_GET['controller']);
		}
		else
		{											//Recupération des données à afficher
			$Controller_actif="Home";
		}

		$file_name="Views/".$Controller_actif."/view_".$vue.'.php';
		if(file_exists($file_name))
		{											//Si le fichier existe
			require($file_name);					//Si oui on l'affiche
		}
		else
		{
			$this->action_error("La vue n'existe pas !");
		}
	}

	protected function action_error($message)		// en cas d'erreur 
	{
		$data=['error'=>$message];
		$this->render('error',$data);
		die();										//Pour faire terminer le script vu qu'il y a une erreur
	}
}

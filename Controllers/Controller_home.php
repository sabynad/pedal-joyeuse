<?php

// accueil
class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    // user connexion
        public function action_user_connexion()
        {
            $this->render("user_connexion");
        }

    // user connecter 
        public function action_user_connecter()
        {
            $m=Model::get_model();
            $data=['identification'=>$m->get_user_connecter($_POST)];// renvoi uniquement les données $_POST
            $this->render("user_connecter",$data);
        }
        
    // user deconnexion
    public function action_user_deconnexion()
    {
        $this->render("user_deconnexion");
    }



}
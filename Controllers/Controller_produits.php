<?php

class Controller_produits extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_produits()
    {
        $m=Produits::get_model();
        $data=['produits'=>$m->get_all_produits()];
        $this->render("all_produits",$data);
    }

}
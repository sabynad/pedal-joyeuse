<?php

class Controller_ligne_facture extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_lignes_factures()
    {
        $m=Ligne_Facture::get_model();
        $data=['lignes_factures'=>$m->get_all_lignes_factures()];
        $this->render("all_lignes_factures",$data);
    }

}
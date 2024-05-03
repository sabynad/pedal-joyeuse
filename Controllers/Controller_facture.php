<?php

class Controller_facture extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_factures()
    {
        $m=Facture::get_model();
        $data=['factures'=>$m->get_all_factures()];
        $this->render("all_factures",$data);
    }

}
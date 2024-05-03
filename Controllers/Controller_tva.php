<?php

class Controller_tva extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_tva()
    {
        $m=Tva::get_model();
        $data=['tva'=>$m->get_all_tva()];
        $this->render("all_tva",$data);
    }

}
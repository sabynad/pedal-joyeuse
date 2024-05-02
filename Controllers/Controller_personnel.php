<?php

class Controller_personnel extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_personnels()
    {
        $m=Personnel::get_model();
        $data=['personnels'=>$m->get_all_personnels()];
        $this->render("all_personnels",$data);
    }




    
}
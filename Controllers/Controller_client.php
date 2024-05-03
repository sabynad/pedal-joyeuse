<?php

class Controller_client extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_clients()
    {
        $m=Client::get_model();
        $data=['clients'=>$m->get_all_clients()];
        $this->render("all_clients",$data);
    }

}
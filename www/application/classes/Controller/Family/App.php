<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Family_App extends Controller_Public_Common {
    
    public function before() 
    {
        parent::before();
        if(Auth::instance()->logged_in('login') == false)
        {
            $this->redirect('/');
        }
        View::set_global('login',true);
    }
}
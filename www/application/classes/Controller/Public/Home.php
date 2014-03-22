<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Home extends Controller_Public_Common {

    public function action_index()
    {
        View::set_global('is_header', true);
        $this->template->content = View::factory('home');
    }
}

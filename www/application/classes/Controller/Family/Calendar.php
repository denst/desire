<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Family_Calendar extends Controller_Family_App {
    
    public function action_index()
    {
        $MonthNames=array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
        $this->template->content = View::factory('calendar/index')
            ->set('month', $MonthNames)
            ->set('month_content', View::factory('calendar/month_content'))
            ->set('receipt', View::factory('calendar/receipt'));
    }
}
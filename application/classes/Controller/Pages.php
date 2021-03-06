<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pages extends Controller_Website
{
    public function action_display()
    {
        $page = $this->request->param('page');

        $titles = array
        (
            'about'         => 'About',
            'feedback'      => 'Feedback',
            'login'         => 'Login',
            'add-a-module'  => 'Add a module',
        );

        $this->template->title   = $titles[$page].' - ';
        $this->template->content = View::factory("pages/$page");
    }

    /**
     * Demo action to generate a 500 error
     *
     * @return null
     */
    public function action_error()
    {
        throw new Kohana_Exception('This is an intentional exception');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Web Server
 * Date: 7/10/2018
 * Time: 5:23 PM
 */

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->getAll("tasks", "Task");

        $tasks[0]->complete();
        return view('index', compact('tasks'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function storeTask()
    {
        App::get('database')->addNew("tasks", $_POST);
        return redirect('/');
    }
}
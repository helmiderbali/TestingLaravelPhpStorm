<?php
/**
 * Created by PhpStorm.
 * User: helmi
 * Date: 2/4/14
 * Time: 11:50 AM
 */
class TasksController extends BaseController{
    public function index(){
       $tasks=Tasks::all();
        return View::make('tasks.index',compact('tasks'));


    }
}
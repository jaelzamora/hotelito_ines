<?php
class PagesController extends Controller
{
    
    public function index()
    {
        //$posts = Posts::orderBy('created_at','desc')->take(3)->get();
        $this->view('reservas.html'); //, ['posts'=>$posts]
    }


}
<?php

class PostsController extends Controller
{
    public function index()
    {
        $perpage = 3;
        $posts = Posts::orderBy('created_at','desc')->take($perpage)->get();
        var_dump($posts);die;

        $this->view('index.html', ['posts' => $posts]);
    }


    public function add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            Messages::setMsg('You are not allowed to do this action', 'error');
            header('Location: ' . ROOT_URL);
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $this->view('add.html');
            } else {
                Posts::add();
                header("Location:" . ROOT_PATH);
            }
        }
    }

    public function delete($id)
    {
        if (!isset($_SESSION['is_logged_in'])) {
            Messages::setMsg('You are not allowed to do this action', 'error');
            header('Location: ' . ROOT_URL);
        } else {
            Posts::destroy($id);
            header("Location:" . ROOT_PATH);
        }
    }

    public function edit($id)
    {
        $read = Posts::find($id);

        if (!isset($_SESSION['is_logged_in'])) {
            Messages::setMsg('You are not allowed to do this action', 'error');
            header('Location: ' . ROOT_URL);
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {

                $this->view('edit.html', ['post' => $read]);
            } else {
                Posts::edit($id);

                header("Location:" . ROOT_PATH);
            }
        }
    }

    // public function read($id)
    // {
    //     $post = Posts::find($id);

    //     $this->view('view.html', ['book' => $post]);
    // }
}

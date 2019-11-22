<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Posts extends Eloquent
{

    public function scopeAdd()
    { 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (
            !empty($post['title']) && !empty($post['description'])) {

            if (!is_uploaded_file($_FILES['cover']['tmp_name'])) {
                $error = 'There was no file uploaded';
                Messages::setMsg($error, 'error');
                return;
            }
            $uploadfile = $_FILES['cover']['tmp_name'];
            $uploaddata = file_get_contents($uploadfile);

            $this->title = $post['title'];
            $this->description = $post['description'];            
            $this->filename = $_FILES['cover']['name'];
            $this->mimetype =  $_FILES['cover']['type'];
            $this->filedata = $uploaddata;
            $this->save();
            
        }else {
            $error = 'Please, fill all fields.';
            Messages::setMsg($error, 'error');
            return;
        }
    }

    public function scopeEdit($query,$id)
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $read = $query->where('id', $id)->first();

        if (!empty($post['title']) &&isset($post['description'])) {

            $read->title = $post['title'];
            $read->description = $post['description'];
            
            if (is_uploaded_file($_FILES['cover']['tmp_name']) && $_FILES['cover']['tmp_name']!="") 
            {
                echo 'DESPUESDELIF';die;
                $uploadfile = $_FILES['cover']['tmp_name'];
                $uploaddata = file_get_contents($uploadfile);
                
                $read->filename = $_FILES['cover']['name'];
                $read->mimetype =  $_FILES['cover']['type'];
                $read->filedata = $uploaddata;
            }

            $read->save();
        }
    }


}

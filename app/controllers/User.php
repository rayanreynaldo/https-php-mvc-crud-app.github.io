<?php

class User extends Ry_PHP_Application {
     
    public function list()
    {
        $this->helper('html');

        $users_model = $this->model('user_model');
        $list = $users_model->get_all_user();
        $title = 'Users List | PHP Crud Application';

        $data = [
           'users' => $list,
           'title' => $title
        ];

        $this->view('user/list-all', $data);
    }
    
    public function add()
    {   
        $this->helper('html');

        $data = [
            'title' => "User's Add new | PHP Crud Application",
        ];

        $this->view('user/add-form', $data);
    }

    public function edit(int $id)
    { 

        $this->helper('html');

        $users_model = $this->model('user_model');
        $user = $users_model->get_one_user($id);

        $data = [
            'user' => $user,
            'title' => "User's Edit | PHP Crud Application",
        ];

        $this->view('user/edit-form', $data);
    }

    public function create()
    {   
        $email = $_POST['email'];
        $name = $_POST['name'];

        $users_model = $this->model('user_model');
        $isAdded = $users_model->add_user($name, $email);

        if(!$isAdded)
        {
            echo "
            <script type='text/javascript'>alert('Unable to add!'); 
                location.href='../list';
            </script>";
 
        } else {

            echo "
            <script type='text/javascript'>alert('Added succesfully!'); 
                location.href='../list';
            </script>";
        }
    }

    public function drop(int $id)
    { 
        $users_model = $this->model('user_model');

        if(!$users_model->delete_user($id))
        {
            echo "
            <script type='text/javascript'>alert('Unable to delete!'); 
                location.href='../list';
            </script>";
 
        } else {

            echo "
            <script type='text/javascript'>alert('Deleted succesfully!'); 
                location.href='../list';
            </script>";
        }
    }

    public function update(int $id)
    {   
        $newEmail = $_POST['email'];
        $newName  = $_POST['name'];
        $newPass  = $_POST['pass'];

        $users_model = $this->model('user_model');
        $isUpdated = $users_model->update_user($id, $newEmail, $newName, $newPass);

        if(!$isUpdated)
        {
            echo "
            <script type='text/javascript'>alert('Unable to update!'); 
                location.href='../list';
            </script>";
 
        } else {

            echo "
            <script type='text/javascript'>alert('Updated succesfully!'); 
                location.href='../list';
            </script>";
        }
    }

}
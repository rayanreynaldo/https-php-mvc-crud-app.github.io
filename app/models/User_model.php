<?php

class User_model extends Database {

    protected $db;

    public function __construct()
    {        
        $this->db = new Database();
    }

    public function get_all_user()
    {
        return $this->db->query("SELECT * FROM `user`");
    }

    public function get_one_user($id)
    {
        return $this->db->query("SELECT * FROM `user` WHERE `id` = '$id'");
    }

    public function delete_user($id)
    {
        $qry = $this->db->query("DELETE FROM `user` WHERE `id` = '$id'");
        
        if($qry){
            return true;
        } else {
            return false;
        }
    }

    public function update_user($id, $newEmail, $newName, $newPass)
    {
        $sql = "UPDATE `user` SET `name` = '$newName', `email` = '$newEmail', `pass` = '$newPass' WHERE `id` = $id";

        $qry = $this->db->query($sql);

        if($qry){
            return true;
        } else {
            return false;
        }
    }

    public function add_user($name, $email)
    {
        $sql = "INSERT INTO `user`(`name`, `email`) VALUES ('$name', '$email')";

        $qry = $this->db->query($sql);

        if($qry){
            return true;
        } else {
            return false;
        }
    }
}
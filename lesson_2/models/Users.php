<?php

namespace app\models;

class Users
{
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $gender;
    protected $roles;
    protected $password;
    protected $hash;
    protected $media_id;
    protected $created_at;

    public function __construct($id, $firstname, $lastname, $email, $gender,
                                $roles, $password, $hash, $media_id, $created_at)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->gender = $gender;
        $this->roles = $roles;
        $this->password = $password;
        $this->hash = $hash;
        $this->media_id = $media_id;
        $this->created_at = $created_at;

    }




}
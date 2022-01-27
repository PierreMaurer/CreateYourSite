<?php
namespace App\Model;

class User {

    /**
     * @var string
     */
    private $username;

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username): self
    {
        $this->username = $username;
    }


    /**
     * @var string
     */

    private  $password;

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */


    public function setPassword($password): self
    {
        $this->password = $password;
    }
}
<?php

class guestbook
{
    private $username;
    private $message;
    private $date;

    /**
     * @param $u [användarnamn]
     * @param $m [meddelande]
     * @param $d [datum Och klockslag]
     */
    public function __construct($u, $m, $d)
    {
        $this->username = $u;
        $this->message = $m;
        $this->date = $d;
    }

    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    public function getDate()
    {
        return $this->date;
    }
}
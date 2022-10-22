<?php

namespace App;

class Hello {

    private string $hello;


    /**
     * Set the value of hello
     *
     * @return  self
     */ 
    public function setHello($hello)
    {
        $this->hello = $hello;

        return $this;
    }

    public function talk()
    {
        return $this->hello;
    }
}
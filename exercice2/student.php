<?php
class Student{
    public function __construct($name)
    $this->name = $name;

}

public function talk()
{
    return "Hi ! I am {$this->name}. Are you into collecting cards";
    return 'Jian is really good at pingpong - but ' . $this->name . ' is better!';
}
}

//we could copy paste to teacher but thats cumbersome
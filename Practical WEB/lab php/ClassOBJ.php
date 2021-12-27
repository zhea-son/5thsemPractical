
<?php


class student{
    public $name=" ";
    public $phone=" ";
    public $age=0;

    function __construct($name,$phone,$age){
        $this->name=$name;
        $this->phone=$phone;
        $this->age=$age;

    }

    function show(){
        echo("<br>Name: ".$this->name);
        echo("<br>Phone:".$this->phone);
        echo("<br>Age:".$this->age);

    }

}
$obj = new student("Ram","1234",5);
$obj->show();
?>
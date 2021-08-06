<?php


class Student
{
    public $first_name;
    public $last_name;
    public $country = "None";

    protected $registration_id;
    private $tuition = 0.00;

    public function full_name()
    {
        return $this->first_name .' '. $this->last_name;
    }

    public function hello_world()
    {
        return _('Hello World');
    }

    protected function hello_family()
    {
        return _('Hello Family');
    }

    private function hello_me()
    {
        return _('Hello Me');
    }

    public function tuition_fmt()
    {
        return '$'. $this->tuition;
    }
}

class PartTimeStudent extends Student
{
    public function hello_parent()
    {
        return $this->hello_family();
    }
}

$student1 = new Student();
$student1->first_name = 'Psycho';
$student1->last_name = 'Gaming';


echo $student1->full_name() . "<br/>";

echo $student1->hello_world() . "<br/>";
//echo $student1->hello_family() . "<br/>";   error cannot access protected method
//echo $student1->hello_me() . "<br/>";       error cannot access private method

//echo $student1->$registration_id . "<br/>";  error cannot access protected property
//echo $student1->$tuition . "<br/>";          error cannot access private property

$student2 = new PartTimeStudent();
echo $student2->hello_parent() . "<br/>";
echo $student2->tuition_fmt() . "<br/>";
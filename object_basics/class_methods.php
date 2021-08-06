<?php


class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";

    function say_hello()
    {
        return _('Hello World');
    }

    function full_name()
    {
        return $this->first_name .' '. $this->last_name;
    }
}

$student1 = new Student();
$student1->first_name = 'Psycho';
$student1->last_name = 'Gaming';

$student2 = new Student();
$student2->first_name = 'Ryo';
$student2->last_name = 'Lasti';

echo $student1->first_name .' '. $student1->last_name . "<br/>";
echo $student2->first_name .' '. $student2->last_name . "<br/>";

echo $student1->say_hello() . "<br/>";
echo $student2->say_hello() . "<br/>";

echo $student1->full_name() . "<br/>";

$class_methods = get_class_methods('Student');
echo _('Class Methods: ') . implode(',', $class_methods) . "<br/>";

if (method_exists('Student', 'say_hello'))
{
    echo _('Method say_hello() exists in Student class . <br>');
}
else
{
    echo _('Method say_hello() does not exists in Student class . <br>');
}
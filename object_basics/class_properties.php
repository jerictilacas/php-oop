<?php


class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";
}
// The same class and object
// but different instance of the object with different properties

$student1 = new Student();
$student1->first_name = 'Psycho';
$student1->last_name = 'Gaming';

$student2 = new Student();
$student2->first_name = 'Ryo';
$student2->last_name = 'Lasti';

echo $student1->first_name .' '. $student1->last_name . "<br/>";
echo $student2->first_name .' '. $student2->last_name . "<br/>";

$class_vars = get_class_vars('Student');
echo "Class vars: .<br/>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Object vars: .<br/>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if (property_exists('Student', 'first_name'))
{
    echo _('Property first_name exists in Student class . <br>');
}
else
{
    echo _('Property first_name does not exists in Student class . <br>');
}
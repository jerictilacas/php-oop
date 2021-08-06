<?php


class User
{
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function fullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

class Customer extends User
{
    var $city;
    var $province;
    var $country;

    function location()
    {
        return $this->province . ', ' . $this->city . ', ' . $this->country;
    }
}

class AdminUser extends User
{
    var $is_admin = true;
}

$u  = new User();
$u->first_name = 'Jericho';
$u->last_name = 'Tilacas';
$u->username = 'psycho';

$c  = new Customer();
$c->first_name = 'Luna';
$c->last_name = 'Yase';
$c->username = 'yuri';
$c->province = 'Moalboal';
$c->city = 'Cebu';
$c->country = 'Philippines';


echo $u->fullname() . "<br/>";

echo $c->fullname() . "<br/>";
echo $c->location() . "<br/>";


echo get_parent_class($u) . "<br/>";
echo get_parent_class($c) . "<br/>";

if (is_subclass_of($c, 'User'))
{
    echo _('Instance is a class of User.') . "<br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br/>";











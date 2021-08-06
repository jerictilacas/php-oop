<?php

// Example of extending parent's static method

class Chef
{
    public static function make_dinner()
    {
        return _('Cook Food');
    }
}

class AmateurChef extends Chef
{
    public static function make_dinner()
    {
        echo _('Read Recipe') . "<br/>";
        parent::make_dinner();
        echo _('Clean up mess') . "<br/>";
    }
}

echo _('Chef:') . "<br/>";
echo Chef::make_dinner();
echo "<br/>";
echo _('Amateur Chef:') . "<br/>";
AmateurChef::make_dinner();

echo "<hr/>";


// Example of using parent's static method as a fallback

class Image
{
    public static $resizing_enabled = true;

    public static function geometry()
    {
        echo _('800x600');
    }
}

class ProfileImage extends Image
{
    public static function geometry()
    {
        if (self::$resizing_enabled)
        {
            echo _('100x100');
        }
        else
        {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br/>";
echo ProfileImage::geometry() . "<br/>";

echo Image::$resizing_enabled = false;
echo ProfileImage::geometry() . "<br/>";
<?php
// object is not converted directly to string for print
class Language{

    public $category ;

    function __construct($category)
    {
        return $this->category = $category;
    }


    function __toString()
    {
        return "The language is {$this->category}" ;
    }

}

echo $lang = new Language("French");


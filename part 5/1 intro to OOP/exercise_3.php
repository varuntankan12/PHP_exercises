<?php


// Add a constructor method to your Pet class so you can create new Pet
// objects with an initial value of the name variable by using a statement
// like this:
// $pet1 = new Pet('Mr. Fluffy');
// Update your index.php file to use this constructor method rather than
// setting the name with the setter method.



class Pet
{
    private string $name;

    public function __construct($name = 'jagga')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}



$petObj = new Pet("Mr. Fluffy");
$petName = $petObj->getName();


echo "Pet name: \t{$petName}\n";

<?php
interface Managable
{
    function pay();
    function setName(string $newName);
}
class Administrator implements Managable
{
    private string $name;
    private float $accountBalance  = 0;
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function pay()
    {
        $this->accountBalance += 10000;
    }
}

class Advertiser implements Managable
{
    private string $name;
    private string $lastName;
    private float $accountBalance  = 0;
    public function setName(string $newName)
    {
        $SplitName = explode(' ', $newName);
        $this->newName = $SplitName[0];
        $this->lastName = $SplitName[1];
    }
    public function pay()
    {
        $this->accountBalance += 1000;
    }
}

class User implements Managable
{
    private string $name;
    private float $accountBalance = 0;
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function pay()
    {
        $this->accountBalance += 10;
    }
    public function __toString()
    {
        return $this->name . PHP_EOL . $this->accountBalance . PHP_EOL;
    }
}
$User1 = new User();
$User1->setName("Jony");
echo $User1;

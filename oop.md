# OOP

1. Classes - private & public - get & set 
2. Encapsulation

3. Inheritance 
4. Abstract vs Interface
5. Exception

### 1. Classes

Naming - thinking about like about everything in long-term (Noun good choice)
Instance - when we create object based on class 
`__construct()` method -> for injecting properties 



```php
<?php
class Team {
  public $name;
  protected $name;
  protected $members = [];
  
  public $wonChampionship = false;
	
  public function __construct($name, $members = [])
  {
        $this->name = $name;
        $this->members = $members;
  }
  
  public static function start(...$params)
  {
       return new static(...$params);
  }
  
  public function members()
  {
       return $this->members;
  }
  
  public function won()
  {
      $this->wonChampionship = true;
  }
}

class Member {
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$cavs = Team::start('Cavs', [
    new Member('Lebron'),
    new Member('Kyrie')
]);
var_dump($cavs->members());
```

setter - > convention is set__NAME__
getter - > convetion is get__NAME__
we must remember that name is public - >so we can still manipulate directly with property

```php
class Team {
  private $name;
  private $location;
  public $wonChampionship = false;
  public function __construct($name)
  {
      $this->name = $name;
  }
  public function setLocation($city)
  {
      $this->location = $city;
  }


}

$seatle = new Team('Seatle SuperSonics');
$seatle->setLocation('Oklahoma');

```

### 2. Encapsulation

like  box around object
we expose only methods that we think are useful 
private methods / protected -  we do not have permission to call them directly
private (can not access from subclass)
protected (can access from subclass) in case of extending classes 

```php
<?php 
class Player {
	private $name;
	private $team;

	public function __construct($name)
	{
		$this->name = $name;
	}
	public function setTeam($team)
	...
```

### 3. Inheritance

we can use methods from other classes 
We can extend and override methods:



```php
<?php

class Team {
  protected $name = "Nba team";
  public function welcomeMessage()
  {
    return "Welcome in league " . $name;
  }
}
class Cavs extends Team
{

}
class Lakers extends Team
{
    public function welcomeMessage()
    {
        return "Welcome from lakers team";
    }
}
echo (new Cavs)->welcomeMessage();
echo (new Lakers)->welcomeMessage();
```



### 4. Abstract classes 

we have  some struture of our team 
-> we make abstract (we add functionality but not expect for instantiating it

```php
abstract class Team {
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
```

we need to pass name because in other way we will get an error: 

```php
 ```php
class Cavs extends Team
{
        public function welcomeMessage()
    {
        return "Welcome in league " . $this->name;
    }
}
echo (new Cavs('Cavaliers'))->welcomeMessage();
 ```
```

### 5 Interfaces vs Abstract

interface:  - contract 

for example we have login functionality in our website. we have been using Github provider 

what if we want to allow our user to use facebook ?  

* we might hard-code functionality 
* we might create Provider interface for implementations 



our class will do not care what but if we use authorize .

**Abstract**

- can not be instantaited by its own 

- we must create subclass of abstract 
- abstract protected method

we require such as method - we require to use that method 





Now concept of logger : 

-> log something to file, or database or some other service. many ways of executing task 

we will have 2 classes for logging

and 1 UsersControlelr class that is going to execute logging feature

logger will be passed through constructor 



```php
<?php
interface Logger {}

class LogToFile {
    public function execute($message)
    {
        var_dump('Log message to file' . $message);
    }
}

class LogToDB {
    public function execute($message)
    {
        var_dump('Log message to db');
    }
}

class UsersController {
    protected $logger;
    public function __construct(LogToFile $logger) {
        $this->logger = $logger;
    }
    public function show()
    {
        $user = 'JohnDoe';
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToFile);
$controller->show();
```

### 5. Exception

way to stop running execution thread

```php
<?php
function add($one, $two)
{
    if(! is_float($one) || ! is_float($two))  {
        throw new Exception("Please provide a float");
    }
    return $one + $two;
}
try {
    echo add(1.1,2.2);
} catch(Exception $e)
{
    echo 'Oh well';
}
```


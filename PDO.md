# PDO

PDO - Database Access Abstraction Layer  - we can connect to many different databases 

 offers: 

 => API to communicate with Database and to reduce code duplication 

	- (unified API to access multitude of databases, from SQLite to Oracle)
	- helper functions to automated duplcated situations
	- security 



Eloquent is ORM with higher abstraction layerr



### 1. Connecting

**DSN** - database source name

- [driver / host / db (schema) / charset / port / username and password] - in array form 

```php
      mysql:host=localhost;dbname=test;port=3306;charset=utf8mb4
```



```php
<?php 
$host = '127.0.0.1';
$db = 'demo';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES => false,
];
try {
 $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
 throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
```

connection has to be made once 

No connects in every class constructor. Otherwise, multiple connections  will be created, which will eventually kill your database serve



 important to **set charset through DSN** 



### 2. PDO::query()

- if no variables are going to beused in query 

  `PDO::query()` -- return : special object of `PDOStatement` class



```php
 $stmt = $pdo->query('SELECT title from posts');
..
  while($row = $stmt->fetch()) 
{
    echo $row['title'] . "<br>";
}
```

### 3. Prepared Statements 

is **the only proper way to run a query**, if any variable is going to be used in it. 

- positional (`?`) placeholder
- named (`:email`) placeholder

1.prepare

2.execute

```php
 $stmt = $pdo->prepare('SELECT * FROM posts WHERE title = :title');
 $stmt->execute(['title' => 'First post']);
 $post = $stmt->fetch();
```



### 4. Binding Methods


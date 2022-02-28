<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class People {
    private $pdo;

    public function __construct() {
        # Replace "admin" and "6Ec4JfFHsYwm" below with your DB username and password!
        $this->pdo = new PDO("mysql:host=localhost;dbname=foo;", "admin", "6Ec4JfFHsYwm");
    }

    public function fetchAll() {
        $query = $pdo->prepare("select * from people");
        $query->execute();
        return $query->fetchAll();
    }
}

$people = new People();

?>

<html>

<head>
    <title>Foo App</title>
</head>

<body>
    <h1>Welcome to Foo App</h1>
    <p>Here are the people:</p>
    <ul>
        <?php foreach($people->fetchAll() as $person): ?>
        <li>
            <b>Name</b>: <?php echo $person["name"]; ?>,
            <b>Age</b>: <?php echo $person["age"]; ?>,
            <b>Hobby</b>: <?php echo $person["hobby"]; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>

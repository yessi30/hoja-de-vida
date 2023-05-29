<?php
session_start();
class Database {
    private $host = "localhost";
    private $db_name = "unerg";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection() {
        $this->conn = null;    
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUser($email, $password) {
        $query = "SELECT * from usuarios where correo = :email AND password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }
}

$db = new Database();
$user = new User($db->dbConnection());

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['correo'];
    $password = $_POST['password'];

    $user = $user->getUser($email, $password);
    if($user) {
        $_SESSION['user'] = $user;
        header('Location: /programacion/unerg/index.php');
    } else {
        echo 'User is not registered';
    }
}
?>
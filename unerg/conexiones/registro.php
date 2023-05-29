<?php
// Iniciar la sesión
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

    // ... (tu código para la función getUser)

    public function registerUser($name, $email, $password) {
        $query = "INSERT INTO usuarios (nombre, correo, password) VALUES (:name, :email, :password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
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
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['password'];
    $password_verification = $_POST['password_confirmacion'];

    if($password !== $password_verification) {
        echo 'Las contraseñas no coinciden.';
    } else {
        $user->registerUser($name, $email, $password);
        $_SESSION['user'] = $user->getUser($email, $password);
        header('Location: /programacion/unerg/index.php');
    }
}
?>
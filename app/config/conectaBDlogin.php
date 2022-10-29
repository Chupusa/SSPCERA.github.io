<?php // Conexion a la Base de Datos para hacer Login
    class Database
    {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct()
        { // Datos para acceder a la Base de Datos
            $this->host = 'localhost';
            $this->db = 'base_ssp_cera';
            $this->user = 'root';
            $this->password = '';
            $this->charset = 'utf8mb4';
        }

        function connect() // Funcion para Conectar a la Base de Datos CHECAR CODIGO
        {
            try
            {
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                $pdo = new PDO($connection, $this->user, $this->password, $options);

                return $pdo;
            }

            catch(PDOException $e)
            {
                print_r('Error de Connexion a Base de Datos: ' . $e->getMessage());
            }
        }
    }
?>
<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . "; db_name=" . $this->db_name;

        // selain membutuhkan localhost,name, user, pass, PDO juga butuh option berupa array:
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass); // Databasenya sudah dibikin secara general, jadi sekali ganti database, tidak perlu mengganti ke bawahnya lagi
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // ini fungsi dari database wrapper
    public function query($query)
    {
        // query nya dijalankan di sini
        // kenapa query nya dipisahkan dari parameternya?
        // alasanya adalah agar aman dari sql injection
        $this->stmt = $this->dbh->prepare($query);
    }

    // binding data, siapa tau di query nya ada where, into, set, dan sebagainya (nama lainnya parameternya)
    // agar, sebelum di exekusi, querynya dibersihakan dulu
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    // jika datanya ingin banyak/ sama dengan yang single menggunakan array assosiatif juga:
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // jika datanya cuman satu:
    public function single()
    {
        $this->execute();
        $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}

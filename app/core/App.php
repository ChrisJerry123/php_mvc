<?php

class App
{
    // Property untuk menentukan controller, method, dan parameter defaultnya
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = []; // pakai 's' karena mungkin parameternya lebih dari satu

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);

        // CONTROLLER
        // mengecek apakah url nya null, jika null, maka di versi terbaru akan error
        if ($url == null) {
            $url = [$this->controller];
        }

        // mengecek apakah urlnya sesuai dengan controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            // masih error jika tidak dimasukkan
            $this->controller = $url[0]; // controlollernya tanpa '$'
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // METHOD 
        // mengecek apakah url memiliki method? jika tidak maka tampilkan method default
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                // jika ada method dalam url, maka timpa method default dengan method dari url
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // PARAMETERS
        // jika sudah dihilangkan tetapi masih ada, maka kemungkinan itu karena controller nya tidak benar
        if (!empty($url)) {
            // menangkap array yang akan kita jadikan parameter
            $this->params = array_values($url);
        }

        // JALANKAN CONTROLLER DAN METHOD, SERTA KIRIMKAN PARAMETER JIKA ADA
        call_user_func_array([$this->controller, $this->method], $this->params);
        // ada warning Trying to access array offset on value of type null in C:\xampp\htdocs\php_mvc\app\core\App.php on line 17
        // ketika akses http://localhost/php_mvc/public/  -- (tanpa controller dan method)
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // rtrim untuk menghapus '/' pada akhir link yang ditangkap
            $url = filter_var($url, FILTER_SANITIZE_URL); // untuk membersihkan url dari karakter-karakter aneh
            $url = explode('/', $url);

            return $url;
        }
    }
}

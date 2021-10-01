<?php

// kalau tidak ada session id, maka jalankan session
if (!session_id()) {
    session_start();
}

require '../app/init.php'; // bootstraping

$app = new App;

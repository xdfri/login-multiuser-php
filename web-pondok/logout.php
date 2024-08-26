<?php
include('services/koneksi.php');


session_unset();
session_destroy();

header('location:login.php');


?>
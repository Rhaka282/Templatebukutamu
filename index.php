<?php
session_start();

// kalau belum login, redirect ke login.php
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

include_once('templates/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>

</div>
<!-- /.container-fluid -->

<?php
include_once('templates/footer.php');
?>
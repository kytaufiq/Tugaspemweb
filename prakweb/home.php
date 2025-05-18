<?php
session_start();
$username = "";
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
} else {
    header('Location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <!-- Navbar -->
  <header class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center shadow">
    <h1 class="text-xl font-semibold">Dashboard</h1>
    <a href="logout.php" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-blue-100 transition font-medium">Logout</a>
  </header>

  <!-- Main content -->
  <main class="flex-1 flex items-center justify-center">
    <div class="text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-2">Halo, <?= htmlspecialchars($username) ?> 👋</h2>
      <p class="text-gray-600 text-lg">Selamat datang di halaman utama.</p>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center text-gray-400 text-sm py-4">
    &copy; <?= date('Y') ?> PRAKWEB - Universitas Lampung
  </footer>

</body>
</html>

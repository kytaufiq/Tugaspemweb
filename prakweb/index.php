<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login & Signup</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Login Form -->
    <div>
      <h2 class="text-2xl font-bold text-blue-600 mb-4">Login</h2>

      <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
          Login gagal! Username atau password salah.
        </div>
      <?php endif; ?>

      <form method="POST" action="/prakweb/process_login.php" class="space-y-4">
        <input name="username" type="text" placeholder="Masukkan Username"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"/>
        <input name="password" type="password" placeholder="Masukkan Password"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"/>
        <button type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>
      </form>
    </div>

    <!-- Signup Form -->
    <div>
      <h2 class="text-2xl font-bold text-green-600 mb-4">Signup</h2>
      <form method="POST" action="/prakweb/signup.php" class="space-y-4">
        <input name="username" type="text" placeholder="Masukkan Username"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"/>
        <input name="password" type="password" placeholder="Masukkan Password"
          class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"/>
        <button type="submit"
          class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">Signup</button>
      </form>
    </div>

  </div>

</body>
</html>

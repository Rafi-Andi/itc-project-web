<?php
session_start();
$pdo = require 'koneksi.php';
$hasil = true;
if (isset($_POST['nama']) && isset($_POST['password'])) {
  $sql = 'SELECT * FROM admins';
  $query = $pdo->prepare($sql);
  $query->execute(array(
    
  ));
  $admin = $query->fetch();
  if(!$admin) {
    $hasil = false;
  } else if ($_POST['password'] != $admin['password']) {
    $hasil = false; 
  } else {
    $hasil = true;
    $_SESSION['admin'] = [
      'id' => $admin['id'],
      'nama' => $admin['nama'],
    ];
    header('Location: dashboardAdmin.php');
    exit;
  }
  
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - ITCSMKN1Surabaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
      <div class="max-w-md w-full space-y-8">
        <div class="text-center">
          <div class="flex items-center justify-center gap-3">
            <i class="fa-solid fa-laptop text-3xl text-blue-600"></i>
          </div>
          <h2
            class="mt-4 text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600"
          >
            Admin Login ITC
          </h2>
          <p class="mt-2 text-sm text-gray-600">
            #ITCSMKN1Surabaya #BelajarIT #JoinUs
          </p>
        </div>
        <div
          class="bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] p-8 rounded-2xl shadow-xl"
        >
        <?php 
         if(!$hasil) { ?>
          <div class="max-w-md mx-auto my-4 px-4 py-3 flex items-center justify-between rounded-lg bg-red-50 border-l-4 border-red-500 shadow-md">
  <div class="flex items-center">
    <div class="flex-shrink-0">
      <svg class="h-5 w-5 text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <p class="text-sm font-medium text-gray-800">Error!</p>
      <p class="text-sm text-gray-600">Username atau Password salah</p>
    </div>
  </div>
</div>

        <?php } ?>
          <form class="space-y-6" action="" method="POST">
            <div>
              <label
                for="nama"
                class="block text-sm font-medium text-gray-700"
              >
                Email / Username
              </label>
              <div class="mt-1 relative">
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
                  <i class="fa-solid fa-user text-gray-400"></i>
                </div>
                <input
                  id="nama"
                  name="nama"
                  type="text"
                  required
                  class="pl-10 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                />
              </div>
            </div>

            <div>
              <label
                for="password"
                class="block text-sm font-medium text-gray-700"
              >
                Password
              </label>
              <div class="mt-1 relative">
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
                  <i class="fa-solid fa-lock text-gray-400"></i>
                </div>
                <input
                  id="password"
                  name="password"
                  type="password"
                  required
                  class="pl-10 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                />
              </div>
            </div>

            <div>
              <button
                type="submit"
                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all transform hover:scale-105"
              >
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                  <i
                    class="fa-solid fa-right-to-bracket text-blue-300 group-hover:text-blue-200"
                  ></i>
                </span>
                Masuk
              </button>
            </div>
          </form>

          <div class="mt-6">
            <div class="relative">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

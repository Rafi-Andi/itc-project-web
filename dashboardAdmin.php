<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: loginAdmin.php');
  exit;
}
?>

<?php

$pdo = require 'koneksi.php';

if (!empty($_POST)){
  $sql = 'INSERT INTO materi (title, divisi, date_time,  description, materi)
  Values (:title, :divisi, :date_time, :description, :materi)';
  $query = $pdo->prepare($sql);
  $query->execute(array(
    'title' => $_POST['title'],
    'divisi' => $_POST['divisi'],
    'date_time' => $_POST['date_time'],
    'description' => $_POST['description'],
    'materi' => $_POST['materi']
  ));
  header('Location: dashboardadmin.php');
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./src/assets/images/logoItc.png">
    <title>Dashboard Admin - ITCSMKN1Surabaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
      <div
        class="lg:hidden bg-white p-4 flex items-center justify-between shadow-md"
      >
        <div class="flex items-center gap-2">
          <i class="fa-solid fa-laptop text-blue-600 text-xl"></i>
          <h1 class="font-bold text-xl">IT CLUB</h1>
        </div>
      </div>

      <div class="flex flex-1 overflow-hidden">
        <aside
          id="sidebar"
          class="w-64 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] shadow-lg hidden lg:block transition-all duration-300 overflow-y-auto"
        >
          <div class="p-5">
            <div class="flex items-center space-x-2 mb-6">
              <i class="fa-solid fa-laptop text-blue-600 text-xl"></i>
              <h1
                class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600"
              >
                IT CLUB
              </h1>
            </div>

            <div class="mt-8">
              <div
                class="mb-2 px-4 text-xs font-semibold text-gray-600 uppercase"
              >
                Menu Utama
              </div>
              <a
                href="#"
                class="flex items-center px-4 py-3 rounded-lg bg-blue-100 text-blue-600"
              >
                <i class="fa-solid fa-book text-blue-600"></i>
                <span class="ml-3 font-medium">Materi Mingguan</span>
              </a>
            </div>
          </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8">
          <div class="max-w-7xl mx-auto">
            <div
              class="flex flex-col md:flex-row md:items-center md:justify-between pb-4 border-b border-gray-200"
            >
              <div>
                <h1 class="text-2xl font-bold text-gray-800">
                  Materi Mingguan
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                  Kelola dan upload materi pembelajaran mingguan
                </p>
              </div>
            </div>

            <div
              class="mt-6 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] rounded-2xl shadow-md p-6"
            >
              <h2 class="text-xl font-bold text-gray-800">
                Upload Materi Mingguan
              </h2>
              <p class="mt-1 text-sm text-gray-600">
                Unggah materi pembelajaran untuk minggu ini
              </p>

              <form class="mt-6 space-y-6" method="POST" action="">
                <div>
                  <label
                    for="title"
                    class="block text-sm font-medium text-gray-700"
                    >Judul Materi</label
                  >
                  <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Masukkan judul materi"
                    class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label
                      for="divisi"
                      class="block text-sm font-medium text-gray-700"
                      >Divisi</label
                    >
                    <select
                      id="divisi"
                      name="divisi"
                      class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                      <option value="">Pilih divisi</option>
                      <option value="Programming">Programming</option>
                      <option value="Devgraf">Devgraf</option>
                    </select>
                  </div>
                  <div>
                      <label for="date_time" class="block text-sm font-medium text-gray-700 mb-1">Tanggal & Waktu Kegiatan</label>
                      <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                          <i class="fa-solid fa-calendar-check text-gray-400"></i>
                        </div>
                        <input type="date" id="date_time" name="date_time" placeholder="Pilih tanggal dan waktu" 
                          class="pl-10 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                      </div>
                    </div>
                </div>

                <div>
                  <label
                    for="description"
                    class="block text-sm font-medium text-gray-700"
                    >Deskripsi Materi</label
                  >
                  <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="Masukkan deskripsi materi"
                    class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  ></textarea>
                </div>
                <div>
                  <label
                    for="materi"
                    class="block text-sm font-medium text-gray-700"
                    >Isi Materi</label
                  >
                  <textarea
                    id="materi"
                    name="materi"
                    rows="4"
                    placeholder="Masukkan isi materi"
                    class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg bg-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  ></textarea>
                </div>
                <div
                  class="flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3"
                >
                  <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105"
                  >
                    <i class="fa-solid fa-upload mr-2"></i> Upload Materi
                  </button>
                </div>
              </form>
            </div>
            
            <div class="mt-8">
              <h2 class="text-xl font-bold text-gray-800">
                Materi Terakhir Diunggah
              </h2>
              <div class="mt-4 overflow-x-auto">
                <table
                  class="min-w-full bg-white rounded-lg overflow-hidden shadow"
                >
                  <thead class="bg-gray-50">
                    <tr>
                      <th
                        class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Judul
                      </th>
                      <th
                        class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Divisi
                      </th>
                      <th
                        class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Tanggal
                      </th>
                      <th
                        class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Deskripsi
                      </th>
                      <th
                        class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Isi materi
                      </th>
                      <th
                        class="py-3 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <?php
                  $pdo = require 'koneksi.php';
                  $sql2 = 'SELECT id, title, divisi, date_time, description, materi FROM materi';
                  $query2 = $pdo->prepare($sql2);
                  $query2->execute();
                  while ($materi = $query2->fetch()) {?>
                  <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                      <td class="py-4 px-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div>
                            <div class="text-sm font-medium text-gray-900">
                              <?php echo htmlentities($materi['title']); ?>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="py-4 px-4 break-words max-w-xs"><?php echo htmlentities($materi['divisi']);?> </td>
                      <td class="py-4 px-4 break-words max-w-xs"><?php echo htmlentities($materi['date_time']); ?></td>
                      <td class="py-4 px-4 break-words max-w-xs"><?php echo htmlentities(substr($materi['description'], 0, 600)) . '...'; ?></td>
                      <td class="py-4 px-4 break-words max-w-xs"><?php echo htmlentities(substr($materi['description'], 0, 600)) . '...'; ?>
                      <td class="py-4 px-4 break-words max-w-xs text-center">
                      
                        <button class="text-white px-3 py-1 rounded-lg hover:underline bg-red-600"><a href="hapus.php?id=<?php echo $materi['id']; ?>">
                          Hapus
                        </a></button>
                      </td>
                    </tr>
                  </tbody>
              <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        let title = document.getElementById("title").value.trim();
        let divisi = document.getElementById("divisi").value.trim();
        let date_time = document.getElementById("date_time").value.trim();
        let description = document.getElementById("description").value.trim();
        let materi = document.getElementById("materi").value.trim();

        let errorMessage = "";

        if (!title) {
            errorMessage += "⚠ Judul Materi harus diisi!\n";
        } else if (title.length < 5) {
            errorMessage += "⚠ Judul Materi minimal 5 karakter!\n";
        }

        if (!divisi) {
            errorMessage += "⚠ Pilih divisi terlebih dahulu!\n";
        }

        if (!date_time) {
            errorMessage += "⚠ Tanggal & Waktu harus diisi!\n";
        }

        if (!description) {
            errorMessage += "⚠ Deskripsi Materi harus diisi!\n";
        } else if (description.length < 10) {
            errorMessage += "⚠ Deskripsi Materi minimal 10 karakter!\n";
        }

        if (!materi) {
            errorMessage += "⚠ Isi Materi harus diisi!\n";
        } else if (materi.length < 20) {
            errorMessage += "⚠ Isi Materi minimal 20 karakter!\n";
        }

        if (errorMessage) {
            alert(errorMessage);
            event.preventDefault();
        }
    });
});
</script>

  </body>
</html>

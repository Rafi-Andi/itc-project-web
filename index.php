<?php
session_start();
if (isset($_SESSION)) {
   session_unset();
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IT CLUB</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sarpanch:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#0066FD",
          },
        },
      },
    };
  </script>
  <style>
    .btn-primary {
      background: linear-gradient(90deg, #0066fd 0%, #1200ff 100%);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px -5px rgba(0, 102, 253, 0.4);
    }
  </style>
  <link rel="stylesheet" href="./src/style/style.css" />
</head>

<body class="font-[Montserrat]">
  <header id="navbar" class="bg-white/70 backdrop-blur-2xl fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-3 py-1">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <div class="foto">
            <img src="./src/assets/images/logoItc.png" alt="IT CLUB Logo" width="60" class="drop-shadow-xl" />
          </div>
          <h1 class="font-bold text-xl">IT CLUB</h1>
        </div>

        <nav class="hidden md:block">
          <ul class="font-medium flex gap-6">
            <li>
              <a href="#home" class="hover:text-primary transition-colors">Home</a>
            </li>
            <li>
              <a href="#about" class="hover:text-primary transition-colors">About</a>
            </li>
            <li>
              <a href="#dokumentasi" class="hover:text-primary transition-colors">Dokumentasi</a>
            </li>
            <li>
              <a href="#materi" class="hover:text-primary transition-colors">Materi</a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
            class="hidden md:flex items-center gap-2 btn-primary inline-block text-white px-6 py-2 rounded-lg font-medium shadow-blue">
            <h1>Join Us</h1>
            <i class="fa-solid fa-arrow-right"></i>
          </a>

          <div class="menu md:hidden">
            <button id="menuButton" class="focus:outline-none">
              <i class="fa-solid fa-bars text-2xl"></i>
            </button>
          </div>
        </div>
      </div>

      <div id="mobileMenu" class="md:hidden hidden mt-4 pb-2">
        <nav>
          <ul class="font-medium flex flex-col gap-3">
            <li>
              <a href="#" class="block py-2 hover:text-primary transition-colors">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 hover:text-primary transition-colors">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 hover:text-primary transition-colors">Profil</a>
            </li>
            <li>
              <a href="#" class="block py-2 hover:text-primary transition-colors">Materi</a>
            </li>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
              class="w-fit flex gap-2 items-center gap-2 btn-primary inline-block text-white px-6 py-2 rounded-lg font-medium shadow-blue">
              <h1>Join Us</h1>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div id="home" class="relative py-[75px]">
    <div class="flex flex-wrap items-center justify-around py-10 md:py-10 md:px-[60px]">
      <div class="max-w-[700px] px-6 mb-10 md:mb-0" data-aos="fade-up" data-aos-duration="1000">
        <div class="mb-6 title bg-[#E7F0F8] inline-block px-6 rounded-xl text-primary">
          <h1>ITC SMKN 1 SURABAYA</h1>
        </div>
        <h1 class="font-bold text-xl">
          SELAMAT DATANG di ITC
          <span class="text-lg font-[Poppins]">(Information Technology Club)</span>
        </h1>
        <h1 class="font-bold text-3xl font-[Poppins] mt-2">
          🚀 Eksplorasi, Inovasi, Kolaborasi.
        </h1>
        <p class="font-medium font-[Roboto] mt-4">
          ITC (Information Technology Club) adalah ekstrakurikuler di SMKN 1
          Surabaya yang berfokus pada pengembangan keterampilan di bidang
          teknologi. Di sini, kamu akan belajar dan berlatih bersama tim yang
          antusias dalam dunia programming, desain grafis, jaringan,
          cybersecurity, dan tren teknologi terbaru.
        </p>

        <div class="flex gap-4 mt-8">
          <a href="#about"
            class="btn-primary text-white px-8 py-3 rounded-lg font-medium flex items-center gap-2 shadow-blue">
            <span>Explore</span>
            <i class="fa-solid fa-chevron-down"></i>
          </a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
            class="bg-white text-primary border-2 border-primary px-8 py-3 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300 shadow-blue">
            Join Now
          </a>
        </div>
        <div class="mt-12">
          <p class="text-sm text-gray-500 mb-3">FOKUS PEMBELAJARAN</p>
          <div class="flex flex-wrap gap-4">
            <div class="tech-card bg-white p-3 rounded-lg shadow-md flex items-center gap-2">
              <i class="fa-solid fa-code text-primary"></i>
              <span>Programming</span>
            </div>
            <div class="tech-card bg-white p-3 rounded-lg shadow-md flex items-center gap-2">
              <i class="fa-solid fa-computer text-primary"></i>
              <span>Desain</span>
            </div>
          </div>
        </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="1000">
        <img src="./src/assets/images/logoRobot.png" width="400px" alt="" />
      </div>
    </div>
    <div class="container-hiasan hidden md:block">
      <img class="absolute right-4 bottom-[200px]" src="./src/assets/images/briliant1.png" alt="" width="80px" />
      <img class="absolute right-[90px] bottom-[150px]" src="./src/assets/images/baut.png" alt="" width="80px" />
      <img class="absolute right-7 bottom-[80px]" src="./src/assets/images/donat.png" alt="" width="90px" />
    </div>
  </div>

  <div id="about" class="relative md:h-[100vh] pt-10 md:pt-[250px] flex justify-center items-center flex-col"
    data-aos="fade-down" data-aos-duration="1000">
    <div class="judul">
      <h1
        class="font-[sarpanch] font-[500] text-3xl md:text-5xl text-transparent opacity-[57%] bg-clip-text bg-gradient-to-r from-[#55EEFF] to-[#1200FF] uppercase tracking-wider leading-tight">
        MEET NEW TEAM
      </h1>
      <h1
        class="font-[sarpanch] font-[500] text-3xl md:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-[#55EEFF] to-[#1200FF] uppercase tracking-wider leading-tight">
        MEET NEW TEAM
      </h1>
      <h1
        class="font-[sarpanch] font-[500] text-3xl md:text-5xl text-transparent opacity-[57%] bg-clip-text bg-gradient-to-r from-[#55EEFF] to-[#1200FF] uppercase tracking-wider leading-tight">
        MEET NEW TEAM
      </h1>
    </div>

    <div data-aos="fade-up" data-aos-duration="1000" class="foto w-full md:w-[1200px] mt-10 md:mt-0">
      <img src="./src/assets/images/teamItc.png" alt="" />
    </div>
    <div class="container-hiasan hidden md:block">
      <img class="absolute left-8 top-0 rotate-90" src="./src/assets/images/briliant1.png" alt="" width="80px" />
      <img class="absolute left-20 top-[60px]" src="./src/assets/images/bautDua.png" alt="" width="100px" />
      <img class="absolute left-0 top-[80px] -rotate-90" src="./src/assets/images/donat.png" alt="" width="90px" />
    </div>
  </div>

  <div class="mentor md:pt-[200px] px-2">
    <div data-aos="fade-down" data-aos-duration="1000"
      class="flex items-center justify-center gap-3 text-3xl md:text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
      <i class="fa-solid fa-chalkboard-user hidden md:block"></i>
      <h1
        class="text-3xl md:text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
        Mentoring Master Class
      </h1>
    </div>
    <div class="justify-evenly items-center items-start flex flex-wrap">
      <div class="foto" data-aos="fade-up" data-aos-duration="1200">
        <img src="./src/assets/images/arya.png" width="250px" alt="" />
      </div>
      <div
        class="content flex flex-wrap gap-[30px] items-center justify-center md:mb-[110px] bg-[#F8F9FA] shadow-2xl rounded-2xl p-10"
        data-aos="flip-down" data-aos-duration="1200">
        <div class="flex flex-wrap md:w-[450px] justify-center items-center md:justify-start md:items-start">
          <h1 class="font-[poppins] text-center font-bold text-2xl md:text-[36px] mb-4">
            Muhammad Arya
          </h1>
          <h1 class="font-[orbitron] font-bold text-center text-xl md:text-[24px] mb-4 md:mb-2">
            KETUA DEVGRAF/COACH
          </h1>
          <blockquote class="relative font-['Montserrat'] text-lg text-gray-600 italic">
            <i class="fas fa-quote-left text-blue-200 text-2xl"></i>
            HI. sob perkenalkan aku Arya, mentoring devgraf kalian salam kenal dan sampai jumpa di kelas
            <i class="fas fa-quote-right text-blue-200 text-2xl"></i>
          </blockquote>
        </div>
        <div class="flex flex-col">
          <h1 class="font-[poppins] font-bold text-[24px] md:text-[16px] text-center">
            Software yang di pelajari
          </h1>
          <img src="./src/assets/images/toolsDevgraf.png" alt="" width="300px" />
        </div>
      </div>
    </div>

    <div class="justify-evenly mt-6 items-center items-start flex flex-wrap flex-col-reverse md:flex-row">
      <div data-aos="flip-up" data-aos-duration="1200"
        class="content flex flex-wrap gap-[30px] items-center md:mb-[120px] justify-center bg-[#F8F9FA] shadow-2xl rounded-2xl p-10">
        <div class="flex flex-wrap md:w-[450px] justify-center items-center md:justify-start md:items-start">
          <h1 class="font-[poppins] font-bold md:text-[36px] text-center text-2xl mb-4">
            Bima Ardhia Vardan
          </h1>
          <h1 class="font-[orbitron] font-bold text-[24px] text-xl text-center mb-4 md:mb-2">
            KETUA PROGAMING/COACH
          </h1>
          <blockquote class="relative font-['Montserrat'] text-lg text-gray-600 italic">
            <i class="fas fa-quote-left text-blue-200 text-2xl"></i>
            UBUR UBUR IKAN LELE SALAM KENAL LE
            <i class="fas fa-quote-right text-blue-200 text-2xl"></i>
          </blockquote>
        </div>
        <div class="flex flex-col">
          <h1 class="font-[poppins] font-bold text-[24px] md:text-[16px] text-center">
            Software yang di pelajari
          </h1>
          <img src="./src/assets/images/toolsPrograming.png" alt="" width="300px" />
        </div>
      </div>
      <div class="foto" data-aos="fade-up" data-aos-duration="1200">
        <img src="./src/assets/images/bima.png" width="250px" alt="" />
      </div>
    </div>
  </div>


  <div data-aos="zoom-in" data-aos-duration="1300"
    class="max-w-7xl mx-4 md:mx-[100px] p-6 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] rounded-2xl shadow-xl overflow-hidden">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="flex-1 space-y-6 font-['Poppins']">
        <div class="relative">
          <h1
            class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
            <i class="fas fa-rocket text-blue-500"></i> Join ITC SMKN 1 Surabaya!
          </h1>
        </div>

        <p class="text-xl text-gray-700 leading-relaxed">
          <i class="fas fa-lightbulb text-amber-500"></i> Sudah kenalan dengan mentoring HEBAT kami? Saatnya berhenti
          jadi penonton dan mulai jadi creator!
        </p>

        <div class="bg-white/50 backdrop-blur-sm p-4 rounded-xl shadow-md border border-blue-100">
          <h2 class="font-bold text-xl text-indigo-700 mb-3">
            <i class="fas fa-star-of-life text-indigo-600"></i> Kenapa Harus Gabung ITC?
          </h2>
          <ul class="space-y-3">
            <li class="flex items-center gap-3 text-gray-800">
              <div
                class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
                <i class="fas fa-user-graduate"></i>
              </div>
              <span>Belajar langsung dari mentor berpengalaman</span>
            </li>
            <li class="flex items-center gap-3 text-gray-800">
              <div
                class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                <i class="fas fa-laptop-code"></i>
              </div>
              <span>Praktik langsung bikin proyek keren</span>
            </li>
            <li class="flex items-center gap-3 text-gray-800">
              <div
                class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-purple-100 text-purple-600 rounded-full">
                <i class="fas fa-trophy"></i>
              </div>
              <span>Kompetisi & event menarik seputar IT</span>
            </li>
            <li class="flex items-center gap-3 text-gray-800">
              <div
                class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-indigo-100 text-indigo-600 rounded-full">
                <i class="fas fa-network-wired"></i>
              </div>
              <span>Jaringan pertemanan dengan anak-anak IT hebat</span>
            </li>
          </ul>
        </div>

        <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-4 rounded-xl text-white shadow-lg">
          <p class="font-medium text-lg">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <span class="font-bold">Gak perlu jago dulu, yang penting ada kemauan!</span>
            Yuk, mulai langkahmu sekarang!
          </p>
        </div>

        <div class="flex flex-wrap gap-3 pt-2">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
            class="hidden md:flex items-center gap-2 btn-primary inline-block text-white px-6 py-2 rounded-lg font-medium shadow-blue">
            <h1>Daftar Sekarang</h1>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
            class="hidden md:flex items-center gap-2 btn-primary inline-block text-white px-6 py-2 rounded-lg font-medium shadow-blue">
            <i class="fa-brands fa-instagram"></i>
            <h1>Info Lebih Lanjut</h1>
          </a>
        </div>
      </div>

      <div class="relative flex justify-center">
        <img src="./src/assets/images/lubna.png" width="350px" class="z-10 drop-shadow-xl" alt="ITC SMKN 1 Surabaya">
      </div>
    </div>
  </div>

  <div class="container mx-auto mt-10 px-4 md:px-24" id="dokumentasi">
    <div data-aos="zoom-in" data-aos-duration="1200"
      class="mb-[50px] mt-[50px] flex items-center justify-center gap-3 text-3xl md:text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
      <i class="fa-solid fa-camera hidden md:block"></i>
      <h1
        class="text-3xl md:text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
        Dokumentasi Pertemuan
      </h1>
    </div>
    <div data-aos="zoom-in" data-aos-duration="1200" class="grid grid-cols-1 md:grid-cols-3 gap-2">
      <div class="rounded-lg overflow-hidden shadow-md group relative cursor-pointer">
        <img src="./src/assets/images/dokumentasi1.png"
          class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-110" />

        <div
          class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
          <div class="text-white text-center p-4">
            <h3 class="font-bold text-xl">Divisi Programming</h3>
            <p class="text-sm">Belajar bahasa pemrograman Python</p>
          </div>
        </div>
      </div>


      <div class="rounded-lg overflow-hidden shadow-md group relative cursor-pointer">
        <img src="./src/assets/images/dokumentasi2.png"
          class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-110" />

        <div
          class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
          <div class="text-white text-center p-4">
            <h3 class="font-bold text-xl">Divisi Devgraf</h3>
            <p class="text-sm">Belajar Desain</p>
          </div>
        </div>
      </div>


      <div class="rounded-lg overflow-hidden shadow-md group relative cursor-pointer">
        <img src="./src/assets/images/dokumentasi3.png"
          class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-110" />

        <div
          class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
          <div class="text-white text-center p-4">
            <h3 class="font-bold text-xl">Divisi Devgraf</h3>
            <p class="text-sm">Belajar Desain</p>
          </div>
        </div>
      </div>

      <div class="col-span-1 md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-2">

        <div class="rounded-lg overflow-hidden shadow-md group relative cursor-pointer">
          <img src="./src/assets/images/dokumentasi4.png"
            class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" />

          <div
            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
            <div class="text-white text-center p-4">
              <h3 class="font-bold text-xl">Divisi Programming</h3>
              <p class="text-sm">Belajar pemrograman website</p>
            </div>
          </div>
        </div>

        <div class="rounded-lg overflow-hidden shadow-md group relative cursor-pointer">
          <img src="./src/assets/images/dokumentasi5.png"
            class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" />

          <div
            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
            <div class="text-white text-center p-4">
              <h3 class="font-bold text-xl">Divisi Programming</h3>
              <p class="text-sm">Belajar pemrograman website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-4 md:mt-10 px-4 md:px-24 py-8 flex items-center justify-center">
    <div data-aos="zoom-in" data-aos-duration="1300"
      class="flex flex-col w-full max-w-7xl mx-auto p-6 sm:p-10 md:p-12 lg:p-16 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] rounded-2xl shadow-xl overflow-hidden">
      <div
        class="flex items-center justify-center gap-2 sm:gap-3 text-xl sm:text-2xl md:text-3xl lg:text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
        <i class="fa-solid fa-map-pin hidden md:block"></i>
        <h1
          class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
          Daftar sekarang dan tunjukkan bakatmu!
        </h1>
      </div>
      <div
        class="text-base sm:text-lg md:text-xl mt-2 font-medium text-center text-gray-700 leading-relaxed flex flex-wrap items-center gap-2 justify-center">
        <p>Info lebih lanjut? DM aja atau hubungi kontak yang tertera!</p>
        <div class="flex gap-2">
          <i class="fa-solid fa-rocket"></i>
          <i class="fa-solid fa-laptop"></i>
        </div>
      </div>
      <h1 class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-center mt-4">#ITCSMKN1Surabaya #BelajarIT
        #JoinUs #TeknologiMasaDepan</h1>

      <a class="text-center"
        href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"><button
          class="m-auto mt-6 sm:mt-8 md:mt-10 w-fit bg-blue-600 hover:bg-blue-700 text-white px-4 sm:px-5 md:px-6 py-2 sm:py-3 rounded-full font-bold transition-all transform hover:scale-105">
          <i class="fas fa-paper-plane"></i> Daftar Sekarang
        </button></a>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" id="materi">
    <div class="text-center mb-10">
      <h1
        class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
        Materi Mingguan
      </h1>
      <p class="mt-3 max-w-2xl mx-auto text-base md:text-lg text-gray-600">
        Akses semua materi pembelajaran terbaru untuk mengembangkan keahlian dan pengetahuan IT Anda
      </p>
    </div>
  </div>

  <?php
  $pdo = require 'koneksi.php';
  $sql2 = 'SELECT id, title, divisi, date_time, description, materi FROM materi';
  $query2 = $pdo->prepare($sql2);
  $query2->execute();
  ?>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-10">
    <?php while ($materi = $query2->fetch()) { ?>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="h-3 bg-gradient-to-r from-blue-600 to-purple-600"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span
              class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded"><?php echo htmlentities($materi['divisi']); ?></span>
            <span class="text-xs text-gray-500"><?php echo htmlentities($materi['date_time']); ?></span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo htmlentities($materi['title']); ?></h3>
          <p class="text-gray-600 text-sm mb-4 h-24 overflow-hidden">
            <?php echo htmlentities(substr($materi['description'], 0, 250)) . (strlen($materi['description']) > 30 ? '...' : ''); ?>
          </p>
          <div class="flex items-center text-xs text-gray-500 mb-4">
            <i class="fa-solid fa-calendar mr-1"></i> <?php echo htmlentities($materi['date_time']); ?>
          </div>
        </div>
        <div class="px-6 py-3 bg-gray-50 flex justify-between items-center">
          <button onclick="openModal(<?php echo htmlentities($materi['id']); ?>)"
            class="inline-flex items-center px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition-all transform hover:scale-105">
            <i class="fa-solid fa-eye mr-1"></i> Lihat Selengkapnya
          </button>
        </div>
      </div>
    <?php } ?>
  </div>

  <?php
  $query2->execute();
  while ($materi = $query2->fetch()) { ?>
    <div id="<?php echo htmlentities($materi['id']); ?>"
      class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
      <div class="bg-white rounded-lg shadow-xl max-w-lg w-full p-6 relative">
        <button onclick="closeModal(<?php echo htmlentities($materi['id']); ?>)"
          class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
          <i class="fa-solid fa-xmark text-2xl"></i>
        </button>
        <h2 class="text-2xl font-bold text-gray-900"><?php echo htmlentities($materi['title']); ?></h2>
        <p class="text-gray-600 mt-2"><?php echo htmlentities($materi['materi']); ?></p>
        <p class="text-gray-600 mt-4"><i class="fa-solid fa-calendar mr-1"></i>
          <?php echo htmlentities($materi['date_time']); ?></p>
      </div>
    </div>
  <?php } ?>


  <div class="space-y-6 max-w-3xl mx-auto p-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" id="materi">
      <div class="text-center mb-10">
        <h1
          class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
          Pertanyaan Umum tentang Ekstrakulikuler IT
        </h1>
      </div>
    </div>
    <details
      class="group [&_summary::-webkit-details-marker]:hidden rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl"
      open>
      <summary
        class="flex cursor-pointer items-center justify-between gap-1.5 p-5 text-white bg-gradient-to-r from-blue-600 to-purple-600">
        <h2 class="font-bold text-lg">Apa syarat untuk bergabung dengan ekstrakulikuler IT ?</h2>
        <svg class="size-6 shrink-0 transition duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="mt-1 px-6 py-4 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF]">
        <p class="leading-relaxed text-gray-700">
          Syarat untuk bergabung dengan ekstrakulikuler IT adalah siswa SMKN 1 Surabaya yang memiliki minat di bidang
          teknologi informasi. Tidak ada persyaratan khusus mengenai kemampuan pemrograman awal, karena kami akan
          membimbing dari dasar. Yang terpenting adalah memiliki kemauan belajar dan komitmen untuk mengikuti kegiatan
          secara rutin.
        </p>
      </div>
    </details>

    <details
      class="group [&_summary::-webkit-details-marker]:hidden rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl">
      <summary
        class="flex cursor-pointer items-center justify-between gap-1.5 p-5 text-white bg-gradient-to-r from-blue-600 to-purple-600">
        <h2 class="font-bold text-lg">Kapan dan di mana kegiatan ekstrakulikuler IT dilaksanakan ?</h2>
        <svg class="size-6 shrink-0 transition duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="mt-1 px-6 py-4 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF]">
        <p class="leading-relaxed text-gray-700">
          Kegiatan ekstrakulikuler Information Technology Club (ITC) secara rutin dilaksanakan setiap hari Sabtu pukul
          10.00-13.00 WIB bertempat di Laboratorium SMKN 1 Surabaya. Perlu diinformasikan bahwa jadwal tersebut dapat
          mengalami penyesuaian berdasarkan kondisi tertentu. Setiap perubahan jadwal akan disampaikan melalui grup
          komunikasi resmi ITC. Anggota dihimbau untuk selalu memperhatikan pengumuman terbaru melalui media komunikasi
          yang telah ditetapkan.
        </p>
      </div>
    </details>


    <details
      class="group [&_summary::-webkit-details-marker]:hidden rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl">
      <summary
        class="flex cursor-pointer items-center justify-between gap-1.5 p-5 text-white bg-gradient-to-r from-blue-600 to-purple-600">
        <h2 class="font-bold text-lg">Bagaimana cara bergabung dengan ekstrakulikuler?</h2>
        <svg class="size-6 shrink-0 transition duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="mt-1 px-6 py-4 bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF]">
        <p class="leading-relaxed text-gray-700">
          Untuk bergabung dengan ekstrakulikuler kami, Anda dapat mengisi formulir pendaftaran online yang
          tersedia di halaman Daftar Sekarang atau menghubungi pembina ekstrakulikuler melalui Instagram yang sudah
          tertera.
        </p>
      </div>
    </details>
  </div>
  <footer class="w-full bg-gradient-to-b from-[#EBF3FB] via-[#E0F7FF] to-[#E8E5FF] pt-24 mt-24 pb-8">
    <div class="w-full max-w-7xl mx-auto px-6">
      <div class="flex flex-col lg:flex-row justify-between items-start mb-12 gap-12">
        <div class="max-w-sm">
          <div class="mb-6">
            <div class="flex items-center gap-1">
              <img src="./src/assets/images/logoitc.png" alt="itc logo" width="50px">
              <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                IT CLUB</h2>
            </div>
          </div>
          <p class="text-gray-600 mb-6 leading-relaxed">Mengembangkan bakat dan minat siswa dalam bidang teknologi
            informasi, programming, desain web, dan keterampilan digital untuk masa depan.</p>
          <div class="flex items-center space-x-5">
            <a href="https://www.instagram.com/itclubsmkn1sby?igsh=MXgzYXM4NnZna3VtdQ=="
              class="text-gray-500 hover:text-blue-600 transition-all">
              <i class="fab fa-instagram text-lg"></i>
            </a>
            <a href="https://discord.gg/putbDTmTt2" class="text-gray-500 hover:text-blue-600 transition-all">
              <i class="fab fa-discord text-lg"></i>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
          <div>
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Navigasi</h3>
            <ul class="space-y-3">
              <li><a href="#home" class="text-gray-600 hover:text-blue-600 transition-all">Home</a></li>
              <li><a href="#about" class="text-gray-600 hover:text-blue-600 transition-all">About</a></li>
              <li><a href="#dokumentasi" class="text-gray-600 hover:text-blue-600 transition-all">Dokumentasi</a></li>
              <li><a href="#materi" class="text-gray-600 hover:text-blue-600 transition-all">Materi</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Divisi</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-600 transition-all">Web Development</a></li>
              <li><a href="#" class="text-gray-600 transition-all">UI/UX Design</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Kontak</h3>
            <ul class="space-y-3">
              <li class="flex items-center">
                <i class="fab fa-discord text-blue-600 mr-3"></i>
                <a href="https://discord.gg/putbDTmTt2" class="text-gray-600 hover:text-blue-600 transition-all">Discord
                  IT CLUB</a>
              </li>
              <li class="flex items-center">
                <i class="fab fa-instagram text-blue-600 mr-3"></i>
                <a href="https://www.instagram.com/itclubsmkn1sby?igsh=MXgzYXM4NnZna3VtdQ=="
                  class="text-gray-600 hover:text-blue-600 transition-all">itclubsmkn1sby</a>
              </li>
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-blue-600 mr-3 mt-1"></i>
                <span class="text-gray-600">SMKN 1 Surabaya, Jl. Smea No.4, Wonokromo, Kec. Wonokromo, Surabaya, Jawa
                  Timur 60243</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="py-8 border-t border-b border-gray-200 mb-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="mb-6 md:mb-0">
            <h3
              class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-2">
              Bergabung dengan IT Club</h3>
            <p class="text-gray-600">Kembangkan skillmu dan jalin relasi yang luas!</p>
          </div>
          <div class="w-full md:w-auto">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4CS6VXup_PV1Pld9ZA7PW4SzOLF19BaPhlfbf-tuJdaJN0A/viewform"
              class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-all">
              <i class="fas fa-user-plus mr-2"></i>Daftar Sekarang
            </a>
          </div>
        </div>
      </div>

      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex flex-wrap justify-center gap-4 md:gap-6">
          <a href="#" class="text-gray-500 text-sm hover:text-blue-600 transition-all">#itclubsmkn1sby</a>
          <a href="#" class="text-gray-500 text-sm hover:text-blue-600 transition-all">#smkn1surabaya</a>
          <a href="#" class="text-gray-500 text-sm hover:text-blue-600 transition-all">#itekstrakulikuler</a>
        </div>
      </div>
    </div>

    <div class="w-full overflow-hidden mt-6">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" class="w-full h-20">
        <path fill="#E0F7FF" fill-opacity="0.4"
          d="M0,32L80,42.7C160,53,320,75,480,74.7C640,75,800,53,960,42.7C1120,32,1280,32,1360,32L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
      </svg>
    </div>
  </footer>

  <script>
    const menuButton = document.getElementById("menuButton");
    const mobileMenu = document.getElementById("mobileMenu");

    menuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");

      const icon = menuButton.querySelector("i");
      if (mobileMenu.classList.contains("hidden")) {
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");
      } else {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-xmark");
      }
    });

    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 10) {
        navbar.classList.add("border-b", "border-gray-200", "shadow-sm");
      } else {
        navbar.classList.remove("border-b", "border-gray-200", "shadow-sm");
      }
    });

    function openModal(id) {
      document.getElementById(id).classList.remove('hidden');
    }
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
    }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      startEvent: "DOMContentLoaded",
      delay: 200,
    });
  </script>
</body>

</html>
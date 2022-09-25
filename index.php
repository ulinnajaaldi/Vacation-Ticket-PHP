<!DOCTYPE html>
<html data-theme="light" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ticket</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.30.0/dist/full.css" rel="stylesheet" type="text/css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");

    .swiper {
      width: 100%;
      height: 100%;
    }

    body {
      font-family: "Poppins", sans-serif;
    }

    .berubah {
      margin-top: 21rem;
      transition: 0.5s ease-in-out;
    }

    .berubah:hover {
      margin-top: 18rem;
    }

    .tombol {
      display: none;
      transition: 0.5s ease-in-out;
    }

    .berubah:hover>.tombol {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            pink: "#FF498B",
            biruh: "#00CFC9",
          },
        },
        container: {
          center: true,
          padding: "3rem",
        },
      },
    };
  </script>
</head>

<body>
  <!-- Header -->
  <header class="text-white" id="home">
    <nav class="container flex items-center xl:py-4 lg:py-3 sm:py-2 mt-4">
      <div class="py-1">
        <a href="#home">
          <img src="./src/img/logo.svg" alt="logo" />
        </a>
      </div>
      <ul class="flex flex-1 justify-end items-center gap-12 lg:text-base sm:text-sm">
        <li><a href="#wisata">Destinasi</a></li>
        <li><a href="#formTiket">Tiket</a></li>
        <li><a href="#about">About Us</a></li>
      </ul>
    </nav>
    <div class="flex">
      <img src="./src/img/background.png" alt="" class="absolute top-0 -z-50 object-fill drop-shadow-xl mx-auto right-0 left-0" />
    </div>
    <div class="container xl:mt-28 lg:mt-14 sm:mt-7">
      <h1 class="font-extrabold xl:text-7xl lg:text-6xl sm:text-4xl">
        VISIT
      </h1>
      <h1 class="font-extrabold xl:text-7xl lg:text-6xl sm:text-4xl">
        PARADISE
      </h1>
      <h1 class="font-extrabold xl:text-7xl lg:text-6xl sm:text-4xl">
        IN INDONESIA
      </h1>
      <p class="font-light xl:w-5/12 sm:w-6/12 lg:py-10 sm:py-5 lg:text-sm sm:text-xs" data-aos="zoom-in-up">
        Ada banyak tempat menarik di Bali Indonesia yang menunggu kehadiranmu.
        Banyak juga hal-hal menarik yang akan didapatkan saat Anda berkunjung
        ke tempat tersebut. Ambil ranselmu, mari Healing sendiri atau bersama
        teman-temanmu!
      </p>
    </div>
    <div data-aos="fade-up">
      <div class="container flex lg:gap-20 sm:gap-10 justify-center xl:py-20 lg:py-7 sm:py-10">
        <div class="flex flex-row items-center gap-2">
          <img src="./src/img/lg_loc.svg" alt="lg_loc " />
          <p class="text-xs font-light">8 Cities</p>
        </div>
        <div class="flex flex-row items-center gap-2">
          <img src="./src/img/lg_bag.svg" alt="lg_bag" />
          <p class="text-xs font-light">252 Traveler</p>
        </div>
        <div class="flex flex-row items-center gap-2">
          <img src="./src/img/lg_camera.svg" alt="lg_camera" />
          <p class="text-xs font-light">488 Treasure</p>
        </div>
      </div>
      <div class="bg-white lg:w-96 md:w-72 h-0.5 mx-auto xl:-my-14 lg:-my-3 md:-my-7"></div>
    </div>
  </header>
  <!-- Header Selesai -->

  <!-- Atribut Dekorasi -->
  <img src="./src/img/decoration.png" alt="" class="absolute mt-48 left-[85%]" />
  <img src="./src/img/decoration.png" alt="" class="absolute mt-[56.25rem] -rotate-180 left-[3%]" />
  <img src="./src/img/decoration.png" alt="" class="absolute mt-[105rem] rotate-90 left-[85%]" />
  <img src="./src/img/decoration_arrow.png" alt="" class="absolute mt-[135rem] left-[5%]" width="40px" />
  <!-- Atribut Dekorasi Selesai -->

  <!-- Destinasi -->
  <div id="wisata">
    <div class="flex flex-col text-black justify-center items-center mt-56" data-aos="fade-down">
      <h2 class="font-semibold text-xl p-4">Destinasi Wisata</h2>
      <p class="font-light text-sm">
        Banyak orang mencari informasi tentang tempat ini
      </p>
    </div>
    <div class="container mt-14 swiper mySwiper pb-14" data-aos="zoom-out">
      <div class="swiper-wrapper">
        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/tanahlt.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Tanah Lot</h2>
            <p class="text-xs p-5">
              Beraban, Kec. Kediri, Kabupaten Tabanan, Bali
            </p>
            <label for="my-modal-1" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>

        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/gwk.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Garuda Wisnu Kencana</h2>
            <p class="text-xs p-5">
              Jl. Raya Uluwatu, Ungasan, Kec. Kuta Sel., Kabupaten Badung,
              Bali
            </p>
            <label for="my-modal-2" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>

        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/kelingking.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Nusa Penida</h2>
            <p class="text-xs p-5">
              Bunga Mekar, Kec. Nusa Penida, Kabupaten Klungkung, Bali
            </p>
            <label for="my-modal-3" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>

        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/lempuyang.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Pura Lempuyang</h2>
            <p class="text-xs p-5">
              Jl. Pura Telaga Mas Lempuyang, Tri Buana, Kec. Abang, Kabupaten
              Karangasem, Bali
            </p>
            <label for="my-modal-4" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>

        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/bedugul.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Danau Beratan Bedugul</h2>
            <p class="text-xs p-5">
              Candikuning, Kecamatan Baturiti, Kabupaten Tabanan, Bali.
            </p>
            <label for="my-modal-5" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>

        <div class="card card-compact bg-base-100 w-[22.563rem] h-[28.75rem] shadow-xl bg-cover bg-center opacity-90 swiper-slide" style="background-image: url(./src/img/kuta.jpg)">
          <div class="flex flex-col text-center text-white items-center berubah">
            <h2 class="text-2xl font-bold">Pantai Kuta</h2>
            <p class="text-xs p-5">
              Jl. Pantai Kuta, Kuta, Kabupaten Badung, Bali
            </p>
            <label for="my-modal-6" class="bg-biruh hover:bg-cyan-500 w-56 h-11 m-auto drop-shadow-lg font-semibold text-base rounded-md tombol cursor-pointer">
              Selengkapnya
            </label>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Destinasi Selesai -->

  <!-- Form -->
  <section class="container mt-20 " data-aos="zoom-in">
    <form method="POST" id="tiket">
      <h1 class="text-center font-semibold text-2xl" id="formTiket">Form Pemesanan</h1>
      <div class="block w-6/12 mx-auto mt-5">
        <label for="nama" class=" block text-sm font-medium text-slate-700">
          Nama Lengkap
        </label>
        <input type="text" name="nama" id="nama" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Lorem Ipsum" />
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="identitas" class=" block text-sm font-medium text-slate-700">
          Nomor Identitas
        </label>
        <input type="text" name="identitas" id="identitas" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="3322011xxxxx" />
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="nomorHP" class=" block text-sm font-medium text-slate-700">
          Nomor HP
        </label>
        <input type="text" name="nomorHP" id="nomorHP" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="08xxxxx" />
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="tempatWisata" class="block text-sm font-medium text-slate-700">
          Tempat Wisata
        </label>
        <select name="tempatWisata" id="tempatWisata" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
          <option value="Tanah Lot">Tanah Lot</option>
          <option value="Garuda Wisnu Kencana">Garuda Wisnu Kencana</option>
          <option value="Nusa Penida">Nusa Penida</option>
          <option value="Pura Lempuyang">Pura Lempuyang</option>
          <option value="Danau Beratan Bedugul">Danau Beratan Bedugul</option>
          <option value="Pantai Kuta">Pantai Kuta</option>
        </select>
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="tglKunjungan" class=" block text-sm font-medium text-slate-700">
          Tanggal Kunjungan
        </label>
        <input type="date" name="tglKunjungan" id="tglKunjungan" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" />
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="pengunjungDewasa" class=" block text-sm font-medium text-slate-700">
          Pengunjung Dewasa
        </label>
        <input type="number" name="pengunjungDewasa" id="pengunjungDewasa" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="0" />
      </div>

      <div class="block w-6/12 mx-auto mt-5">
        <label for="pengunjungAnak" class="block text-sm font-medium text-slate-700">
          Pengunjung Anak Anak
        </label>
        <input type="number" name="pengunjungAnak" id="pengunjungAnak" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="0" />
      </div>

      <div class="flex w-6/12 items-end mx-auto mt-5">
        <button class="bg-biruh hover:bg-cyan-500 w-44 h-11 drop-shadow-lg font-semibold text-base rounded-md text-white" id="btnInfoHarga">
          Tampilkan Harga
        </button>
      </div>

      <div class="hidden" id="infoHarga">
        <label class="text-sm">Harga Tiket :
          <span class="text-pink font-semibold">Rp. <span id="hargaTiket" name>40.000</span></span>
        </label>
        <label class="text-sm">
          Total Harga :
          <span class="text-sky-600 font-semibold">Rp. <span id="hargaTiketTotal">0.000</span></span>
        </label>
      </div>

      <div class="flex w-6/12 mx-auto mt-5 items-center text-center gap-3 text-white">
        <label for="form_modal" class="bg-biruh hover:bg-cyan-500 h-11 drop-shadow-lg font-semibold text-base rounded-md cursor-pointer flex items-center justify-center grow" onclick="cek()">
          Pesan Tiket
        </label>
        <button type="reset" class="bg-[#f44336] hover:bg-[#c3352b] w-32 h-11 drop-shadow-lg font-semibold text-base rounded-md cursor-pointer flex items-center justify-center grow-0" value="Reset" id="btnReset">
          Reset
        </button>
      </div>
      <!-- Modal Form -->

      <input type="checkbox" id="form_modal" class="modal-toggle " />
      <div class="modal bg-transparent">
        <div class="modal-box w-11/12 max-w-5xl">
          <h3 class="font-bold text-lg">Detail Pemesanan Tiket</h3>
          <p class="py-4" id="detailPemesan"></p>
          <p class="flex items-center justify-start text-sm gap-2"><input type="checkbox" class="checkbox w-5 h-5" id="sepakat" />
            Saya dan/ atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</p>

          <div class="modal-action text-white">
            <button type="submit" name="submit" class="bg-biruh hover:bg-cyan-500 w-56 h-11 drop-shadow-lg font-semibold text-base rounded-md hidden konfirmBtn" id="konfirmBtn">
              Konfirmasi Pembayaran
            </button>
            <label for="form_modal" class="bg-[#f44336] hover:bg-[#c3352b] w-32 h-11 drop-shadow-lg font-semibold text-base rounded-md cursor-pointer flex items-center justify-center">Tutup</label>
          </div>
        </div>
      </div>

      <!-- Modal Form Selesai -->
    </form>
  </section>
  <!-- Form Selesai -->

  <!-- Section About -->
  <section class="mt-40 xl:mt-24" id="about">
    <div class="container text-center" data-aos="fade-up">
      <h3 class="text-pink font-bold text-lg">Get to know Travel.</h3>
      <h1 class="text-5xl font-bold py-5 text-black">About Us</h1>
      <p class="text-base font-light w-6/12 m-auto text-black">
        Travel adalah layanan bagi masyarakat yang ingin menjelajah pariwisata
        di pulau Bali. Kami hadir untuk membantu Anda mendapatkan informasi
        berbagai wisata di seluruh disini dengan mudah, aman, dan juga nyaman
      </p>
      <video width="856px" controls class="rounded-[30px] m-auto mt-16">
        <source src="./src/video/wonderfull_Indonesia.mp4" />
      </video>
    </div>
  </section>
  <!-- Section About Selesai-->

  <footer>
    <div class="mt-20 p-16 px-60 md:px-32 border">
      <div class="flex justify-between">
        <div class="flex flex-col items-start">
          <img src="./src/img/logo_dark.svg" alt="logo" />
          <p class="w-4/6 text-base">
            Kami kabulkan liburan spesial anda secara cepat dan nyaman
          </p>
        </div>
        <div class="text-base">
          <h3 class="text-blue-800 font-medium text-lg">Connect Us</h3>
          <p>support@travel.io</p>
          <p>021-2290-1994</p>
          <p>Bali, Indonesia</p>
        </div>
      </div>
      <p class="m-auto text-center mt-10">
        Copyright 2022 • Aldilla Ulinnaja • Travel
      </p>
    </div>
  </footer>

  <!-- Modal 1 -->
  <input type="checkbox" id="my-modal-1" class="modal-toggle" />
  <label for="my-modal-1" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/tanahlot.mp4" controls></video>
        <div class="flex flex-col">
          <h3 class="text-xl font-bold">Tanah Lot</h3>
          <p class="py-4">
            Pura Tanah Lot adalah salah satu Pura (Tempat Ibadah Umat Hindu)
            yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura
            yang terletak di atas batu besar. Satu terletak di atas bongkahan
            batu dan satunya terletak di atas tebing mirip dengan Pura
            Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang
            Kahyangan. Pura Tanah Lot merupakan pura laut tempat pemujaan
            dewa-dewa penjaga laut. Tanah Lot terkenal sebagai tempat yang
            indah untuk melihat matahari terbenam.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.40,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 1 Selesai -->
  <!-- Modal 2 -->
  <input type="checkbox" id="my-modal-2" class="modal-toggle" />
  <label for="my-modal-2" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/gwk.mp4" controls></video>
        <div class="flex flex-col max-h-[32rem] overflow-y-scroll">
          <h3 class="text-xl font-bold">Taman Budaya Garuda Wisnu Kencana</h3>
          <p class="py-4">
            Taman Budaya Garuda Wisnu Kencana (bahasa Inggris: Garuda Wisnu
            Kencana Cultural Park), atau kerap disebut dengan GWK, adalah
            sebuah taman wisata budaya di bagian selatan pulau Bali. Taman
            wisata ini terletak di Desa Ungasan, Kecamatan Kuta Selatan,
            Kabupaten Badung, kira-kira 40 kilometer di sebelah selatan
            Denpasar, ibu kota provinsi Bali.Di sini berdiri megah sebuah
            landmark atau maskot Bali, yakni patung Garuda Wisnu Kencana yang
            menggambarkan sosok Dewa Wisnu menunggangi tunggangannya, Garuda,
            setinggi 121 meter.<br /><br />
            Area Taman Budaya Garuda Wisnu Kencana berada di ketinggian 146
            meter di atas permukaan tanah atau 263 meter di atas permukaan
            laut.<br /><br />
            Di kawasan itu terdapat juga Patung Garuda yang tepat di belakang
            Plaza Wisnu adalah Plaza Garuda di mana patung kepala Garuda
            setinggi 18 meter ditempatkan. Pada saat ini, Plaza Garuda menjadi
            titik fokus dari sebuah lorong besar pilar berukir batu kapur yang
            mencakup lebih dari 4000 meter persegi luas ruang terbuka yang
            dinamai Lotus Pond. Pilar-pilar batu kapur kolosal dan monumental
            di Lotus Pond mencipatakan seni lansekap ruang yang sangat
            eksotis. Dengan kapasitas ruangan yang mampu menampung hingga 7000
            orang, Lotus Pond telah mendapatkan reputasi yang baik sebagai
            tempat sempurna untuk mengadakan acara besar, baik yang berskala
            nasional maupun internasional.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.70,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 2 Selesai -->
  <!-- Modal 3 -->
  <input type="checkbox" id="my-modal-3" class="modal-toggle" />
  <label for="my-modal-3" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/nusa.mp4" controls></video>
        <div class="flex flex-col max-h-[32rem] overflow-y-scroll">
          <h3 class="text-xl font-bold">Nusa Penida</h3>
          <p class="py-4">
            Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara
            Republik Indonesia yang terletak di sebelah tenggara Bali yang
            dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga
            pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan.
            Perairan pulau Nusa Penida terkenal dengan kawasan selamnya di
            antaranya terdapat di Crystal Bay, Manta Point, Batu Meling, Batu
            Lumbung, Batu Abah, Toyapakeh dan Malibu Point.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.60,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 3 Selesai -->
  <!-- Modal 4 -->
  <input type="checkbox" id="my-modal-4" class="modal-toggle" />
  <label for="my-modal-4" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/lempuyang.mp4" controls></video>
        <div class="flex flex-col max-h-[32rem] overflow-y-scroll">
          <h3 class="text-xl font-bold">Pura Penataran Agung Lempuyang</h3>
          <p class="py-4">
            Pura Penataran Agung Lempuyang adalah sebuah pura yang terletak di
            lereng Gunung Lempuyang di Karangasem, Bali. Pura Penataran Agung
            Lempuyang dianggap sebagai bagian dari kompleks pura di sekitar
            Gunung Lempuyang, salah satu pura yang sangat dihormati di Bali.
            Pura-pura di Gunung Lempuyang, yang diwakili oleh pura tertinggi
            di puncak Gunung Lempuyang, Pura Lempuyang Luhur, merupakan salah
            satu Sad Kahyangan Jagad, atau "enam tempat suci dunia", enam
            tempat sembahyang paling suci di Bali.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.20,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 4 Selesai -->
  <!-- Modal 5 -->
  <input type="checkbox" id="my-modal-5" class="modal-toggle" />
  <label for="my-modal-5" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/bedugul.mp4" controls></video>
        <div class="flex flex-col max-h-[32rem] overflow-y-scroll">
          <h3 class="text-xl font-bold">Danau Bratan Bedugul</h3>
          <p class="py-4">
            Danau Bratanadalah sebuah danau yang terletak di kawasan Bedugul,
            Desa Candikuning, Kecamatan Baturiti, Kabupaten Tabanan, Bali.
            Danau yang terletak paling timur di antara dua danau lainnya yaitu
            Danau Tamblingan dan Danau Buyan, yang merupakan gugusan danau
            kembar di dalam sebuah kaldera besar, Danau Bratan terbilang cukup
            istimewa. <br /><br />
            Berada di jalur jalan provinsi yang menghubungkan
            Denpasar-Singaraja serta letaknya yang dekat dengan Kebun Raya Eka
            Karya menjadikan tempat ini menjadi salah satu andalan wisata
            pulau Bali. Disamping mudah dijangkau Danau Bratan juga
            menyediakan beragam pesona dan akomodasi yang memadai.
            <br /><br />
            Di tengah danau terdapat sebuah pura yaitu Pura Ulun Danu, yang
            merupakan tempat pemujaan kepada Sang Hyang Dewi Danu sebagai
            pemberi kesuburan.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.50,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 5 Selesai -->
  <!-- Modal 6 -->
  <input type="checkbox" id="my-modal-6" class="modal-toggle" />
  <label for="my-modal-6" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl" for="">
      <div class="flex gap-5">
        <video width="300" src="./src/video/kuta.mp4" controls></video>
        <div class="flex flex-col max-h-[32rem] overflow-y-scroll">
          <h3 class="text-xl font-bold">Pantai Kuta</h3>
          <p class="py-4">
            Pantai Kuta adalah sebuah tempat pariwisata yang terletak di Kuta,
            Badung|kecamatan Kuta sebelah selatan Kota Denpasar,
            Bali,Indonesia Daerah ini merupakan sebuah tujuan wisata turis
            mancanegara dan telah menjadi objek wisata andalan Pulau Bali
            sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai
            pantai [[matahari terbenam sebagai lawan dari pantai Sanur. Selain
            itu, [[Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari
            Kuta.
          </p>
          <p>
            Biaya Wisata kesini hanya <span class="text-pink">Rp.30,000</span>
          </p>
        </div>
      </div>
    </label>
  </label>
  <!-- Modal 6 Selesai -->
  <?php

  $db = mysqli_connect("localhost", "root", "", "tiket_app");

  if (isset($_POST['submit'])) {


    $nama_lengkap = $_POST['nama'];
    $no_identitas = $_POST['identitas'];
    $no_HP = $_POST['nomorHP'];
    $tempat_wisata = $_POST['tempatWisata'];
    $tgl_kunjungan  = $_POST['tglKunjungan'];
    $pengunjung_dewasa = $_POST['pengunjungDewasa'];
    $pengunjung_anak = $_POST['pengunjungAnak'];

    switch ($tempat_wisata) {
      case 'Tanah Lot':
        $harga = 40000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
      case 'Garuda Wisnu Kencana':
        $harga = 70000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
      case 'Nusa Penida':
        $harga = 60000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
      case 'Pura Lempuyang':
        $harga = 20000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
      case 'Danau Beratan Bedugul':
        $harga = 50000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
      case 'Pantai Kuta':
        $harga = 30000;
        $hargaTotal = ($harga * $pengunjung_dewasa) + ($harga * $pengunjung_anak / 2);
        break;
    }

    $query = "INSERT INTO data_wisatawan VALUES ('', '$nama_lengkap', '$no_identitas', '$no_HP', '$tempat_wisata','$tgl_kunjungan','$pengunjung_dewasa','$pengunjung_anak','$harga','$hargaTotal')";
    mysqli_query($db, $query);
  }
  ?>

  <script src="./dom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 60,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

</body>

</html>
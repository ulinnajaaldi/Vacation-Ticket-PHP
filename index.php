<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        container: {
          center: true,
          padding: "3rem",
        },
      },
    };
  </script>
</head>

<body>
  <header class="text-white">
    <nav class="container flex items-center xl:py-4 lg:py-3 sm:py-2 mt-4">
      <div class="py-1">
        <img src="./src/img/logo.svg" alt="logo" />
      </div>
      <ul class="flex flex-1 justify-end items-center gap-12 lg:text-base sm:text-sm">
        <li><a href="#">Tiket</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </nav>
    <img src="./src/img/bg2.png" alt="" class="absolute top-0 -z-50 w-full" />
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
      <p class="xl:w-5/12 sm:w-6/12 font-light lg:py-10 sm:py-5 lg:text-base sm:text-xs">
        Ada banyak tempat tersembunyi di Indonesia yang masih belum terjamah
        oleh publik. Banyak juga hal-hal menarik yang akan didapatkan saat
        Anda berkunjung ke tempat tersebut. Ambil ranselmu, mari Healing
        sendiri atau bersama teman-temanmu
      </p>
    </div>
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
  </header>
</body>

</html>
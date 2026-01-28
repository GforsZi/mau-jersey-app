<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MAUJERSEY — Katalog</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="icon" href="{{ asset('favicon.ico') }}">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { display: ["Poppins","sans-serif"] },
          boxShadow: {
            glow: "0 0 30px rgba(34,211,238,.25)"
          }
        }
      }
    }
  </script>

  <style>
    html,body{overflow-x:hidden}
    img{max-width:100%;display:block}
    .glass{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);backdrop-filter:blur(14px)}
    .glow-text{text-shadow:0 0 6px rgba(34,211,238,.55),0 0 20px rgba(34,211,238,.35)}
    .swiper,.swiper-wrapper,.swiper-slide{overflow:hidden}
  </style>
</head>

<body class="bg-slate-950 text-white font-display">

<!-- NAVBAR -->
<header class="sticky top-0 z-50 border-b border-white/5 bg-slate-950/60 backdrop-blur-xl">
  <div class="mx-auto max-w-6xl px-4 py-4 grid grid-cols-3 items-center">

    <!-- LOGO (LEFT) -->
    <a href="{{ route('home') }}" class="flex items-center gap-3">
      <div class="h-10 w-10 rounded-2xl border border-cyan-300/30 bg-cyan-300/10 shadow-glow flex items-center justify-center">
        <img src="{{ asset('logo.png') }}" class="h-8 w-8 object-contain" alt="MAUJERSEY">
      </div>
      <div>
        <p class="text-lg font-extrabold leading-none">MAUJERSEY</p>
        <p class="text-xs text-slate-400">Custom Sport Apparel</p>
      </div>
    </a>

    <!-- MENU (CENTER) -->
    <nav class="hidden md:flex justify-center gap-8 text-sm text-slate-300">
      <a href="{{ route('home') }}" class="hover:text-cyan-200 {{ request()->routeIs('home') ? 'text-cyan-200 font-semibold' : '' }}">Home</a>
      <a href="{{ route('katalog') }}" class="hover:text-cyan-200 {{ request()->routeIs('katalog*') ? 'text-cyan-200 font-semibold' : '' }}">Katalog</a>
      <a href="{{ route('berita') }}" class="hover:text-cyan-200 {{ request()->routeIs('berita*') ? 'text-cyan-200 font-semibold' : '' }}">Berita</a>
      <a href="{{ route('contact') }}" class="hover:text-cyan-200 {{ request()->routeIs('contact') ? 'text-cyan-200 font-semibold' : '' }}">Contact</a>
    </nav>

    <!-- BUTTON MASUK (RIGHT) -->
    <div class="hidden md:flex justify-end">
      <a href="#"
        class="rounded-full px-5 py-2.5 text-sm font-semibold text-slate-950 bg-cyan-300 hover:bg-cyan-200 transition shadow-glow">
        Masuk
      </a>
    </div>

  </div>
</header>


<main class="max-w-6xl mx-auto px-4">

<!-- HERO -->
<section class="relative mt-8 rounded-3xl overflow-hidden border border-white/10">
  <div class="absolute inset-0 -z-10">
    <div class="swiper heroSwiper h-full w-full">
      <div class="swiper-wrapper">
        @foreach (['Produk1.png','Produk2.png','Produk3.png','Produk4.png','Produk5.png','Produk6.png'] as $img)
          <div class="swiper-slide">
            <img src="{{ asset($img) }}" class="w-full h-full object-cover">
          </div>
        @endforeach
      </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/70 to-slate-950/90"></div>
  </div>

  <div class="px-10 py-16">
    <h1 class="text-5xl font-black glow-text">
      Katalog <span class="text-cyan-300">MAUJERSEY</span>
    </h1>
    <p class="mt-4 text-slate-300 max-w-2xl">
      Jersey custom premium untuk futsal, basket, esport, hingga badminton.
      Bisa custom desain, nama, dan nomor sesuai kebutuhan tim.
    </p>
  </div>
</section>

<!-- PRODUK GRID -->
<section class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 pb-20">

@foreach ([
  [
    'title'=>'Jersey Futsal Custom',
    'price'=>'Rp 120.000',
    'desc'=>'Full print sublim, adem dan nyaman untuk pertandingan indoor.',
    'images'=>['Produk1.png','Produk1.png','Produk1.png']
  ],
  [
    'title'=>'Jersey Basket Custom',
    'price'=>'Rp 150.000',
    'desc'=>'Breathable, cutting basket, bisa satu set atas & bawah.',
    'images'=>['Produk2.png','Produk2.png','Produk2.png']
  ],
  [
    'title'=>'Jersey Esport Premium',
    'price'=>'Rp 170.000',
    'desc'=>'Desain eksklusif, cocok untuk tim profesional & turnamen.',
    'images'=>['Produk3.png','Produk3.png','Produk3.png']
  ],
  [
    'title'=>'Paket Jersey 1 Tim',
    'price'=>'Rp 110.000',
    'desc'=>'Lebih hemat untuk kebutuhan satu tim lengkap.',
    'images'=>['Produk4.png','Produk4.png','Produk4.png']
  ],
  [
    'title'=>'Jersey Sepeda',
    'price'=>'Rp 140.000',
    'desc'=>'Ringan dan cepat menyerap keringat untuk gowes jarak jauh.',
    'images'=>['Produk5.png','Produk5.png','Produk5.png']
  ],
  [
    'title'=>'Jersey Badminton',
    'price'=>'Rp 130.000',
    'desc'=>'Fleksibel dan ringan untuk rally cepat.',
    'images'=>['Produk6.png','Produk6.png','Produk6.png']
  ],
] as $p)

<a href="{{ route('katalog.details') }}"
   class="glass rounded-3xl p-6 hover:border-cyan-300/30 hover:bg-cyan-300/5 transition block">

  <!-- PRODUCT SWIPER -->
  <div class="swiper productSwiper rounded-2xl overflow-hidden mb-4">
    <div class="swiper-wrapper">
      @foreach ($p['images'] as $img)
        <div class="swiper-slide">
          <img src="{{ asset($img) }}" class="h-44 w-full object-cover">
        </div>
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <h3 class="text-xl font-extrabold">{{ $p['title'] }}</h3>
  <p class="mt-2 text-sm text-slate-300">{{ $p['desc'] }}</p>

  <div class="mt-4 flex justify-between items-center">
    <p class="text-cyan-300 font-extrabold">{{ $p['price'] }}</p>
    <span class="text-xs text-slate-400">Lihat Detail →</span>
  </div>
</a>

@endforeach

</section>

<div class="mt-10 flex justify-center">
  <a href="{{ route('contact') }}"
    class="inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold text-slate-950 bg-cyan-300 hover:bg-cyan-200 transition shadow-glow">
    Konsultasi & Order Sekarang
  </a>
</div>

</main>

<!-- FOOTER -->
<footer class="border-t border-white/5">
  <div class="mx-auto max-w-6xl px-4 py-10 flex flex-col md:flex-row gap-6 items-start md:items-center justify-between">

    <p class="text-sm text-slate-400">
      © <span class="text-white font-semibold">MAUJERSEY</span>. All Rights Reserved.
    </p>

    <!-- SOCIAL -->
    <div class="flex items-center gap-3">

      <!-- TikTok -->
      <a href="https://www.tiktok.com/@username" target="_blank" rel="noopener"
        class="group inline-flex items-center justify-center h-10 w-10 rounded-full border border-white/10 bg-white/5 hover:bg-cyan-300/10 hover:border-cyan-300/30 transition">
        <svg class="h-5 w-5 text-slate-200 group-hover:text-cyan-200 transition" viewBox="0 0 24 24" fill="currentColor">
          <path d="M17.5 6.06c-1.36-.87-2.25-2.34-2.34-4.06h-3.1v14.2a2.6 2.6 0 1 1-2.23-2.58v-3.2a5.8 5.8 0 1 0 5.33 5.78V9.18c1.2.86 2.67 1.37 4.34 1.37V7.5c-.75 0-1.46-.15-2.01-.44z"/>
        </svg>
      </a>

      <!-- Instagram -->
      <a href="https://instagram.com/username" target="_blank" rel="noopener"
        class="group inline-flex items-center justify-center h-10 w-10 rounded-full border border-white/10 bg-white/5 hover:bg-cyan-300/10 hover:border-cyan-300/30 transition">
        <svg class="h-5 w-5 text-slate-200 group-hover:text-cyan-200 transition" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2">
          <rect x="3" y="3" width="18" height="18" rx="5"/>
          <path d="M16 11.37a4 4 0 1 1-7.75 1.2"/>
          <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/>
        </svg>
      </a>

      <!-- Facebook -->
      <a href="https://facebook.com/username" target="_blank" rel="noopener"
        class="group inline-flex items-center justify-center h-10 w-10 rounded-full border border-white/10 bg-white/5 hover:bg-cyan-300/10 hover:border-cyan-300/30 transition">
        <svg class="h-5 w-5 text-slate-200 group-hover:text-cyan-200 transition" viewBox="0 0 24 24" fill="currentColor">
          <path d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-2.9h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.5v1.9H17l-.4 2.9h-2.3v7A10 10 0 0 0 22 12z"/>
        </svg>
      </a>

    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper(".heroSwiper",{loop:true,effect:"fade",autoplay:{delay:2800}});
document.querySelectorAll(".productSwiper").forEach(el=>{
  new Swiper(el,{
    loop:true,
    pagination:{el:el.querySelector(".swiper-pagination"),clickable:true},
    autoplay:{delay:2500}
  })
})
</script>

</body>
</html>

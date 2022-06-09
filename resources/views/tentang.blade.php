
<x-sidebar>
    <x-slot:heading>Tentang</x-slot>
    <x-slot:subheading>Ketahui informasi lebih lanjut seputar Faumation.</x-slot>
    <x-slot:content>
    <div class="text-center">
    <img class="mx-auto h-32" src="{{asset('img/logobig.png')}}">
    <div class="text-center">
    <div class="bg-gray-700 text-center shadow overflow-hidden mt-3 sm:rounded-lg h-full pb-10">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 text-center font-bold text-white">Tentang Proyek</h3>
  </div>
  <div class="text-left px-5">
  <p class="text-left">Faumation adalah proyek yang dibuat menggunakan teknologi Internet of Things dengan topik "Sistem Pemantauan Ketinggian Air dan Pemanas Temperatur Air dengan Otomasi Keran Berbasis Internet of Things Melalui Web Menggunakan Modul Arduino Uno R3 V2.0 Pada Penampungan Air Warga". Faumation tersedia dalam bentuk simulasi Proteus maupun simulasi dalam bentuk Website Faumation yang dapat diakses melalui Web Browser.
 </p>
 <br>
 <h1 class="font-bold">Manfaat Penggunaan Faumation:</h1>
 <ul class="list-disc ml-5">
   <li>Memudahkan warga dalam proses pengisian air pada tempat penampungan air mandi yang mana keran airnya dapat dijalankan secara otomatis dengan deteksi jarak batas atas (mendekati penuh) jika menyentuh 90% dari sisa air, maka keran air Off dan batas bawahnya (mendekati habis) jika menyentuh 10% dari sisa air, maka keran air dinyalakan. Selain itu, juga tersedia opsi pengisian yang dapat dikendalikan secara manual jika warga membutuhkan mengisi air meskipun dalam kondisi air masih belum hampir habis (sedang berada diantara 11% sampai dengan 89%). Alhasil, fitur pengisian air ini dapat menghemat waktu dan tenaga sekaligus mencegah pemakaian air mandi yang terbuang sia-sia karena melewati kapasitas tempat pengisian air ketika sedang melakukan pengisian air.
</li>
<li>Memberikan kenyamanan bagi warga dalam menyesuaikan temperatur air berdasarkan kebutuhan, yang mana tersedia pendeteksi temperatur air yang dapat dijalankan secara otomatis (jika temperatur < 20°C, maka pemanas air akan On sehingga warga bisa mendapatkan air dengan temperatur hangat dan ketika temperatur > 40°C, maka pemanas air akan Off). Selain itu, jika warga menginginkan menghangatkan temperatur air ketika sedang berada diantara 21°C sampai dengan 39°C, maka warga dapat menggunakan opsi pengendalian pemanas air secara manual untuk menghangatkan air.
</li>
</ul>
<h1 class="font-bold mt-2">Isi Website:</h1>
<ul class="list-disc ml-5">

<li>Kontrol -> Menampilkan simulasi pemakaian Pengisian Air dan Pemanas Air dengan kendali otomatis maupun manual.</li>
<li>Dasbor -> Menampilkan data konsumsi air dalam satuan liter melalui Bar Chart “Pengisian Air” beserta durasi waktu menyalakan Pemanas Air dalam satuan jam melalui Line Chart “Pemanas Air”.</li>
<li>Profil -> Menampilkan profil akun pengguna meliputi Nama Lengkap, Surel, Kata Sandi, Autentikasi Dua Faktor, Manajemen Sesi Aktif dari peramban maupun perangkat lain, dan penghapusan akun.</li>
<li>Tentang -> Menampilkan informasi lebih lanjut seputar proyek Faumation. </li>
</ul>
</div>
</div>
  </x-slot>
</x-sidebar>


<script>
function openCity(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("bg-indigo-700 text-white", "text-indigo-300");
  }
  document.getElementById(tabName).style.display = "grid";
  evt.currentTarget.className += " bg-indigo-700 text-white";
  evt.currentTarget.className = evt.currentTarget.className.replace("text-indigo-300","")
}
</script>
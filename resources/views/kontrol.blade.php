
<x-sidebar>
    <x-slot:heading>Kontrol</x-slot>
    <x-slot:subheading>Nikmati kendali yang praktis.</x-slot>
    <x-slot:content>
    <div>
  <div class="sm:hidden">
    <label for="tabs" class="sr-only">Select a tab</label>
    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
    <select id="tabs" name="tabs" class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
      <option>My Account</option>

      <option>Company</option>

      <option selected>Team Members</option>

      <option>Billing</option>
    </select>
  </div>
  <div class="hidden sm:block">
    <nav class="flex space-x-4 justify-center mb-6" aria-label="Tabs">
      <!-- Current: "bg-gray-100 text-gray-700", Default: "text-gray-500 hover:text-gray-700" -->
      <a href="#" onclick="openCity(event,'otomatis')" class="text-indigo-300 tablinks bg-gray-900 hover:text-gray-700 px-3  py-2 font-medium text-sm rounded-md"> Kendali Otomatis </a>

      <a href="#" onclick="openCity(event,'manual')" class="text-indigo-300 tablinks  bg-gray-900 hover:text-gray-700 px-3 py-2 font-medium text-sm rounded-md"> Kendali Manual </a>
    </nav>
  </div>
</div>

<!-- OTOMATIS -->
<div class="grid grid-cols-2 items-stretch tabcontent" id="otomatis">
<div class="col-span-1 px-3 items-stretch">
<div class="bg-gray-700 text-center shadow overflow-hidden sm:rounded-lg h-full">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 text-center font-medium text-blue-400">Pengisian Air</h3>
  </div>
  <div class="border-t text-center border-gray-900 px-4 py-5">
    <img class="h-48 mx-auto" src="{{asset('img/drop.png')}}">
    <span class="inline-flex mt-3 items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Sisa Air: <span class="font-bold">30%</span></h3>
  </div>
  <span class="relative z-0 mb-4 inline-flex shadow-sm rounded-md text-center">
  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md  bg-blue-400 text-sm font-medium text-gray-900 hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Batas Bawah</button>
  <button type="button" class="-ml-px relative inline-flex items-center px-4 py-2 rounded-r-md   bg-black text-sm font-medium text-white hover:bg-gray-800 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Batas Atas</button>
</span>
</div>

</div>
<div class="col-span-1 px-3">
<div class="bg-gray-700 shadow overflow-hidden text-center sm:rounded-lg h-full">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 text-center font-medium text-red-400">Pemanasan Air</h3>
  </div>
  <div class="border-t text-center border-gray-900 px-4 py-5">
    <img class="h-48 mx-auto" src="{{asset('img/termo.png')}}">
    <span class="inline-flex mt-3 items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Temperatur Air: <span class="font-bold">21°C</span></h3>
  </div>
  <button type="button" class="inline-flex mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-black bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">X Hentikan Pemanasan Air</button>
  
</div>
</div>
</div>
<!-- AKHIR OTOMATIS -->
<!-- MANUAL -->
<div class="grid grid-cols-2 items-stretch tabcontent" style="display:none" id="manual">
<div class="col-span-1 px-3 items-stretch">
<div class="bg-gray-700 text-center shadow overflow-hidden sm:rounded-lg h-full">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 text-center font-medium text-blue-400">Pengisian Air</h3>
  </div>
  <div class="border-t text-center border-gray-900 px-4 py-5">
    <img class="h-48 mx-auto" src="{{asset('img/drop.png')}}">
    <span class="inline-flex mt-3 items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Sisa Air: <span class="font-bold">30%</span></h3>
  </div>

  <label for="price" class="block mt-3 text-sm font-bold text-white">Simulasikan Pengisian Air</label>
  <label for="price" class="block text-sm mb-2 font-medium text-white">Masukkan angka sisa air di tempat pengisian air</label>
  <div class="px-5">
  <div class="mt-1 relative rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    </div>
    <input type="text" name="price" id="price" class="focus:ring-indigo-200 mb-3 focus:border-indigo-300 block w-full pl-7 pr-12 sm:text-sm border-white bg-gray-700 rounded-md" placeholder="0.00" aria-describedby="price-currency">
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm" id="price-currency">%</span>
    </div>
    
  </div>
  <button type="button" class="inline-flex mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-black bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">X Hentikan Pemanasan Air</button>
</div>

</div>

</div>
<div class="col-span-1 px-3">
<div class="bg-gray-700 shadow overflow-hidden text-center sm:rounded-lg h-full">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 text-center font-medium text-red-400">Pemanasan Air</h3>
  </div>
  <div class="border-t text-center border-gray-900 px-4 py-5">
    <img class="h-48 mx-auto" src="{{asset('img/termo.png')}}">
    <span class="inline-flex mt-3 items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Temperatur Air: <span class="font-bold">21°C</span></h3>
  </div>
  <label for="price" class="block mt-3 text-sm font-bold text-white">Simulasikan Pemanasan Air</label>
  <label for="price" class="block text-sm mb-2 font-medium text-white">Masukkan angka temperatur celcius</label>
  <div class="px-5">
  <div class="mt-1 relative rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    </div>
    <input type="text" name="price" id="price" class="focus:ring-indigo-200 mb-3 focus:border-indigo-300 block w-full pl-7 pr-12 sm:text-sm border-white bg-gray-700 rounded-md" placeholder="0.00" aria-describedby="price-currency">
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm" id="price-currency">°C</span>
    </div>
    
  </div>
  <button type="button" class="inline-flex mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-black bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">X Hentikan Pemanasan Air</button>

</div>


</div>
</div>
<!-- AKHIR MANUAL -->
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
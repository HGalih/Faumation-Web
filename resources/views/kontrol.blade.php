
<x-sidebar>
    <x-slot:heading>Kontrol</x-slot>
    <x-slot:subheading>Nikmati kendali yang praktis.</x-slot>
    <x-slot:content>
    <div class="mb-5">
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
      <a href="#" onclick="openCity(event,'otomatis')" class="tablinks bg-gray-900 bg-indigo-700 text-white hover:text-gray-700 px-3  py-2 font-medium text-sm rounded-md"> Kendali Otomatis </a>

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
    <span class="inline-flex statusAir mt-3 items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Sisa Air: <span id="" class="font-bold sisaAir">30</span>%</h3>
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
    <span class="inline-flex mt-3 items-center px-2.5 py-0.5 rounded-md text-sm statusPemanas  bg-red-100 text-red-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Temperatur Air: <span class="font-bold suhu">21</span> °C</h3>
  </div>
  
</div>

</div>

</div>
<div class="w-full" id="otomatis2">
<button type="button" onClick="detectAll()" class="block mx-auto mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none mt-5 focus:ring-2 focus:ring-offset-2 focus:ring-white">Nyalakan Sistem Otomasi</button>
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
    <span class="inline-flex mt-3 statusAir items-center px-2.5 py-0.5 rounded-md text-sm  bg-blue-100 text-blue-800 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Sisa Air: <span class="font-bold sisaAir">30</span>%</h3>
  </div>

  <label for="price" class="block mt-3 text-sm font-bold text-white">Simulasikan Pengisian Air</label>
  <label for="price" class="block text-sm mb-2 font-medium text-white">Masukkan angka sisa air di tempat pengisian air</label>
  <div class="px-5 text-center">
  <div class="mt-1 relative rounded-md cols-span-1 shadow-sm">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    </div>
    <input type="text" name="price" id="inputAir" class="focus:ring-indigo-200 mb-3 focus:border-indigo-300 block w-full pl-7 pr-12 sm:text-sm border-white bg-gray-700 rounded-md" placeholder="0.00" aria-describedby="price-currency">
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm" id="price-currency">%</span>
    </div>
    
  </div>
  <p class="mt-2 text-sm bg-red-100 py-2 mb-2 hidden text-red-800" id="errorAir">Tidak dapat mengisi air diatas 90% </p>   


  <button type="button" onClick="setAir()" class="block mx-auto mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-black bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">Atur Sisa Air</button>

  
  <span class="relative z-0 mb-4 inline-flex shadow-sm rounded-md text-center">
  <button onClick="airOn()" id="airOn" type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md  bg-blue-400 text-sm font-medium text-gray-900 hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Nyalakan Keran</button>
<button onClick="airOff()" id="airOff" type="button" class="-ml-px relative inline-flex items-center px-4 py-2 rounded-r-md   bg-black text-sm font-medium text-white hover:bg-gray-800 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Matikan Keran</button>
</span>
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
    <span class="inline-flex mt-3 statusPemanas items-center px-2.5 py-0.5 rounded-md text-sm  bg-red-100 text-red-700 font-bold"> Off </span>
    <h3 class="mt-3 text-2xl">Temperatur Air: <span class="font-bold suhu">21</span>°C</h3>
  </div>
  <label for="price" class="block mt-3 text-sm font-bold text-white">Simulasikan Pemanasan Air</label>
  <label for="price" class="block text-sm mb-2 font-medium text-white">Masukkan angka temperatur celcius</label>
  <div class="px-5">
  <div class="mt-1 relative rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    </div>
    <input type="text" name="price" id="inputSuhu" class="focus:ring-indigo-200 mb-3 focus:border-indigo-300 block w-full pl-7 pr-12 sm:text-sm border-white bg-gray-700 rounded-md" placeholder="0.00" aria-describedby="price-currency">
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm" id="price-currency">°C</span>
    </div>

  </div>
  <p class="mt-2 text-sm hidden bg-red-100 py-2 mb-2 none text-red-800" id="errorSuhu">Tidak dapat memanaskan air diatas 41°C </p>

  <button type="button" onClick="setSuhu()" class="block mx-auto mb-3 items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-black bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Atur Temperatur Air</button>
  <button onClick="pemanasOn()" id="pemanasOn" type="button" class=" relative inline-flex items-center px-4 py-2 rounded-l-md  bg-red-400 text-sm font-medium text-gray-900 hover:bg-red-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500  focus:border-indigo-500">Nyalakan Pemanas</button><button onClick="pemanasOff()" id="pemanasOff" type="button" class="-ml-px relative inline-flex items-center px-4 py-2 rounded-r-md   bg-black text-sm font-medium text-white hover:bg-gray-800 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Matikan Pemanas</button>
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
  if(tabName == "manual"){
    document.getElementById("otomatis2").style.display = "none"
    console.log("manual")
  }else if(tabName == "otomatis"){
    document.getElementById("otomatis2").style.display = "block"
    console.log("block")
  }
}
</script>


<script>
  var airActive = "bg-blue-400 text-sm font-medium text-gray-900 hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
var airInactive = "bg-black text-sm font-medium text-white hover:bg-gray-800 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
var pemanasActive =  "bg-red-400 text-sm font-medium text-gray-900 hover:bg-red-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500  focus:border-indigo-500"
var pemanasInactive = "bg-black text-sm font-medium text-white hover:bg-gray-800 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
airOff()
document.getElementById("pemanasOff").className = document.getElementById("pemanasOff").className.replace(pemanasInactive,pemanasActive)
  document.getElementById("pemanasOn").className = document.getElementById("pemanasOn").className.replace(pemanasActive,pemanasInactive)
var sisaAir = 25
  var suhu = 20
  document.getElementsByClassName("sisaAir")[1].innerHTML = sisaAir;
  document.getElementsByClassName("sisaAir")[0].innerHTML = sisaAir;
  document.getElementsByClassName("suhu")[1].innerHTML = suhu;
  document.getElementsByClassName("suhu")[0].innerHTML = suhu;
  var running;
  var running2;


function airOn(){
  if(sisaAir<90){
  document.getElementsByClassName("statusAir")[1].innerHTML = "On";
  document.getElementsByClassName("statusAir")[0].innerHTML = "On";
  document.getElementById("airOff").className = document.getElementById("airOff").className.replace(airActive,airInactive)
  document.getElementById("airOn").className = document.getElementById("airOn").className.replace(airInactive,airActive)
  running = window.setInterval(function () {
  if(sisaAir<90){  
  sisaAir = sisaAir + 0.5;
  document.getElementsByClassName("sisaAir")[1].innerHTML = sisaAir;
  document.getElementsByClassName("sisaAir")[0].innerHTML = sisaAir;
  }else{
    airOff()
  }
  }, 3000);
}
}


function pemanasOn(){
  if(suhu<41){
  document.getElementsByClassName("statusPemanas")[1].innerHTML = "On";
  document.getElementsByClassName("statusPemanas")[0].innerHTML = "On";
  document.getElementById("pemanasOff").className = document.getElementById("pemanasOff").className.replace(pemanasActive,pemanasInactive)
  document.getElementById("pemanasOn").className = document.getElementById("pemanasOn").className.replace(pemanasInactive,pemanasActive)
  running2 = window.setInterval(function () {
  if(suhu<41){  
  suhu = suhu + 0.5;
  document.getElementsByClassName("suhu")[1].innerHTML = suhu;
  document.getElementsByClassName("suhu")[0].innerHTML = suhu;
  }else{
    pemanasOff()
  }
  }, 3000);
}
}

function pemanasOff(){
  if(suhu>19){
  document.getElementById("pemanasOff").className = document.getElementById("pemanasOff").className.replace(pemanasInactive,pemanasActive)
  document.getElementById("pemanasOn").className = document.getElementById("pemanasOn").className.replace(pemanasActive,pemanasInactive)
  window.clearInterval(running2)
  document.getElementsByClassName("statusPemanas")[1].innerHTML = "Off";
  document.getElementsByClassName("statusPemanas")[0].innerHTML = "Off";
  }
}

function setSuhu(){
  if(parseInt(document.getElementById("inputSuhu").value) <41){
  suhu = parseInt(document.getElementById("inputSuhu").value)
  document.getElementsByClassName("suhu")[1].innerHTML = suhu;
  document.getElementById("errorSuhu").className = document.getElementById("errorAir").className.replace("good","hidden")
  document.getElementsByClassName("suhu")[0].innerHTML = suhu;
  if(suhu>20){
    pemanasOff()
  }else if(suhu<=41){
    pemanasOn()
  }
}else{
  document.getElementById("errorSuhu").className = document.getElementById("errorAir").className.replace("hidden","good")
    console.log("harusnya muncul")
  }
}


function airOff(){
  document.getElementById("airOn").className = document.getElementById("airOn").className.replace(airActive,airInactive)
  document.getElementById("airOff").className = document.getElementById("airOff").className.replace(airInactive,airActive)
  if(sisaAir>10){
  window.clearInterval(running)
  window.clearInterval(running)
  window.clearInterval(running)
  document.getElementsByClassName("statusAir")[1].innerHTML = "Off";
  document.getElementsByClassName("statusAir")[0].innerHTML = "Off";
  }
}

function setAir(){
 
  if(parseInt(document.getElementById("inputAir").value) <91){
    sisaAir = parseInt(document.getElementById("inputAir").value)
    document.getElementById("errorAir").className = document.getElementById("errorAir").className.replace("good","hidden")
    document.getElementsByClassName("sisaAir")[1].innerHTML = sisaAir;
  document.getElementsByClassName("sisaAir")[0].innerHTML = sisaAir;
  if(sisaAir<90){
    airOn()
  }else if(sisaAir>90){
    airOff()
  }
  }else{
    document.getElementById("errorAir").className = document.getElementById("errorAir").className.replace("hidden","good")
    console.log("harusnya muncul")
  }
}


function detectAll(){
  if(sisaAir<90){
    airOn()
  }else if(sisaAir>90){
    airOff()
  }

  if(suhu<41){
    pemanasOn()
  }else if(suhu>41){
    pemanasOff()
  }
}

  </script>
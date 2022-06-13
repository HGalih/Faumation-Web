<x-sidebar>
    <x-slot:heading>Dasbor</x-slot>
    <x-slot:subheading>Pantau riwayat pemakaianmu.</x-slot>
    <x-slot:content>
    <div class="text-right">Pilih Tanggal
    <select id="options" onChange="setData(this.value)" class="ml-2 rounded-xl bg-transparent border border-white text-white">
    <option value=2>Hari Ini</option>
    <option value=1>Kemarin</option>
    </select></div>
    <div class="bg-gray-700 text-center shadow overflow-hidden mt-3 sm:rounded-lg p-11">
        <h1 class="text-center font-bold text-white">Sisa Air Setiap 3 Menit (%)</h1>
        <p class="text-left font-medium">Sisa air (%)</p>
    <canvas id="myChart" width="400" height="200"></canvas>
    <p class="text-right font-medium">Jam</p>
    </div>
    <div class="bg-gray-700 text-center shadow overflow-hidden mt-3 sm:rounded-lg p-11">
    <h1 class="text-center font-bold text-white">Temperatur Air Setiap 3 Menit (°C)</h1>
    <p class="text-left font-medium">Temperatur air (°C)</p>
    <canvas id="suhuChart" width="400" height="200"></canvas>
    <p class="text-right font-medium">Jam</p>
    </div>
    </x-slot>
</x-sidebar>

<script>
$("#options").on("change", function(){
    var val = $(this).val();
    // save to local
    if(window.localStorage){
        window.localStorage.setItem("#options-val", val);
    }
});

if(window.localStorage){
    var item = window.localStorage.getItem("#options-val");
    if(item) $("#options").val(item);
}

</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var data = [40, 45, 25, 21, 90,75,10];
    var dataSuhu = [22, 20, 11, 9, 38,34,2];
</script>
<script>


const ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: data,
            backgroundColor: [
                'rgba(96, 165, 250, 1)'
            ],
            borderColor: [
                'rgba(96, 165, 250, 1)',
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
                labels: {
                    fontColor: "blue",
                    fontSize: 18
                }
            },
        scales: {
            y: {
                min: 0, 
                max: 100,
                stepSize: 20,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 20, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                grid: {
  color: "#B0B0B0"
},
                ticks: { 
                    color: 'white', }
            }
            
            
        },
    }
});

</script>


<script>

const cxx = document.getElementById('suhuChart').getContext('2d');
var suhuChart = new Chart(cxx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: dataSuhu,
            backgroundColor: [
                'rgba(248, 113, 113, 1)'
            ],
            borderColor: [
                'rgba(248, 113, 113, 1)'
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
      labels: {
         fontColor: 'white'
      }},
        scales: {
            y: {
                min: 0, 
                max: 40,
                stepSize: 10,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 10, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                ticks: { 
                    color: 'white', },
                    grid: {
  color: "#B0B0B0"
}
            }
        }
    }
});
</script>


<script>
    function setData(date){
        if(date == 1){
            data = [10,25,36,42,56,70,76];
            myChart.destroy()
            myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: data,
            backgroundColor: [
                'rgba(96, 165, 250, 1)'
            ],
            borderColor: [
                'rgba(96, 165, 250, 1)',
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
                labels: {
                    fontColor: "blue",
                    fontSize: 18
                }
            },
        scales: {
            y: {
                min: 0, 
                max: 100,
                stepSize: 20,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 20, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                grid: {
  color: "#B0B0B0"
},
                ticks: { 
                    color: 'white', }
            }
            
            
        },
    }
});
        

dataSuhu = [15,25,28,34,15,29,21];
suhuChart.destroy();
suhuChart = new Chart(cxx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: dataSuhu,
            backgroundColor: [
                'rgba(248, 113, 113, 1)'
            ],
            borderColor: [
                'rgba(248, 113, 113, 1)'
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
      labels: {
         fontColor: 'white'
      }},
        scales: {
            y: {
                min: 0, 
                max: 40,
                stepSize: 10,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 10, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                ticks: { 
                    color: 'white', },
                    grid: {
  color: "#B0B0B0"
}
            }
        }
    }
});
}else{

    dataSuhu = [22, 20, 11, 9, 38,34,2];
suhuChart.destroy();
suhuChart = new Chart(cxx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: dataSuhu,
            backgroundColor: [
                'rgba(248, 113, 113, 1)'
            ],
            borderColor: [
                'rgba(248, 113, 113, 1)'
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
      labels: {
         fontColor: 'white'
      }},
        scales: {
            y: {
                min: 0, 
                max: 40,
                stepSize: 10,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 10, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                ticks: { 
                    color: 'white', },
                    grid: {
  color: "#B0B0B0"
}
            }
        }
    }
});

            data = [40, 45, 25, 21, 90,75,10];
            myChart.destroy()
            myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: data,
            backgroundColor: [
                'rgba(96, 165, 250, 1)'
            ],
            borderColor: [
                'rgba(96, 165, 250, 1)',
        
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
                labels: {
                    fontColor: "blue",
                    fontSize: 18
                }
            },
        scales: {
            y: {
                min: 0, 
                max: 100,
                stepSize: 20,
                ticks: { 
                    color: 'white', 
                    beginAtZero: true,
                    stepSize: 20, },
                    grid: {
  color: "#B0B0B0"
}
            },
            x: {
                grid: {
  color: "#B0B0B0"
},
                ticks: { 
                    color: 'white', }
            }
            
            
        },
    }
});
        }
    }


</script>

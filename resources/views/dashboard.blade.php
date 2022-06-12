<x-sidebar>
    <x-slot:heading>Dasbor</x-slot>
    <x-slot:subheading>Pantau riwayat pemakaianmu.</x-slot>
    <x-slot:content>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: [40, 45, 25, 21, 90,75,10],
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
const suhuChart = new Chart(cxx, {
    type: 'bar',
    data: {
        labels: ['12.00', '12.03', '12.06', '12.09', '12.12', '12.15','12.18'],
        datasets: [{
            label: '',
            data: [22, 20, 11, 9, 38,34,2],
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
                    stepSize: 20, },
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

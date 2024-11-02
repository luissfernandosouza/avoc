<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Cards para métricas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-blue-500 text-white p-4 rounded-lg shadow-lg">
                        <h5 class="text-lg font-semibold">Motoristas</h5>
                        <p class="text-2xl">{{ $data['drivers'] ?? 45 }}</p>
                    </div>
                    <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
                        <h5 class="text-lg font-semibold">Caminhões</h5>
                        <p class="text-2xl">{{ $data['trucks'] ?? 25 }}</p>
                    </div>
                    <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-lg">
                        <h5 class="text-lg font-semibold">Cargas</h5>
                        <p class="text-2xl">{{ $data['loads'] ?? 60 }}</p>
                    </div>
                </div>

                <!-- Gráfico com dados de Motoristas, Caminhões, Cargas e Viagens -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg mb-6">
                    <h5 class="text-lg font-semibold mb-4">Dados Mensais</h5>
                    <canvas id="dataChart" width="400" height="200"></canvas>
                </div>

                <!-- Botão para Cargas em Andamento -->


            </div>
        </div>
    </div>

    <!-- Script para o gráfico Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('dataChart').getContext('2d');
        const dataChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Motoristas Cadastrados',
                        data: [10, 15, 12, 14, 20, 18, 25, 22, 30, 28, 35, 40],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Caminhões Cadastrados',
                        data: [5, 10, 8, 9, 14, 13, 20, 18, 25, 23, 27, 32],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Cargas Cadastradas',
                        data: [7, 12, 10, 13, 17, 16, 22, 21, 26, 25, 31, 37],
                        borderColor: 'rgba(255, 206, 86, 1)',
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Viagens em Andamento',
                        data: [2, 5, 3, 7, 10, 9, 12, 11, 15, 13, 18, 20],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>

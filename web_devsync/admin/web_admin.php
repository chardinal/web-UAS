<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="web_admin_styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>DevSync Admin</h2>
        <ul>
            <li><a href="web_admin.php">Dashboard</a></li>
            <li><a href="tabel_pemesanan.php">Tabel Pemesanan</a></li> 
            <li><a href="pesanan.php">Pesanan</a></li>
            <li><a href="pendapatan.php">Pendapatan</a></li>
            <li><a href="#">Charts</a></li>
            <li><a href="#">Tables</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="navbar">
            <input type="text" placeholder="Search for..." />
            <div class="profile">
                <span>Admin</span>
                <img src="profile.jpg" alt="Profile">
            </div>
        </div>
        <div class="dashboard">
            <div class="card">
                <h3>Earnings (Monthly)</h3>
                <p>$40,000</p>
            </div>
            <div class="card">
                <h3>Earnings (Annual)</h3>
                <p>$215,000</p>
            </div>
            <div class="card">
                <h3>Tasks</h3>
                <p>50%</p>
            </div>
            <div class="card">
                <h3>Pending Requests</h3>
                <p>18</p>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <h3>Jumlah Pesanan per Kategori</h3>
                <canvas id="ordersChart"></canvas>
            </div>
            <div class="chart">
                <h3>Penghasilan per Kategori</h3>
                <canvas id="categoryChart"></canvas>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Panggil API untuk mendapatkan data dari PHP
        fetch('pendapatan.php')
            .then(response => response.json())
            .then(data => {
                const { categories, ordersData, earningsData } = data;

                const ordersChartCtx = document.getElementById("ordersChart").getContext("2d");
                const categoryChartCtx = document.getElementById("categoryChart").getContext("2d");

                // Grafik jumlah pesanan per kategori
                new Chart(ordersChartCtx, {
                    type: 'bar',
                    data: {
                        labels: categories,
                        datasets: [{
                            label: 'Jumlah Pesanan',
                            data: ordersData,
                            backgroundColor: 'rgba(54, 162, 235, 0.7)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Jumlah Pesanan per Kategori'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Grafik penghasilan per kategori
                new Chart(categoryChartCtx, {
                    type: 'pie',
                    data: {
                        labels: categories,
                        datasets: [{
                            label: 'Penghasilan',
                            data: earningsData,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                                'rgba(75, 192, 192, 0.7)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Penghasilan per Kategori'
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>
</html>


<!DOCTYPE HTML>
<html>
    <head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <title>Grafik inceleme - ChartJS</title>
        <script src="Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
        </style>
		
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                            label: 'ürünler'
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>

<?php
$veritabanı= mysqli_connect("localhost", "root", "", "ozellikler");
$urun_ad= mysqli_query($veritabanı, "SELECT Tur_Ad FROM turler");
$turler = mysqli_query($veritabanı, "SELECT Recetesiz FROM urunler");
?>
<html>
    <head>
	<meta charset="UTF-8"/>
        <title>Grafik inceleme </title>
        <script src="Chart.bundle.js"></script>
 
        <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($urun_ad)) { echo '"' . $b['Tur_Ad'] . '",';}?>],
                    datasets: [{
                            label: 'Receteli Toplam Satış',
                            data: [<?php while ($p = mysqli_fetch_array($turler)) { echo '"' . $p['Recetesiz'] . '",';}?>],
                        
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>
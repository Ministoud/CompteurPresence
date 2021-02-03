<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <link href="../css/bootstrap.min.dark.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/Chart.min.css">
        <link rel="stylesheet" href="../css/custom.css">
    </head>
    <body>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
            <!-- TODO: Dynamic generation of cards -->
            <div class="col mb-3">
                <div class="card h-100 m-3">
                    <div class="card-header text-center"><h5>N501</h5></div>
                    <div class="card-body p-0">
                        <!-- <canvas id="myChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- <script src="../js/Chart.bundle.min.js"></script>
    <script>
        canvas = document.getElementById('myChart').getContext("2d");
        gradient = canvas.createLinearGradient(0, 0, 0, 250);
        gradient.addColorStop(0, '#20aff7');
        gradient.addColorStop(1, '#282828');

        chart = new Chart(canvas, {
            type: 'line',
            data: {
                datasets: [{
                    label: 'Présence en N501',
                    data: [{
                        x: Date.parse('2021-02-01T08:00:00'),
                        y: 1,
                    }, {
                        x: Date.parse('2021-02-01T08:30:00'),
                        y: 120,
                    }, {
                        x: Date.parse('2021-02-01T09:00:00'),
                        y: 50,
                    }, {
                        x: Date.parse('2021-02-01T09:30:00'),
                        y: 0,
                    }],
                    backgroundColor: gradient,
                    borderColor: '#2290c7',
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        ticks: {
                            source: 'data',
                        },
                        gridLines: {
                            display: false,
                        },
                        time: {
                            unit: 'minute',
                            displayFormats: {
                                minute: 'H:mm'
                            },
                        },
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                            color: '#5e5e5e'
                        },
                    }],
                },
                legend: {
                    display: false,
                },
                elements: {
                    point: {
                        borderWidth: 2,
                        borderColor: '#236ba6',
                        backgroundColor: '#236ba6',
                    },
                },
            },
        });
    </script> -->
</html>
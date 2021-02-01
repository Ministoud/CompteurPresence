<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/Chart.min.css">
    </head>
    <body>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-4">
            <!-- TODO: Dynamic generation of cards -->
            <div class="col">
                <div class="card h-100 m-4">
                <canvas id="myChart"></canvas></div>
                <div class="card-body"></div>
            </div>
        </div>
    </body>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Chart.min.js"></script>
    <script>
        canvas = document.getElementById('myChart').getContext("2d");
        gradient = canvas.createLinearGradient(0, 0, 0, 500);
        gradient.addColorStop(0, '#20aff7');
        gradient.addColorStop(1, '#2047f7');

        chart = new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['', '', '', ''],
                datasets: [{
                    label: 'Taux de présence de la N501',
                    // data: [1, 12, 10, 8],
                    data: [{
                        x: Date.parse('2021-02-01T08:00:00'),
                        y: 1,
                    }, {
                        x: Date.parse('2021-02-01T08:30:00'),
                        y: 12,
                    }, {
                        x: Date.parse('2021-02-01T09:00:00'),
                        y: 10,
                    }, {
                        x: Date.parse('2021-02-01T09:30:00'),
                        y: 8,
                    }],
                    backgroundColor: gradient,
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            displayFormats: {
                                'millisecond': 'MMM DD',
                                'second': 'MMM DD',
                                'minute': 'MMM DD',
                                'hour': 'MMM DD',
                                'day': 'MMM DD',
                                'week': 'MMM DD',
                                'month': 'MMM DD',
                                'quarter': 'MMM DD',
                                'year': 'MMM DD',
                            }
                        }
                    }]
                },
            }
        });
        console.log(new Date());
    </script>
</html>
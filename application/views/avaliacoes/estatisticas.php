<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
    <div><canvas id="myChart"></canvas></div>

      <script>
        Chart.defaults.global.legend.labels.usePointStyle = true;
        var ctx = document.getElementById('myChart').getContext('2d');

        const data = {
        labels: ['Red','Blue','Yellow'],

        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
            ],
            hoverOffset: 30
        }]
        };

        const config = {
        type: 'pie',
        data: data,
        };

        var myChart = new Chart(ctx, config);


      </script>
</body>
</html>


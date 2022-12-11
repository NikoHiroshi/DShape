<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/estilo.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <title>DShape</title>
  </head>
  <body>

    @yield('container')

    <!-- Importando os javascripts -->
    <script src="{{ asset('/js/chart.min.js')}}"></script> <!-- Chart.js (Graficos) -->
    <script src="{{ asset('/js/popper.min.js') }}"></script> <!-- Popper -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script> <!-- Bootstrap -->

    <!--Grafiqueira braba-->
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ['Oct/22', 'Oct/23', 'Oct/24', 'Oct/25', 'Oct/26', 'Oct/27'],
              datasets: [{
                  label: 'Braço direito 💪',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
      </script>
  </body>
</html>

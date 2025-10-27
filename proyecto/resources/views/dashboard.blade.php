  <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema de Salud - Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
  <header>
    <div class="title"> SISTEMA DE GESTIÓN DE FICHAS MÉDICAS</div>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Dashboard</a>
      <a href="#">Reportes</a>
      <a href="#">Fichas Médicas</a>
      <a href="#">Dr. Carlos Mendoza</a>
    </nav>
  </header>

  <main>
    <h2>Dashboard</h2>

    <div class="cards">
      <div class="card blue">
        <h3>Consultas Hoy</h3>
        <p>24</p>
      </div>
      <div class="card green">
        <h3>Pacientes Activos</h3>
        <p>1,247</p>
      </div>
      <div class="card orange">
        <h3>Hospitalizaciones</h3>
        <p>18</p>
      </div>
      <div class="card red">
        <h3>Cirugías Programadas</h3>
        <p>7</p>
      </div>
    </div>

    <div class="charts">
      <div class="chart-box">
        <h3>Consultas por Mes</h3>
        <canvas id="consultasChart"></canvas>
      </div>
      <div class="chart-box">
        <h3>Diagnósticos Frecuentes</h3>
        <canvas id="diagnosticosChart"></canvas>
      </div>
    </div>
  </main>

  <script>
    const ctx1 = document.getElementById('consultasChart').getContext('2d');
    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
        datasets: [{
          label: 'Consultas',
          data: [50, 80, 70, 100, 120, 110],
          backgroundColor: '#1c687f',
          borderRadius: 6,
        }]
      },
      options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });

    const ctx2 = document.getElementById('diagnosticosChart').getContext('2d');
    new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['Hipertensión', 'Diabetes', 'Gripe', 'Gastritis', 'Otros'],
        datasets: [{
          label: '%',
          data: [34, 26, 20, 14, 6],
          backgroundColor: '#1c687f',
          borderRadius: 6,
        }]
      },
      options: {
        indexAxis: 'y',
        plugins: { legend: { display: false } },
        scales: { x: { beginAtZero: true, max: 40 } }
      }
    });
  </script>
</body>
</html>

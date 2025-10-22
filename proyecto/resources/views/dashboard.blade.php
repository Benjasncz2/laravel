<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
  <ul class="navbar-nav me-auto">
    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Fichas Médicas</a></li>
  </ul>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="#">Dr. Andres</a></li>
  </ul>
</div>
      </div>
    </nav>
  </div>


<div class="row g-3 mb-4">
      <div class="col-12 col-md-3">
        <div class="card text-center py-3">
          <h6 class="text-muted">Consultas Hoy</h6>
          <h3 class="text-primary fw-bold">24</h3>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card text-center py-3">
          <h6 class="text-muted">Pacientes Activos</h6>
          <h3 class="text-success fw-bold">1,247</h3>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card text-center py-3">
          <h6 class="text-muted">Hospitalizaciones</h6>
          <h3 class="text-warning fw-bold">18</h3>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card text-center py-3">
          <h6 class="text-muted">Cirugías Programadas</h6>
          <h3 class="text-danger fw-bold">7</h3>
        </div>
      </div>
    </div>


  <div class="container my-4">
    <div class="row g-3">
      <div class="col-12 col-lg-8">
        <div class="chart-box">
          <h6 class="fw-semibold mb-3">consultas por mes</h6>
          <canvas id="consultasChart"></canvas>
        </div>
      </div>
      <div class="col-12 col-lg-4">   
        <div class="chart-box">
          <h6 class="fw-semibold mb-3">diagnósticos frecuentes</h6>
          <canvas id="diagnosticosChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  
    const ctx1 = document.getElementById('consultasChart').getContext('2d');
    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        datasets: [{
          data: [50, 80, 70, 100, 120, 110, 59, 140, 100, 75, 90, 40],
          backgroundColor: '#1c687f',
          borderRadius: 6
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
          data: [34, 26, 20, 14, 6],
          backgroundColor: '#1c687f',
          borderRadius: 6
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

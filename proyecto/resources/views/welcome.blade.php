  <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema de Salud - Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
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
    <div class="card_titulo">
        <h3>Bienvenido/a Dr. Carlos Mendoza</h3>
        <p class="subtitulo">Hoy es lunes, 27 de octubre</p>
    </div>
    <div class="cards">
        <div class="card">
            <h4>Dashboard</h4>
            <p class="subtitulo">Metricas y estadisticas generales</p>
            <button> class = "boton ver mas"Ver más</button>
        </div>
        <div class="card">
            <h4>Resportes</h4>
            <p class="subtitulo">Informes detallados y exportación</p>
        </div>
        <div class="card">
            <h4>Fichas Médicas</h4>
            <p class="subtitulo">Gestión de pacientes</p>
        </div>
        <div class="card">
            <h4>Nueva Ficha Médica</h4>
            <p class="subtitulo">Registrar nuevos pacientes</p>
            
        </div>
    </div>
  </main>
</body>
</html>

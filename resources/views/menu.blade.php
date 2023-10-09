<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>clientes</title>
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>
<ul class="navbar">
        <li class="nav-item"><a href="inicio">Inicio</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Citas</a>
            <div class="dropdown-content">
                <a href="citas">Nuevo Citas</a>
                <a href="{{ route('consulta') }}">Consulta Citas</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Medicos</a>
            <div class="dropdown-content">
                <a href="medico">Nuevo medico</a>
                <a href="{{ route('consultam') }}">Consulta de medicos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Consulta</a>
            <div class="dropdown-content">
                <a href="consultas">Consulta</a>
                <a href="{{ route('consultaa') }}">Consulta de consultas</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="dropbtn">Pacientes</a>
            <div class="dropdown-content">
                <a href="pacientes">Paciente</a>
                <a href="{{ route('consultap') }}">Consulta de pacientes</a>
            </div>
        </li>
    </ul>

@yield("content") 
</body>
</html>



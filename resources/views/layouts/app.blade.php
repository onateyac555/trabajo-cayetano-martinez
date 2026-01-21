<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Informática - [TU NOMBRE]</title>
    <style>
        body { font-family: sans-serif; margin: 0; display: flex; flex-direction: column; min-height: 100vh; }
        header { background: #2c3e50; color: white; padding: 20px; text-align: center; }
        nav { background: #ecf0f1; padding: 10px; text-align: center; border-bottom: 2px solid #bdc3c7; }
        .btn { padding: 10px 15px; margin: 5px; border: none; background: #3498db; color: white; cursor: pointer; text-decoration: none; border-radius: 4px; display: inline-block; }
        .btn:hover { background: #2980b9; }
        main { flex: 1; padding: 20px; }
        footer { background: #2c3e50; color: white; text-align: center; padding: 10px; margin-top: auto; }
    </style>
</head>
<body>
    <header>
        <h1>Gestión de Productos Informáticos</h1>
    </header>

    <nav>
        <a href="/" class="btn">OPCIÓN 1: Inicio</a>
        <a href="/productos/crear" class="btn">OPCIÓN 2: Entrada Datos</a>
        <a href="/productos" class="btn">OPCIÓN 3: Listado General</a>
        <a href="/productos/filtrar" class="btn">OPCIÓN 4: Listado Filtrado</a>
        <a href="/productos/gestion" class="btn">OPCIÓN 5: Modificar/Borrar</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Alumno: [TU NOMBRE AQUÍ] - Proyecto Final Laravel</p>
    </footer>
</body>
</html>

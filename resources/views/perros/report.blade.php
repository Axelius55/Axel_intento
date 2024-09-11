<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Perros</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Reporte de Perros</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perros as $perro)
                <tr>
                    <td>{{ $perro->nombre }}</td>
                    <td>{{ $perro->raza }}</td>
                    <td>{{ $perro->edad }} años</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

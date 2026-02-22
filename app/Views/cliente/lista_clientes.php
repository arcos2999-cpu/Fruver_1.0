<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document Title</title>
</head>
<body>
    Gestión de clientes 
    <?php print_r($clientes); ?>
    <div class ="contenedor">
      <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>Numero</th>
                <th>RFC</th>
                <th>Tipo cliente</th>
                <th>Telefono</th>
                <th>Tipo credito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Calle</td>
                <td>Colonia</td>
                <td>Numero</td>
                <td>RFC</td>
                <td>Tipo de cliente</td>
                <td>Telefono</td>
                <td>Tipo de credito</td>
                <td>Editar/Borrar</td>
            </tr>
        </tbody>
      </table>

    </div>
</body>
</html>
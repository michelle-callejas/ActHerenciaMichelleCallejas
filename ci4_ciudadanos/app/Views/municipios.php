<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Municipios</h1>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Código de departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $municipio):
            ?>
            <tr>
                <td> <?php echo $municipio['cod_muni']; ?></td>
                <td> <?php echo $municipio['nombre_municipio']; ?></td>
                <td><?php echo $municipio['cod_depto']; ?></td>
   
            </tr>
            <?php
            endforeach 
            ?>
        </tbody>
    </table>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


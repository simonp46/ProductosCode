<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>Productos</h1>
                <form action="<?php echo base_url().'/guardar' ?>" method="POST">
                    <input type="number" class="form-control mb-3" name="identificacion" id="identificacion" placeholder="Codigo del producto">
                    <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Nombre del producto">
                    <input type="text" class="form-control mb-3" name="description" id="description" placeholder="descripcion del producto">
                    <input type="number" class="form-control mb-3" name="price" id="price" placeholder="Precio del producto">
                    <button type="submit" class="btn btn-primary" value="Agregar" name="Agregar">agregar</button>

                </form>
            </div>
            <div class="col-md-9">
                <h2 class="text-center">Listado de Productos</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Nombre Producto</td>
                            <td>Descripcion</td>
                            <td>Valor Unidad</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->IdProducto ?></td>
                            <td><?php echo $key->Nombre ?></td>
                            <td><?php echo $key->Descripcion ?></td>
                            <td><?php echo $key->VlrUnidad ?></td>
                            <td><button href="" type="submit"class="btn btn-primary" value="Editar" name="Editar">Editar</button></td>
                            <td><a href="<?php echo base_url().'/Eliminar/'.$key->IdProducto ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    </div>

    <footer>
        <p>Desarrollador: Simon Padron</p>
        <p>Telefono: pregunte no más</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
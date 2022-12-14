<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="J Jesus Urbina">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/SSPCERA/public/img/ms-icon-310x310.png">
        <title>IPH</title>
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <main>
            <div class="container py-4 text-center">
                <h2>Buscar IPH</h2>

                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <form action="" method="post">
                            <label for="campo">Folio IPH :</label>
                            <input autocomplete="off" type="text" name="campo" id="campo">
                        </form>
                    </div>
                </div>

                <div class="row py-4">
                    <div class="col">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>IPH</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Sexo</th>
                                <th></th>
                                <th></th>
                            </thead>

                            <!-- El id del cuerpo de la tabla. -->
                            <tbody id="content">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <script>
            getData() /* Llamando a la funci??n getData() */

            /* Escuchar un evento keyup en el campo de entrada y luego llamar a la funci??n getData. */
            document.getElementById("campo").addEventListener("keyup", getData)

            function getData() { /* Peticion AJAX */
                let input = document.getElementById("campo").value
                let content = document.getElementById("content")
                let url = "loadiph.php"
                let formaData = new FormData()
                formaData.append('campo', input)

                fetch(url, {
                        method: "POST",
                        body: formaData
                    }).then(response => response.json())
                    .then(data => {
                        content.innerHTML = data
                    }).catch(err => console.log(err))
            }
        </script>

        <!-- Bootstrap core JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
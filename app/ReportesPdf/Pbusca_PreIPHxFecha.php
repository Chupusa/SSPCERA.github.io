<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Consulta Pre-IPH</title>
        <link rel="shortcut icon" href="/SSPCERA/public/img/SSP_CERAFAVICON.ico">
        <script src="/SSPCERA/public/js/jquery.js"></script>
        <script src="/SSPCERA/public/js/myjava.js"></script>
        <script src="/SSPCERA/public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/SSPCERA/public/bootstrap/js/bootstrap.js"></script>
        <link href="/SSPCERA/public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/SSPCERA/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/SSPCERA/public/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link href="/SSPCERA/public/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="/SSPCERA/public/css/estilo.css" rel="stylesheet">
    </head>

    <style>
        body
        {
            font-family: "Times New Roman", Georgia, Serif;
            font-size: 35px;
            //Fondo de Pantalla Inicio de Sesion
            width: 10%;
            height: 10%;
            background-image: url('./img/Logo730x730-2.png');
            background-size: 40% 70%;
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-position: center center;
        }

        .contenedor
        {
            height: 40vh;
            margin: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <body>
        <header>Reporte SSP CERA Pre IPH</header>
        <section>
            <table border="0" align="center">
                <tr>
                    <td width="335"><input type="text" placeholder="Busca por Nombre" id="bs-nom"/></td>
                    <td><input type="date" id="bd-desde"/></td>
                    <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="date" id="bd-hasta"/></td>
                    <td width="200"><a target="_blank" href="javascript:void(0)" onclick="reportePDF();" class="btn btn-danger">Exportar Busqueda a PDF</a></td>
                </tr>
            </table>
        </section>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-11">
    <title>Formulario de Entrega</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .center-text {
            text-align: center;
        }

        .small-text {
            font-size: 12px;
        }

        .special-text {
            text-align: center;
            font-size: 12px;
        }

        .normal-text {
            font-size: 13px;
        }

        table {
            width: 100%;
        }

        table td {
            width: 50%;
        }
        p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="modal-body">
            <div class="logo">
                <img src="{{ public_path('images/images.png') }}" alt="" width="150" height="50">
            </div>
            <div class="center-text">
                <h2 class="normal-text" style="margin-top: 0;">FORMULARIO DE ENTREGA</h2>
                <h3 class="normal-text">AGENCIA BOLIVIANA DE CORREOS</h3>
            </div>
            <table>
                <tr>
                    <td>
                        <p class="barcode">{!! DNS1D::getBarcodeHTML($package->CODIGO, 'C39', 1, 25) !!}</p>
                        <p class="small-text"><strong>Código Rastreo:</strong> {{ $package->CODIGO }}</p>
                        <p class="small-text"><strong>Destinatario:</strong> {{ $package->DESTINATARIO }}</p>
                        <p class="small-text"><strong>Ciudad:</strong> {{ $package->CUIDAD }}</p>
                        <p class="small-text"><strong>Origen:</strong> {{ $package->PAIS }}</p>
                        <p class="small-text"><strong>Ventanilla:</strong> {{ $package->VENTANILLA }}</p>
                    </td>
                    <td>
                        <p class="small-text"><strong>Usuario:</strong> {{ auth()->user()->name }}</p>
                        <p class="small-text"><strong>Tipo:</strong> {{ $package->TIPO }}</p>
                        <p class="small-text"><strong>Peso:</strong> {{ $package->PESO }} gr.</p>
                        <p class="small-text"><strong>Precio:</strong> {{ $package->PRECIO }} Bs.</p>
                        <p class="small-text"><strong>Entrega:</strong> {{ $package->ESTADO }}</p>
                        <p class="small-text"><strong>Aduana:</strong> {{ $package->ADUANA }}</p>
                        <p class="small-text"><strong>Fecha Entrega:</strong> {{ now()->format('Y-m-d H:i') }}</p>
                    </td>
                </tr>
            </table>
            <br>
            <table>
                <td>
                    <p class="special-text">__________________________</p>
                    <p class="special-text">RECIBIDO POR</p>
                    <p class="special-text">{{ $package->DESTINATARIO }}</p>
                </td>
                <td>
                    <p class="special-text">__________________________ </p>
                    <p class="special-text">ENTREGADO POR</p>
                    <p class="special-text">{{ auth()->user()->name }}</p>
                </td>
            </table>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Constancia de Alumno Regular</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 1in;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg border border-gray-300">
        <h1 class="text-3xl font-bold text-center mb-6">CONSTANCIA DE ALUMNO/A REGULAR</h1>

        <p class="text-lg mb-4">ESCUELA Nº: {{ $nombre_colegio }}</p>
        <p class="text-lg mb-6">FECHA: {{ $fecha }}</p>

        <p class="text-lg leading-relaxed mb-6">
            La Dirección del establecimiento deja constancia que <strong>{{ $nombre }} {{ $apellido }}</strong> es alumno/a regular de nuestro establecimiento y actualmente se encuentra cursando <strong>{{ $curso }}</strong>. Se extiende a pedido del interesado para ser presentada ante el establecimiento <strong>{{ $colegio_destino }}</strong>.
        </p>

        <div class="mt-8 border-t border-gray-300 pt-4">
            <p class="text-lg font-semibold mb-1">Sello establecimiento</p>
            <p class="text-lg font-semibold">Firma y sello de la autoridad</p>
        </div>

        <p class="mt-6 text-sm text-gray-600">*El presente certificado tiene una validez de 90 días a partir de la fecha de su emisión.</p>
    </div>
</body>
</html>

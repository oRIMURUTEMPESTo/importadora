<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Importa Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Importa Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Importa jQuery para AJAX -->
    <style>
        /* Añade una animación para la transición de opacidad */
        #content {
            min-height: 500px; /* Define una altura mínima para evitar cambios bruscos */
            transition: opacity 0.3s ease-in-out;
            padding: 20px; /* Añade un padding para mantener consistencia */
        }

        /* Estilo del loader */
        #loader {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: gray;
        }

        /* Deshabilitar scroll mientras se realiza la carga */
        body.loading {
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased relative"> <!-- Añadido 'relative' para posicionar el loader -->
    <!-- Loader -->
    <div id="loader">Cargando...</div>

    <!-- Contenedor principal -->
    <div class="flex h-screen">

        <!-- Barra lateral de navegación -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-6">
                <img src="logo.png" alt="Logo TechStore" class="h-12 mb-4">
                <h1 class="text-xl font-semibold">TechStore</h1>
            </div>
            <nav class="flex-grow mt-10">
                <ul>
                    <li class="mb-6">
                        <a href="{{ route('categorias.index') }}" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-categorias">
                            <i class="fas fa-boxes-stacked fa-lg mr-3"></i>
                            CATEGORÍAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-productos">
                            <i class="fas fa-laptop fa-lg mr-3"></i>
                            PRODUCTOS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-ventas">
                            <i class="fas fa-shopping-cart fa-lg mr-3"></i>
                            VENTAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-compras">
                            <i class="fas fa-money-check-alt fa-lg mr-3"></i>
                            COMPRAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-prestamos">
                            <i class="fas fa-exchange-alt fa-lg mr-3"></i>
                            PRÉSTAMOS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2" id="link-historial">
                            <i class="fas fa-history fa-lg mr-3"></i>
                            HISTORIAL
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-grow">
            <!-- Encabezado -->
            <header class="flex items-center justify-between bg-white shadow p-4">
                <h2 class="text-lg font-semibold" id="header-title">Categorías | Listado</h2>
                <div class="flex items-center">
                    <input type="text" placeholder="Buscar..." class="border p-2 rounded mr-2">
                    <button class="bg-gray-800 text-white p-2 rounded flex items-center">
                        <i class="fas fa-search mr-2"></i> Buscar
                    </button>
                    <button class="bg-gray-800 text-white p-2 rounded flex items-center ml-2">
                        <i class="fas fa-plus mr-2"></i> Agregar
                    </button>
                    <i class="fas fa-user-circle fa-2x ml-4"></i>
                </div>
            </header>

            <!-- Contenido dinámico que cambiará con AJAX -->
            <div id="content" class="p-6">
                <!-- Contenido inicial -->
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4">Descripción</th>
                            <th class="py-2 px-4">Imagen</th>
                            <th class="py-2 px-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="py-2 px-4">COMPUTADORAS</td>
                            <td class="py-2 px-4">
                                <img src="imagen-ejemplo.png" alt="Imagen de ejemplo" class="h-10 w-10">
                            </td>
                            <td class="py-2 px-4 flex">
                                <button class="bg-blue-500 text-white p-2 rounded mr-2 flex items-center">
                                    <i class="fas fa-edit mr-2"></i> Editar
                                </button>
                                <button class="bg-red-500 text-white p-2 rounded flex items-center">
                                    <i class="fas fa-trash-alt mr-2"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                        <!-- Agrega más filas según las categorías -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        $(document).ready(function() {
            // Función para manejar la navegación y el resaltado
            function navigate(url, title) {
                // Mostrar el loader y deshabilitar scroll
                $('#loader').show();
                $('body').addClass('loading');

                // Ocultar el contenido actual con un fade-out
                $('#content').fadeOut(200, function() {
                    // Realizar la solicitud AJAX
                    $.get(url, function(data) {
                        // Reemplazar el contenido del div con el contenido recibido
                        $('#content').html(data);
                        $('#header-title').text(title); // Cambiar el título del encabezado

                        // Resaltar el enlace activo
                        $('aside a').removeClass('text-white bg-gray-700').addClass('text-gray-300 hover:text-white');
                        $('aside i').removeClass('text-white').addClass('text-gray-300');

                        // Resaltar el enlace seleccionado
                        $('aside a').each(function() {
                            if ($(this).text().trim() === title.split('|')[0].trim()) {
                                $(this).removeClass('text-gray-300 hover:text-white').addClass('text-white bg-gray-700');
                                $(this).find('i').removeClass('text-gray-300').addClass('text-white');
                            }
                        });

                        // Mostrar el contenido nuevo con un fade-in y habilitar scroll
                        $('#content').fadeIn(200);
                        $('#loader').hide();
                        $('body').removeClass('loading');
                    });
                });
            }

            // Enlaces de la barra lateral
            $('#link-categorias').on('click', function(event) {
                event.preventDefault();
                navigate('{{ route('categorias.index') }}', 'Categorías | Listado');
            });

            $('#link-productos').on('click', function(event) {
                event.preventDefault();
                navigate('#', 'Productos | Listado');
            });

            $('#link-ventas').on('click', function(event) {
                event.preventDefault();
                navigate('#', 'Ventas | Listado');
            });

            $('#link-compras').on('click', function(event) {
                event.preventDefault();
                navigate('#', 'Compras | Listado');
            });

            $('#link-prestamos').on('click', function(event) {
                event.preventDefault();
                navigate('#', 'Préstamos | Listado');
            });

            $('#link-historial').on('click', function(event) {
                event.preventDefault();
                navigate('#', 'Historial | Listado');
            });
        });
    </script>
</body>
</html>

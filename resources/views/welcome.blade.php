<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Importa Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Importa Font Awesome -->
</head>
<body class="bg-gray-100 font-sans antialiased">
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
                        <a href="{{ route('categorias.index') }}" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-boxes-stacked fa-lg mr-3"></i> <!-- Ícono de Categorías -->
                            CATEGORÍAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-laptop fa-lg mr-3"></i> <!-- Ícono de Productos -->
                            PRODUCTOS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-shopping-cart fa-lg mr-3"></i> <!-- Ícono de Ventas -->
                            VENTAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-money-check-alt fa-lg mr-3"></i> <!-- Ícono de Compras -->
                            COMPRAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-exchange-alt fa-lg mr-3"></i> <!-- Ícono de Préstamos -->
                            PRESTAMOS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <i class="fas fa-history fa-lg mr-3"></i> <!-- Ícono de Historial -->
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
                <h2 class="text-lg font-semibold">Categorías | Listado</h2>
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

            <!-- Tabla de Categorías -->
            <div class="p-6">
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
</body>
</html>

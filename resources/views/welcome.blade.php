<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Importa Tailwind CSS -->
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
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <img src="icon-category.png" alt="Categorías" class="h-6 w-6 mr-3">
                            CATEGORÍAS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <img src="icon-productos.png" alt="Productos" class="h-6 w-6 mr-3">
                            PRODUCTOS
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-300 hover:text-white px-4 py-2">
                            <img src="icon-ventas.png" alt="Ventas" class="h-6 w-6 mr-3">
                            VENTAS
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
                    <button class="bg-gray-800 text-white p-2 rounded">Agregar</button>
                    <img src="icon-user.png" alt="Perfil" class="ml-4 h-8 w-8 rounded-full">
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
                                    <img src="icon-edit.png" alt="Editar" class="h-4 w-4 mr-1"> Editar
                                </button>
                                <button class="bg-red-500 text-white p-2 rounded flex items-center">
                                    <img src="icon-delete.png" alt="Eliminar" class="h-4 w-4 mr-1"> Eliminar
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

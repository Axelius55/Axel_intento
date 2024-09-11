<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-4xl text-gray-900 dark:text-white mb-4">Agregar un Nuevo Perro</h1>
        <a type="button" href="{{ route('perros.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Regresar</a>

        <!-- Formulario para agregar un nuevo perro -->
        <form action="{{ route('perros.store') }}" method="POST">
            @csrf <!-- Token de protección contra ataques CSRF -->

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Perro</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Introduce el nombre del perro" required>
            </div>

            <div class="mb-4">
                <label for="raza" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Raza del Perro</label>
                <input type="text" name="raza" id="raza" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Introduce la raza del perro" required>
            </div>

            <div class="mb-4">
                <label for="edad" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Edad del Perro</label>
                <input type="number" name="edad" id="edad" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Introduce la edad del perro" required>
            </div>

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Agregar Perro</button>
        </form>
    </div>
</x-app-layout>

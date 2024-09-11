<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-4xl text-gray-900 dark:text-white mb-4">Editar Perro</h1>
        <a type="button" href="{{ route('perros.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Regresar</a>

        <!-- Formulario para editar perro -->
        <form action="{{ route('perros.update', $perro->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Necesario para que el formulario use PUT -->

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Perro</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $perro->nombre }}" required>
            </div>

            <div class="mb-4">
                <label for="raza" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Raza del Perro</label>
                <input type="text" name="raza" id="raza" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $perro->raza }}" required>
            </div>

            <div class="mb-4">
                <label for="edad" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Edad del Perro</label>
                <input type="number" name="edad" id="edad" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $perro->edad }}" required>
            </div>

            <!-- Botón para actualizar -->
            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar Perro</button>
        </form>
    </div>
</x-app-layout>
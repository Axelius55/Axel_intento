<x-app-layout>
    <div class="mb-2">
        <!-- Aquí podrías agregar un enlace a otra vista en el futuro -->
    </div>

    <p class="text-4xl text-gray-900 dark:text-white mb-4">Listado de Perros</p>

    <!-- Botón para crear un nuevo perro (opcional, si tienes implementada esa funcionalidad) -->
    <a href="{{ route('perros.create') }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear</a>
    <a href="{{ route('perros.reporte')}}"> <button type="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Descargar Tabla</button></a>
    
    <div class="container mt-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Raza</th>
                        <th scope="col" class="px-6 py-3">Edad</th>
                        <th scope="col" class="px-6 py-3 text-right">Acciones</th> <!-- Nueva columna para los botones -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($perros as $perro)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $perro->nombre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $perro->raza }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $perro->edad }} años
                        </td>
                        <td class="px-6 py-4 text-right">
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('perros.edit', ['perro' => $perro->id]) }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>

                            <!-- Botón "Ver" al lado del botón "Editar" -->
                            <a href="{{ route('perros.show', ['perro' => $perro->id]) }}" class="ml-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación (si tienes paginación implementada) -->
            <div class="mt-4">
                {{ $perros->links() }}
            </div>
        </div>
    </div>
    <br>
</x-app-layout>

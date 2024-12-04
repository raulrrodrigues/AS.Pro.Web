<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Animais:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($animais as $animal)
                        <div>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                Animal: {{ $animal->nome }}
                            </h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                Especie: {{ $animal->especie }}
                            </span>
                            <!-- Contêiner flex para os botões -->
                            <div class="flex space-x-2 mt-4">
                                <!-- Botão Editar -->
                                <a href="{{ url('animal/'.$animal->id.'/edit') }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Editar
                                </a>
                                <!-- Formulário para Excluir -->
                                <form action="{{ url('animal/'.$animal->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Excluir animal
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
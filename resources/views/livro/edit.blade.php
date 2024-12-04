<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edite seu Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('livro/'. $livro->id) }}" method="POST">
                        <!-- "." serve para concatenar -->
                        @csrf
                        @METHOD('put')
                            <input class="bg-slate-400	background-color: rgb(148 163 184);"
                                value="{{ $livro->titulo }}" type="text" name="titulo" placeholder="titulo" required>
                            <input class="bg-slate-400	background-color: rgb(148 163 184);"
                                value="{{ $livro->autor }}" name="autor" placeholder="autor" required></input>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                type="submit">Editar pessoa</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
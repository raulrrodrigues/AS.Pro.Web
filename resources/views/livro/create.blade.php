<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Escolha seu livro:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="max-w-sm mx-auto" action="{{ url('livro') }}" method="POST">
                        @csrf
                        <input class="bg-slate-400 mb-4 p-2 w-full rounded-lg" type="text" name="titulo"
                            placeholder="Titulo" required>
                        <input class="bg-slate-400 mb-4 p-2 w-full rounded-lg" name="autor" placeholder="Autor"
                            required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full"
                            type="submit">Cadastrar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
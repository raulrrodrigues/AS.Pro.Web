<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Compre seu Carro:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="max-w-sm mx-auto" action="{{ url('carro') }}" method="POST">
                        @csrf

                        <div class="mb-5">
                            <label for="modelo"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
                            <input type="text" name="modelo" id="modelo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Modelo" required>
                        </div>

                        <div class="mb-5">
                            <label for="ano"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano</label>
                            <input type="text" name="ano" id="ano"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ano" required>
                        </div>
                        <!-- Campo de Seleção para a Pessoa (Motorista) -->
                        <div class="mb-5">
                            <label for="pessoa_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pessoa</label>
                            <select name="pessoa_id" id="pessoa_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="">Selecione a Pessoa</option>
                                @foreach($pessoas as $pessoa)
                                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Botão para Submeter o Formulário -->
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full">Comprar
                            Carro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
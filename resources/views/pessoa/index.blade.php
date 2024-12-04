<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Motoristas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach($pessoas as $pessoa)
                            <div
                                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex flex-col items-center pb-10"
                                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                        src="https://media.istockphoto.com/id/1068265584/pt/vetorial/driver.jpg?s=612x612&w=0&k=20&c=Uw1L3mYH9f3W9WDJz_YV1_Pt2rSwurdGF0ljrjghAwE="
                                        alt="motorista imagem" />
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                        {{ $pessoa->nome }}</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $pessoa->idade }}
                                        anos</span>
                                    <div class="flex mt-4 md:mt-6">
                                        <a href="{{ url('pessoa/'.$pessoa->id.'/edit') }}"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>
                                        <form action="{{ url('pessoa/'.$pessoa->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
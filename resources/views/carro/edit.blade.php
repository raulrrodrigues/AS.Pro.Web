<div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 dark:text-gray-100">
                   <form class="max-w-sm mx-auto" action="{{ url('carro/'. $carro->id) }}"
                       method="POST">
                       <!-- "." serve para concatenar -->
                       @csrf
                       @METHOD('put')
                           <div class="mb-5">
                               <label for="nome"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                               <input type="text" name="nome" id="nome" value="{{ $carro->nome }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                           </div>
                           <div class="mb-5">
                               <label for="modelo"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
                               <input type="text" name="modelo" id="modelo" value="{{ $carro->modelo }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                           </div>
                           <div class="mb-5">
                               <label for="modelo"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ano</label>
                               <input type="text" name="ano" id="ano" value="{{ $carro->ano }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                           </div>
                           <button type="submit"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Arrumar
                               Carro</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
   </x-app-layout>
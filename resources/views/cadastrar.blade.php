<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- Token de formulário -->
                        <!-- tipoItem -->
                        <div>
                            <x-input-label for="tipoItem" :value="__('Tipo Item:')" />
                            <x-text-input id="tipoItem" class="block mt-1 w-full" type="text" name="tipoItem" :value="old('tipoItem')" maxlength="100" required autofocus autocomplete="tipoItem" />
                            <x-input-error :messages="$errors->get('tipoItem')" class="mt-2" />
                        </div>

                        <!-- Preco -->
                        <div class="mt-4">
                            <x-input-label for="preco" :value="__('Preço:')" />
                            <x-text-input id="preco" class="block mt-1 w-full" type="number" name="preco" step="any" :value="old('preco')" required autocomplete="preco" />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>

                        <!-- Material -->
                        <div class="mt-4">
                            <x-input-label for="material" :value="__('Material:')" />
                            <x-text-input id="material" class="block mt-1 w-full" type="text" name="material" :value="old('material')" maxlength="100" required autocomplete="material" />
                            <x-input-error :messages="$errors->get('material')" class="mt-2" />
                        </div>

                        <!-- Cor -->
                        <div class="mt-4">
                            <x-input-label for="cor" :value="__('Cor:')" />
                            <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" maxlength="100" required autocomplete="cor" />
                            <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                        </div>

                        <!-- Tamanho -->
                        <div class="mt-4">
                            <x-input-label for="tamanho" :value="__('Tamanho:')" />
                            <x-input-label for="pequeno"/>
                            <input id="pequeno" type="radio" name="tamanho" value="Pequeno" required @if(old('tamanho') == 'Pequeno') checked @endif/> Pequeno
                            <x-input-label for="medio"/>
                            <input id="medio" type="radio" name="tamanho" value="Medio" required @if(old('tamanho') == 'Medio') checked @endif/> Médio
                            <x-input-label for="grande"/>
                            <input id="grande" type="radio" name="tamanho" value="Grande" required @if(old('tamanho') == 'Grande') checked @endif/> Grande
                            <x-input-error :messages="$errors->get('tamanho')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Deseja cadastarr esse acessório?') }}
                            </a>

                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
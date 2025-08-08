<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mt-2">
            <x-input-label for="name" :value="__('Nama Produk')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
    <x-input-label for="stok" :value="__('Stok')" />
    <x-text-input id="stok" class="block mt-1 w-full" type="number" name="stok" :value="old('stok')" required autofocus />
    <x-input-error :messages="$errors->get('stok')" class="mt-2" />
</div>

         <div>
    <x-input-label for="harga" :value="__('Harga')" />
    <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" required autofocus />
    <x-input-error :messages="$errors->get('harga')" class="mt-2" />
</div>
<div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('product.index') }}">
                {{ __('Kembali') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Simpan') }}
            </x-primary-button>
        </div>
        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

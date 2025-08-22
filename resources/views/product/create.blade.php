<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
             @csrf

            {{-- Form untuk menambahkan produk baru --}}
            <div>     
                <x-input-label for="name" :value="__('Nama Produk')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="description" :value="__('Deskripsi')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
         
            <div>
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="stock" :value="__('Stock')" />
                <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" :value="old('stock')" required autofocus />
                <x-input-error :messages="$errors->get('stock')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="image" :value="__('Gambar Produk')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
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
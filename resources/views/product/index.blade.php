<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
    <table class="w-full text-gray-500">
        <thead class="bg -gray-50">
            <tr>
            <td class="p-3">NO</td>
            <td class="p-3">Gambar</td>
            <td class="p-3">NAMA PRODUK</td>
            <td class="p-3">DESKRIPSI</td>
            <td class="p-3">HARGA</td>
            <td class="p-3">STOK</td>
            <td class="p-3">AKSI</td>


        <a href="/product/create">
            <x-primary-button>Tambah Produk</x-primary-button>

    </a>
    </tr>
    </thead>
    <tbody>

    @foreach ($products as $p)
    
    <tr class="border-b">
        <td class="p-3">{{ $loop->iteration }}</td>
        <td class="p-3">
            @if ($p->image)
                <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->name }}" class="w-16 h-16 object-cover">
            @else
                <span class="text-gray-500">No Image</span>
            @endif
        <td class="p-3">{{ $p->name }}</td>
        <td class="p-3">{{ $p->description }}</td>  
        <td class="p-3">{{ $p->price }}</td>      
        <td class="p-3">{{ $p->stock }}</td>
        <td class="p-3">
            <a href="{{ route('product.edit', $p->id) }}">
                <x-secondary-button>Edit</x-secondary-button>
                </a>
            <form action="{{ route('product.destroy', $p->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <x-danger-button class="ms-2">Hapus</x-danger-button>
                </form>
    </td>
</tr>
   
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</x-app-layout>


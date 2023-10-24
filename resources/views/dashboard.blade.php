<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
            <div class="py-2 text-gray-900">
                <button class="px-4 py-3 rounded-md bg-blue-300" onclick="window.location.href='/create'">Create New Product</button>
            </div>
            @foreach($posts as $post)
            <div class="flex my-5 items-center">
            <div class="w-4/5">
                <h1 class="text-3xl font-bold">{{ $post->nama }}</h1>
                <p class="font-light text-lg">Jenis {{ $post->kategori->nama }}</p>
                <p class="font-light text-lg">Kondisi {{ $post->kondisi->nama }}</p>
                <p class="font-light text-lg">Jumlah: {{ $post->jumlah }}</p>
                <p class="font-normal text-base">Deskripsi: {{ $post->deskripsi }}</p>
                <p class="font-normal text-base">Kecacatan: {{ $post->kecacatan }}</p>
                <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid rounded-start"
                        alt="{{ $post->nama }} Image" style="max-height: 300px;">
            </div>

        </div>
        <div class="ml-auto">
            <a class="text-blue-500 underline mr-2" href="{{ route('dashboard-edit', ['product' => $post->id]) }}">Edit</a>
            <form action="{{ route('post-delete', ['product' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 underline" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>           
        </div>
        @endforeach
        </div>
    </div>
</x-app-layout>

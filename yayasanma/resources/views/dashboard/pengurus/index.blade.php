@extends('layouts.base')

@section('title')
    Kelola pengurus
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold">Daftar Pengurus</h2>

                    @if (session('success'))
                        <div class="relative mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <a href="{{ route('pengurus.create') }}"
                        class="mb-4 rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Tambah Pengurus</a>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Umur</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Jenis Kelamin</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Foto</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($admins as $admin)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $admin->nama }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $admin->umur }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $admin->jenis_kelamin }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <img src="{{ asset('storage/' . $admin->foto_pengurus) }}" alt="Foto Pengurus"
                                            class="h-12 w-12 rounded-full">
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-left text-sm font-medium">
                                        <a href="{{ route('pengurus.show', $admin->id) }}"
                                            class="mr-2 text-indigo-600 hover:text-indigo-900">Detail</a>
                                        <a href="{{ route('pengurus.edit', $admin->id) }}"
                                            class="mr-2 text-yellow-600 hover:text-yellow-900">Edit</a>
                                        <form action="{{ route('pengurus.destroy', $admin->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
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
@endsection

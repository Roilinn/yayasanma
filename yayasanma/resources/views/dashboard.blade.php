@extends('layouts.base')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Dashboard</h1>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">
            <!-- Card Anak -->
            <a href="{{ route('anak.index') }}"
                class="flex items-center justify-center overflow-hidden rounded-lg bg-white p-6 shadow-md transition duration-300 hover:bg-gray-100">
                <div class="flex items-center justify-center rounded-full bg-indigo-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <!-- Icon Anak -->
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">Anak</h2>
                    <p class="text-gray-600">Total Data: {{ $totalAnak }}</p>
                </div>
            </a>

            <!-- Card Pengurus -->
            <a href="{{ route('pengurus.index') }}"
                class="flex items-center justify-center overflow-hidden rounded-lg bg-white p-6 shadow-md transition duration-300 hover:bg-gray-100">
                <div class="flex items-center justify-center rounded-full bg-blue-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20"
                        fill="currentColor">
                        <!-- Icon Pengurus -->
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">Pengurus</h2>
                    <p class="text-gray-600">Total Data: {{ $totalPengurus }}</p>
                </div>
            </a>

            <!-- Card Galeri -->
            <a href="{{ route('galeri.index') }}"
                class="flex items-center justify-center overflow-hidden rounded-lg bg-white p-6 shadow-md transition duration-300 hover:bg-gray-100">
                <div class="flex items-center justify-center rounded-full bg-green-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20"
                        fill="currentColor">
                        <!-- Icon Galeri -->
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">Galeri</h2>
                    <p class="text-gray-600">Total Data: {{ $totalGaleri }}</p>
                </div>
            </a>

            <!-- Card Berita -->
            <a href="{{ route('berita.index') }}"
                class="flex items-center justify-center overflow-hidden rounded-lg bg-white p-6 shadow-md transition duration-300 hover:bg-gray-100">
                <div class="flex items-center justify-center rounded-full bg-yellow-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20"
                        fill="currentColor">
                        <!-- Icon Berita -->
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">Berita</h2>
                    <p class="text-gray-600">Total Data: {{ $totalBerita }}</p>
                </div>
            </a>
        </div>
    </div>
@endsection

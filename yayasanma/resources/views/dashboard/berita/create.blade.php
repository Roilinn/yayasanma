@extends('layouts.base')

@section('title')
    Buat Berita Baru
@endsection

@section('content')
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Buat Berita Baru</h1>

        <!-- Form untuk membuat berita baru -->
        <form id="form-create-news" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data"
            class="mx-auto max-w-3xl rounded-lg bg-white p-6 shadow-md">
            @csrf

            <!-- Input Judul -->
            <div class="mb-4">
                <label for="judul" class="mb-1 block text-sm font-semibold text-gray-600">Judul</label>
                <input type="text" name="judul" id="judul"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="Judul Berita" required>
            </div>

            <!-- Cover Image -->
            <div class="mb-4">
                <label for="cover" class="mb-1 block text-sm font-semibold text-gray-600">Cover</label>
                <input type="file" name="cover" id="cover"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    accept="image/*" required>
            </div>

            <!-- Rich Text Editor for Content -->
            <div class="mb-4">
                <label for="content" class="mb-1 block text-sm font-semibold text-gray-600">Isi Berita</label>
                <div id="editor" style="height: 300px;"></div>
                <!-- Hilangkan atribut 'required' dari textarea -->
                <textarea name="content" id="content" class="hidden"></textarea>
            </div>


            <button type="submit"
                class="rounded-md bg-indigo-500 px-4 py-2 text-white transition duration-300 hover:bg-indigo-600"
                onclick="handleFormSubmit()">Buat Berita</button>
        </form>
    </div>
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        function handleFormSubmit() {
            var content = document.querySelector('textarea[name=content]');
            // Simpan konten yang dimasukkan di editor ke dalam textarea
            content.value = quill.root.innerHTML;
            // Submit form
            document.querySelector('form').submit();
        }
    </script>
@endsection

@extends('layouts.base')

@section('title')
    Detail Berita
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <div class="rounded-lg bg-white p-6 shadow-md">
            <h1 class="mb-4 text-2xl font-bold">{{ $news->judul }}</h1>

            <img src="{{ asset('storage/' . $news->cover) }}" alt="{{ $news->judul }}"
                class="mb-4 aspect-[4/1] w-full rounded-lg object-cover object-center">


            <div class="content" style="white-space: pre-line;">
                {!! $news->content !!}
            </div>
        </div>
    </div>
@endsection

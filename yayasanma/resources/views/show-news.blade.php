{{-- 
@extends('layouts.app')
<title>News</title>
@section('top')
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">{{ $news->judul }}</h2>
                    <p class="text-center">Diposting pada: {{ $news->created_at }}</p>
                    <h5 class="text-center">{{ $news->nama_admin }}</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('storage/' . $news->cover) }}" class="img-fluid mb-3" alt="Cover Image">
                    <p>{{ $news->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.user')
<title>News</title>
@section('top')
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">{{ $news->judul }}</h2>
                    <p class="text-center">Diposting pada: {{ $news->created_at }}</p>
                    @if($news->user)
                        <h5 class="text-center">{{ $news->user->name }}</h5>
                    @else
                        <h5 class="text-center">Nama Admin Tidak Tersedia</h5>
                    @endif
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('storage/' . $news->cover) }}" class="img-fluid mb-3" alt="Cover Image">
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

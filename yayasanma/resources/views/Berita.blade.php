{{-- @extends('layouts.user')
<title>News</title>
@section('top')
@endsection
@section('content')

<h3 class="text-start text fw-bolder" style="margin-top: 20px; margin-left: 50px; color: #994D7E;">Berita</h3>
<div class="fluid-container text-center" style="margin-top: 45px;">
  <div class="row justify-content-center mt-4">
    @foreach ($news as $berita)
    <div class="col-md-4 berita d-flex align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $berita->cover) }}" class="img-fluid" alt="Logo">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $berita->created_at }}</h6>
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">{!! implode(' ', array_slice(str_word_count(strip_tags($berita->content), 1), 0, 10)) !!}</p>
                @if(str_word_count(strip_tags($berita->content)) > 2)
                    <a href="{{ route('berita.show', $berita->id) }}" class="card-link">Baca Selengkapnya...</a>
                @endif
            </div>
        </div>
    </div>
@endforeach

  </div>
</div>

@endsection --}}
@extends('layouts.user')
<title>News</title>
@section('top')
@endsection
@section('content')

<h3 class="text-start text fw-bolder" style="margin-top: 20px; margin-left: 50px; color: #994D7E;">Berita</h3>
<div class="fluid-container text-center" style="margin-top: 45px;">
  <div class="row justify-content-center mt-4">
    @foreach ($news as $berita)
    <div class="col-md-4 berita d-flex align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $berita->cover) }}" class="img-fluid" alt="Logo">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $berita->created_at }}</h6>
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">{!! implode(' ', array_slice(str_word_count(strip_tags($berita->content), 1), 0, 10)) !!}</p>
                @if(str_word_count(strip_tags($berita->content)) > 2)
                    <a href="{{ route('berita.show', $berita->id) }}" class="card-link">Baca Selengkapnya...</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>

@endsection

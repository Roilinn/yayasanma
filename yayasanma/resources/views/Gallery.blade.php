@extends('layouts.user')
<title>Gallery</title>
@section('top')
@endsection

@section('content')
<h3 class="text-start text fw-bolder" style="margin-top: 20px; margin-left: 50px; color: #994D7E;">Gallery</h3>
<div class="fluid-container" style="margin-left: 35px;">
    <div class="row justify-content-center mt-4">
        @foreach($galleries as $item)
            <div class="col-md-4 gal mb-4">
                <img src="{{ asset('storage/' . $item['foto_kegiatan']) }}" class="img-fluid" alt="Gallery Image" style="width: 300px; height: 150px; border-radius:25px;">
            </div>
            @if($loop->iteration % 3 == 0)
                </div><div class="row justify-content-center mt-4">
            @endif
        @endforeach
    </div>
</div>
@endsection

@section('footer')
@endsection

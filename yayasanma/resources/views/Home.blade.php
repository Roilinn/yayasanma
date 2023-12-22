
@extends('layouts.user')
<title>Home</title>
@section('top')
@endsection
@section('content')
     <div style="position: relative; width: 100%; height: 450px;">
        <div style="position: absolute; top: 25%; left: 5%; text-align: left; color: white; font-size: 24px; font-weight: bold;">
            <h5>Yayasan Maktabul Aitam</h5>
           <h1 style="fw-bold"> Mimpi-mimpi besar <br> lahir dari kasih sayang <br> yang tak terbatas</h1>
        </div>
       <img src="{{ asset('/picture/foto6.jpg') }}" alt="Logo" class="img-fluid" style="width: 100%; height: 450px; object-fit: cover;  filter: contrast(-100%) brightness(-76%);">
    </div>
  
    <h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E; ">Visi Misi</h2>
    <hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">
    <div class="fluid-container" style="margin-top:45px;">
    <div style="position: relative; width: 100%; height: auto;">
        <div style="position: absolute; text-align: left;">
    <div class="col" style="background-color: rgba(244, 244, 244, 0.76); padding: 20px; margin-left:100px; margin-top:5%; margin-right:50px;  ">
    <div class="row">
        <div class="col">
            <div class="hijau" >
                <h2 style="margin-left: 50px">Visi</h2>   
            </div>
            <div class="text1 ">
            <h5 class="text">MEWUJUDKAN KESEJAHTERAAN SOSIAL BAGI SELURUH ANAK YATIM PIATU DAN DHUAFA MENJADI TANGGUH, MANDIRI DAN 
                BERKARAKTER BAIK</h5>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="hijau" >
                <h2 style="margin-left: 50px; ">Misi</h2>   
            </div>
            <div class="text1 text">
            <h5 class="text">MEMBANGUN AKHLAKUL KARIMAH
                MEMBANGUN ANAK-ANAK YANG BERILMU BERWAWASAN LUAS MENCINTAI ÄGAMA
                DAN NEGARA
                MENYELENGGARAKAN PENDIDIKAN YANG BERORIENTASI BERMUTU DAN BERMORAL</h5>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="hijau">
                <h2 style="margin-left: 30px">Tujuan</h2>   
            </div>
            <div class="text1 text">
            <h5 >TURUT SERTA MENDUKUNG PEMERINTAH DALAM MENGENTASKAN PUTUS SEKOLAH
                DAN MENDUKUNG WAJIB BELAJAR 12 TAHUN
                MEMBANTU PEMERINTAH DALAM UPAYA MENINGKATKAN TARAF KESEJAHTRAAN
                SOSIAL MASYARAKAT KHUSUSNYA PENANGANAN YATIM PIATU DAN DHUAFA</h5>
        </div>
        </div>
    </div>
    </div>
    </div>
    <img src="{{ asset('/picture/foto8.jpg') }}" alt="Logo" class="img-fluid" style="width: 100%; height: 600px; object-fit: cover;">
    </div>
</div>  




<div class="fluid-container text-center bg">
    <h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E;">Gallery</h2>
    <hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">
    <div id="image-carousel" class="carousel slide sml"  style="margin-top: 45px;" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($galleries as $index => $item)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('storage/' . $item['foto_kegiatan']) }}" alt="Logo" class="img-fluid" style="object-fit: cover; border-radius:25px; width: 500px; height: 250px;">
                    </div>
                    @if(count($galleries) > 1) 
                        @php
                            $nextIndex = ($index + 1) % count($galleries);
                        @endphp
                        <div class="col">
                            <img src="{{ asset('storage/' . $galleries[$nextIndex]['foto_kegiatan']) }}" alt="Logo" class="img-fluid" style="object-fit: cover; border-radius:25px; width: 500px; height: 250px;">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
        
        </div>
        
        <!-- Indicators -->
        <ol class="carousel-indicators" id="carousel-indicators">
            <li data-target="#image-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel" data-slide-to="1"></li>
            <li data-target="#image-carousel" data-slide-to="1"></li>
        </ol>
        

        <!-- Controls -->
        <a class="carousel-control-prev button1"  href="#image-carousel" role="button"  data-slide="prev" id="carousel-control">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <!--  <span class="sr-only">Previous</span> -->
        </a>
        <a class="carousel-control-next button1" href="#image-carousel" role="button" data-slide="next" id="carousel-control">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <!--  <span class="sr-only">Next</span> -->
        </a>
    </div>
</div>
 <div class="fluid-container" >
 <h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E;" >Berita</h2>
 <hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">
 @foreach ($news as $article)
 @if ($loop->last)
     <div class="row" style="margin-top: 45px;">
         <!-- Column 1 -->
         <div class="col-md-6">
             <!-- Row 1 -->
             <div class="row">
                 <div class="col text-end">
                     <p>{{ $article->judul }}</p>
                 </div>
             </div>
             <!-- Row 2 -->
             <div class="row">
                 <div class="col text-end">
                     <img src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->judul }}" class="img-fluid" style="object-fit: cover; width: 407px; height: 217px; border-radius:30px;">
                 </div>
             </div>
         </div>

         <!-- Column 2 -->
         <div class="col-md-6">
             <!-- Row 1 -->
             <div class="row">
                <div class="col" style="margin-right: 100px;">
                    <p class="text-justify">{!! strip_tags($article->content) !!}</p>
                </div>
             </div>
             <!-- Row 2 -->
             <div class="row">
                 <div class="col">
                     <a href="{{ route('news') }}" class="btn btn-success mx-auto" style="background-color: #9CC973; color: white;">Selengkapnya</a>
                 </div>
             </div>
         </div>
     </div>
 @endif
@endforeach


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @endsection
@section('footer')
@endsection

@extends('layouts.user')
<title>Profile</title>
@section('top')

@endsection
@section('content')
<div style="position: relative; width: 100%; height: 450px;">
    <div style="position: absolute; top: 40%; left: 5%; text-align: left; color: white; font-size: 24px; font-weight: bold;">
        <h3>Profile</h3>
       <h5>Yayasan Panti Asuhan Yatim Piatu dan Dhuafa Maktabul Aitam </h5>
    </div>
      <img src="{{ asset('/picture/foto7.jpg') }}" alt="Logo" class="img-fluid" style="width: 100%; height: 450px; object-fit: cover;">
</div>
<h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E;">Visi Misi</h2>
<hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">

<div class="fluid-container" style="margin-top:45px;">
    <div style="position: relative; width: 100%; height: auto;">
        <div style="position: absolute; text-align: left;">
             <div class="col" style="background-color: rgba(244, 244, 244, 0.76); padding: 20px; margin-left:100px; margin-top:5%; margin-right:50px;  ">
                 <div class="row">
                     <div class="col">
                          <div class="hijau">
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
            <div class="hijau">
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
    <img src="{{ asset('/picture/foto8.jpg') }}" alt="Logo"  style="width: 100%; height: 600px; object-fit: cover;" class="img-fluid">
    </div>
</div>

<div class="hidden-pengurus-container">
    <h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E;">Pengurus</h2>
    <hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">
    
    <div class="fluid-container text-center" style="margin-top: 30px;">
        <div class="row justify-content-center mt-4">
            @foreach($admin as $pengurus)
                <div class="col-md-4">
                    <div class="card cardpengurus" style="border: none;">
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $pengurus->foto_pengurus) }}" alt="Pengurus Photo" style="border-radius: 100%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text">{{ $pengurus->nama }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
<
     
        <h2 class="text-center text fw-bolder" style="margin-top: 145px; color: #994D7E;">Data Anak</h2>
    <hr style="width: 50px; margin: 0 auto; height: 3px; margin: 0 auto; background-color: black;">

<div class="fluid-container text-center" style="margin-top: 30px; "> 
    <div class="row justify-content-center mt-4">
        <div class="row justify-content-center mt-4">
            @foreach($child as $anak)
                <div class="col-md-4">
                    <div class="card cardanak" style="border: none;">
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $anak->foto_anak) }}" alt="anak Photo" style="border-radius: 100%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text">{{ $anak->nama }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
    </div>

    
    <div class="custom-background" style="background-color: #F4F4F4; width:auto; height: 250px; display: flex; align-items: center; margin-top:">
        <div class="content" style="margin-left: 35px;">
            <h2 class="fw-bolder" style="color: #994D7E;">Legalitas</h2>
            <h5 style="margin-top: 20px;">
                AKTA NOTARIS KASWANDA S.H NO. 1 DES 1997 <br> 
                KANWIL DINSOS TANGERANG NO. 062/062/BS/1/1998 <br> 
                KANWIL DEPSOS JAWA BARAT NO. 607/ORSOS/2 MARET 1998 <br> 
                SERTIFIKAT AKREDITASI KEMENTERIAN SOSIAL RI NO. 2440.SA-LKS.C/2020
            </h5>
        </div>
    </div>
    
    
@endsection


</div> 
@section('footer')
@endsection
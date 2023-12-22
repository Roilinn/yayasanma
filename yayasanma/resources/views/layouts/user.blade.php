
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('picture/logoYMA.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&family=Poppins:wght@500&family=Press+Start+2P&display=swap');
    head, body,footer {
        font-family: 'Poppins', sans-serif; 
    }

    h1, h2, h3, h4, h5, h6{
        font-family: 'Poppins', sans-serif; 
    }
    p{
        font-family: 'Poppins', sans-serif; 
    }

  
    .nav-link.active {
        color: #994D7E; 
    }

    @import url("https://fonts.googleapis.com/css2?family=EB+Garamond&family=Poppins:wght@500&family=Press+Start+2P&display=swap");

.text {
    font-family: "Poppins", Medium 500;
}

.hijau {
    /* Rectangle 24 */

    box-sizing: border-box;
    position: absolute;
    width: 167px;
    height: 52px;
    left: 80px;
    background: #9cc973;
    border: 1px solid #000000;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 30px;
}

.text1 {
    left: 80px;
    margin-top: 80px;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 30px;
    /* or 150% */

    color: #000000;
}

.tengah {
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
    height: 100%;
}


</style>

<body>
    
    @yield('top')
    <div class="fluid-container" style="background-color: #FFFFFF; ">
        <div class="row" style="margin-left:20px;" >
            <div class="col-md-5">
                <ul class=" nav justify-content-start">
                    <li class="nav-item">
               <img src="{{ asset('/picture/logoYMA.jpg') }}" alt="Logo" class="img-fluid" style="width: 82px; height: 74px";> 
            </li>  
                <li class="nav-item">
                <p class="fw-bolder" style="margin-left:20px; margin-top:20px; color: #994D7E">Yayasan Maktabul Aitam</p>
                </li>  
            </ul>
            </div>
            
            <div class="col-md-7">
                <ul class="nav justify-content-end" style="margin-top: 15px;">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'profiles' ? 'active' : '' }}" href="{{ route('profiles') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'gallery' ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'hubungi' ? 'active' : '' }}" href="{{ route('hubungi') }}">Contact</a>
                    </li>
                    
                </ul>
            </div>            
        </div>
     </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

@yield('footer')

<div class="fluid-container" style="margin-top: 100px;">
    <div class="row" style="background-color: #F4F4F4; height:350px;">
        <div class="col" style="margin-left: 50px; width: 50%;">
            <h5 class="fw-bolder" style="text-align: center; margin-top: 30px; color: #994D7E;">Lokasi </h5>
            <div style="position: relative; overflow: hidden; padding-top: 56.25%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1348616033606!2d106.6408546!3d-6.2459527999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e529ba659ceb%3A0xe36268b65d241b67!2sYayasan%20Panti%20Asuhan%20Yatim%20Piatu%20%26%20Dhuafa%20MAKTABUL%20AITAM!5e0!3m2!1sid!2sid!4v1700020829053!5m2!1sid!2sid" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
        <div class="col" style="width: 50%;">
        </div>

        <div class="col" style="text-align: left; width: 100%; margin-top: 40px;color: #994D7E ">
            <div class="row">
            <h5 class="fw-bolder">Contact Us </h5>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="24" height="21" rx="5" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_9_61" transform="matrix(0.00195312 0 0 0.00223214 0 -0.0714286)"/>
                        </pattern>
                        <image id="image0_9_61" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>                        
        </div>
                <div class="col" >
            <h6 style=>yayasan_maktabul_aitam</h6>
        </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.95 21C17.8667 21 15.8083 20.5457 13.775 19.637C11.7417 18.7283 9.89167 17.441 8.225 15.775C6.55833 14.1083 5.271 12.2583 4.363 10.225C3.455 8.19167 3.00067 6.13333 3 4.05C3 3.75 3.1 3.5 3.3 3.3C3.5 3.1 3.75 3 4.05 3H8.1C8.33333 3 8.54167 3.07933 8.725 3.238C8.90833 3.39667 9.01667 3.584 9.05 3.8L9.7 7.3C9.73333 7.56667 9.725 7.79167 9.675 7.975C9.625 8.15833 9.53333 8.31667 9.4 8.45L6.975 10.9C7.30833 11.5167 7.704 12.1123 8.162 12.687C8.62 13.2617 9.12433 13.816 9.675 14.35C10.1917 14.8667 10.7333 15.346 11.3 15.788C11.8667 16.23 12.4667 16.634 13.1 17L15.45 14.65C15.6 14.5 15.796 14.3873 16.038 14.312C16.28 14.2367 16.5173 14.216 16.75 14.25L20.2 14.95C20.4333 15.0167 20.625 15.1377 20.775 15.313C20.925 15.4883 21 15.684 21 15.9V19.95C21 20.25 20.9 20.5 20.7 20.7C20.5 20.9 20.25 21 19.95 21Z" fill="black"/>
                    </svg>
                     </div>
            <div class="col ">
                <h6>081219048760</h6>
            </div>
        </div>
        </div>
    </div>


    <div class="fluid-container" style="background-color: #994D7E; color: white; text-align: left;height: 64px; width:100%;">
        <h6 class="p-3"> Yayasan Maktabul Aitam </h6>
    </div>
</div>

</html>

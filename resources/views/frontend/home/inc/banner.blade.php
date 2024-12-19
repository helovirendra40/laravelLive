   <!--// Banner start \\-->
   @if ($banners->count() > 0)
   <div class="wm-main-banner">            
    <div class="wm-banner-two">
        <div class="wm-banner-two-layer">
            <span class="wm-bannertwo-transparent"></span>                   
            <div class="nit-sldier-tracking-id-box">                       
                <div class="nit-sldier-container">
                    <div class="nit-sldier-box">
                  
                        <div class="owl-carousel home-carousel owl-theme">
                            @foreach ($banners as $banner)
                            <div class="item">
                                <figure>
                                  
                                    <img src="{{ asset("uploads/banner/".($banner->image ?? "default.webp")) }}" alt="{{ $banner->title }}" class="img-fluid">
                                </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="wm-caption-two">
                    <div class="container">
                        <div class="wm-caption-two-inner">
                            <h1>Let AI Find Online Courses For You</h1>   
                            <form class="form-wrapper">
                                <input type="text" id="search" placeholder="Search for..." required>
                                <button><i class="wmicon-search"></i></button>
                            </form>                                 
                        </div>
                    </div>                           
                </div>
            </div>               
        </div>
    </div>
</div>
@endif
<!--// Banner End \\-->
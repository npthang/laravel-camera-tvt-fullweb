@extends('layout.master')
@section('metatag')
<meta name="description" content="Thiết kế website, Xây dựng ứng dụng di động, Tiếp thị trực tuyến" />
<meta name="keywords" content="Thiet ke website, Mobile app, marketing, Thiet ke web Da Nang" />
@endsection 
@section('content')
        
        <!-- Hero Slider -->
        <section id="hero-app" class="hero-fullscreen parallax" data-overlay-light="5">
            
            <div class="background-image">
                <img src="img/backgrounds/s-8.jpg" alt="img">
            </div>
            
            <div class="container">  
                <div class="row"> 
                    <div class="hero-text text-center"> 
                        <h1 class="hero-big-title" data-reveal="bottom">iWeb</h1>
                        <p class="lead mt20 mb50" data-reveal="bottom"><span>Tất cả những gì bạn cần để tạo một website tuyệt vời!</span></p>
                        <a target="_blank"  href="/dang-ky" class="btn btn-md btn-primary btn-app-store" data-reveal="bottom"><i class="ion-social-apple"></i> Đăng ký</a>
                    </div>
                </div> 
            </div>
            
        </section>
        <!-- End Hero Slider --> 
        
        <!-- About Product -->
        <section id="about" class="pt100 pb60">
            <div class="container">                      
                <div class="row">    
                <!--
                    <div class="col-md-11 mr-auto app-hero">   
                        
                        <div class="app-carousel owl-carousel owl-theme dark-pagination">
                            <div><img src="img/devices/1.png" class="mr-auto" alt="#"/></div>
                            <div><img src="img/devices/2.png" class="mr-auto" alt="#"/></div>
                            <div><img src="img/devices/3.png" class="mr-auto" alt="#"/></div>
                        </div>
                        
                    </div>
                -->
                    <div class="col-md-12 text-center pb20">   
                        <h2 data-reveal="bottom">iWeb</h2>
                        <p class="lead mt20" data-reveal="top">
Kết hợp Websites, Thương mại điện tử và Tiếp thị trực tuyến cùng một nơi.</p>
                    </div>  
                    
                    <div class="col-md-12">
                    
                        <div class="col-md-4 col-sm-6 feature-center" data-reveal="bottom">
                            <i class="icon-ecommerce-diamond size-4x color"></i>
                            <i class="icon-ecommerce-diamond back-icon"></i> 
                            <div class="feature-left-content">
                                <h4>Thiết kế website</h4>
                                <p>Website được xây dựng chuẩn SEO, tối ưu cho việc tìm kiếm. Tối ưu hiển thị trên di động, tốc độ truy cập cực nhanh, dễ dàng tùy chỉnh, hỗ trợ 24/7.</p> 
                            </div> 
                        </div>
                        <div class="col-md-4 col-sm-6 feature-center" data-reveal="bottom">
                            <i class="icon-basic-pencil-ruler-pen size-4x color"></i>
                            <i class="icon-basic-pencil-ruler-pen back-icon"></i> 
                            <div class="feature-left-content">
                                <h4>Ứng dụng di động</h4>
                                <p>Thiết kế và xây dựng ứng dụng mobile app, trong lĩnh vực Bán hàng, Quản lý, Bất động sản, Du lịch và Khách sạn.</p> 
                            </div> 
                        </div>
                        <div class="col-md-4 col-sm-6 feature-center" data-reveal="bottom">
                            <i class="icon-software-layers2 size-4x color"></i>
                            <i class="icon-software-layers2 back-icon"></i> 
                            <div class="feature-left-content">
                                <h4>Tiếp thị trực tuyến</h4>
                                <p>Dịch vụ chúng tôi cung cấp <br> SEO/SEM/AdWords & PR Online</p>  
                            </div> 
                        </div> 
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End About Product -->
        
        <!-- Video Popup -->
        <section id="elements-callouts" class="parallax pt110 pb110" data-overlay-light="8">
            <div class="background-image">
                <img src="img/backgrounds/s-2.jpg" alt="#">
            </div>
            <div class="container"> 
                <div class="row">
                    
                    <div class="col-md-12 text-center"> 
                        <h2 data-reveal="top">Tạo một website chuyên nghiệp</h2> 
                        <p class="lead mt20 mb40" data-reveal="top">Tích hợp đầy đủ tính năng, thương mại điện tử, giao hiện đáp ứng mobile, chuẩn SEO Google<br> Bạn có thể sở hữu website mà không cần kinh nghiệm.</p>
                        <a target="_blank"  href="https://www.youtube.com/watch?v=6NC_ODHu5jg" class="btn-play color mr-auto popup-video" data-reveal="bottom"></a>
                    </div> 

                </div>
            </div>
        </section>
        <!-- End Video Popup -->
        
        <!-- Screenshots -->
        <section id="overview" class="pt100 pb90">
            <div class="container">                      
                <div class="row">    

                    <div class="col-md-12 text-center pb20">   
                        <h2 data-reveal="bottom">Đã thiết kế</h2>
                        <p class="lead mt20" data-reveal="top">Các sản phẩm mới thực hiện trong hơn 400 dự án <br>đã triển khai trong và ngoài nước.</p>
                        <a target="_blank"  href="/du-an" class="btn btn-sm btn-primary">Dự án mới<i class="ion-flash"></i></a>
                    </div> 
                    
                    <div class="screenshot-slider owl-carousel owl-theme dark-pagination col-md-12" style="background: rgba(122, 119, 182, 0.16)"> 
                     @foreach($project as $da)  
                        <a target="_blank"  href="{{ URL::asset('du-an/'.$da->id.'/'.$da->name_key.'.html') }}">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                   <h4>{{ $da->name }}</h4>
                                    <p>{{ $da->category }}</p>
                                </div>
                                <div class="item-image"><img src="{{ asset('upload/projects/' . json_decode($da->image)[0]) }}" /></div>
                            </div>
                        </a>
                    @endforeach
                    </div>

                </div>
            </div>
        </section>
        <!-- End Screenshots -->

         <!-- Progress Circles -->  
        <section id="elements-circles" class="pt100 pb100" data-overlay-dark="9">
            <div class="background-image">
                <img src="img/backgrounds/s-3.jpg" alt="#">
            </div>
            <div class="container">                      
                <div class="row">
                    
                    <div class="col-md-12 text-center white">
                        <h1><strong>Cho một website hiệu quả!</strong></h1>
                        <p class="lead">Trang web họat động hiệu quả sẽ đảm bảo khả năng kết nối với mọi người <br>và phát triển thương hiệu, cũng như mang về nhiều đơn hàng cho doanh nghiệp.</p>
                    </div>
                    
                    <div class="col-md-12 white progress-circle-icon progress-circles" data-animate-on-scroll="on">
                        
                        <div class="progress-circle style-1"  data-circle-percent="68" data-circle-text="Trải nghiệm người dùng">
                            <i class="icon-software-pen"></i>
                            <!-- Change circle percent & text in attributes above -->
                            <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                        </div>
                        
                        <div class="progress-circle style-1"  data-circle-percent="86" data-circle-text="Website chạy nhanh">
                            <i class="icon-arrows-rotate-dashed"></i>
                            <!-- Change circle percent & text in attributes above -->
                            <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                        </div>
                        
                        <div class="progress-circle style-1"  data-circle-percent="78" data-circle-text="Chuẩn SEO Google">
                            <i class="icon-basic-life-buoy"></i>
                            <!-- Change circle percent & text in attributes above -->
                            <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                        </div>
                        
                        <div class="progress-circle style-1"  data-circle-percent="79" data-circle-text="Đáp ứng di động">
                            <i class="icon-software-font-kerning"></i>
                            <!-- Change circle percent & text in attributes above -->
                            <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                        </div>
                        
                    </div>
 

                </div>
            </div>
        </section>
        <!-- End Progress Circles --> 
    
        <!-- Features -->
        <section id="features" class="pt100 pb90">
            <div class="container">              
                
                <div class="row">
                    <div class="col-md-12 text-center">   
                        <h2 data-reveal="bottom">Áp dụng công nghệ!</h2>
                        <p class="lead mt20" data-reveal="top">iWeb là nền tảng cho phép chỉnh sửa và quản lý website<br> và cửa hàng từ các thiết bị di động.</p>
                    </div>
                </div>
                
                <div class="row vertical-align"> 
                    
                    <div class="col-md-4">
                        <div class="app-feature-right col-sm-6 col-md-12" data-reveal="left">
                            <i class="icon-ecommerce-bag-check color size-3x"></i>
                            <i class="icon-ecommerce-bag-check back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Thiết kế ấn tượng</h4>
                                <p>Giao diện phong phú, thay đổi lại giao diện mà không tốn bất kỳ chi phí</p>
                            </div> 
                        </div>
                        <div class="app-feature-right col-sm-6 col-md-12" data-reveal="left">
                            <i class="icon-basic-elaboration-mail-heart color size-3x"></i>
                            <i class="icon-basic-elaboration-mail-heart back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Tập trung cho sự phát triển</h4>
                                <p>Tất cả trong một nền tảng là những gì bạn cần để phát triển doanh nghiệp.</p>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <img src="img/devices/d4.jpg" class="img-responsive mr-auto" alt="#" data-reveal="bottom" />
                    </div>
                    
                    <div class="col-md-4">
                        <div class="app-feature-left col-sm-6 col-md-12" data-reveal="right">
                            <i class="icon-basic-mixer2 color size-3x"></i>
                            <i class="icon-basic-mixer2 back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Tiết kiệm 25% chi phí vận hành</h4>
                                <p>Đội ngũ IT riêng biệt, lưu trữ không giới hạn, bảo mật hàng đầu và luôn hỗ trợ.</p>
                            </div> 
                        </div>
                        <div class="app-feature-left col-sm-6 col-md-12" data-reveal="right">
                            <i class="icon-basic-alarm color size-3x"></i>
                            <i class="icon-basic-alarm back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Phát triển nhanh cùng với nền tảng Marketing</h4>
                                <p>Tích hợp công cụ marketing, tìm kiếm và mạng xã hội, giúp theo dõi sự phát triển của bạn.</p>
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Features -->
        
        <!-- Features -->
        <section id="features2" class="pt0 pb0 bg-grey">
            <div class="container">
                <div class="row vertical-align"> 
                    <div class="col-md-6">
                        <img src="img/devices/d3.jpg" class="img-responsive" alt="#" data-reveal="left" />
                    </div>
                    <div class="col-md-6">
                        
                        <h2 data-reveal="bottom">Ưu tiên cho di động.</h2>
                        <p class="lead mt20" data-reveal="top">Theo thống kê cho thấy 96% người Mỹ mua sắm Online và 71% người mua hàng tìm kiếm thông từ smartphone</p>
                        
                        <div class="app-feature-icon-left" data-reveal="right">
                            <i class="icon-basic-elaboration-message-check color size-3x"></i>
                            <i class="icon-basic-elaboration-message-check back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Phát triển riêng ứng dụng mobile</h4>
                                <p>Download ứng dụng tại đây</p>
                            </div> 
                        </div>
                        
                        <div class="app-feature-icon-left" data-reveal="right">
                            <i class="icon-basic-elaboration-calendar-star color size-3x"></i>
                            <i class="icon-basic-elaboration-calendar-star back-icon"></i>
                            <div>
                                <h4>Dùng hệ thống bán hàng chuyên nghiệp</h4>
                                <p>Download ứng dụng tại đây</p>
                            </div> 
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Features -->
    
        <!-- Testimonials -->   
        <section id="testimonials" class="parallax pt100 pb90" data-overlay-light="8">
            <div class="background-image">
                <img src="img/backgrounds/s-9.jpg" alt="#">
            </div>
            <div class="container"> 
                <div class="row">                       

                    <div class="col-md-12 text-center pb20" data-reveal="top">
                        <h2>Khách hàng nói về chúng tôi</h2>
                    </div>

                    <div class="col-md-12 text-center" data-reveal="bottom">
                        
                        <div class="testimonials owl-carousel owl-theme quote-icons" data-autoplay="false" data-speed="4000"> 

                            <!-- Testimonial One -->
                            <div>
                                <p>
                                    <i class="vossen-quote color"></i>
                                    Hệ thông backend quản trị nội dung hiện đại và linh hoạt, thao tác quản lý đơn giản, dễ sử dụng. Dung lượng lớn không giới hạn nội dung, tôi rất yên tâm và tự tin khi kinh doanh trên hệ thống của <span class="color">Novaio.</span><br>
                                    <a target="_blank"  href="http://proshow.novaiotech.com/" style="font-size: 18px">
                                        <span class="color">xem dự án</span>
                                    </a>
                                    <i class="vossen-quote color"></i>
                                </p>   
                                <h5><strong>Mr Cường</strong></h5>
                                <p class="occupation">Product Designer</p>
                            </div> 
                            <!-- Testimonial Two -->
                            <div> 
                                <p>
                                    <i class="vossen-quote color"></i>
                                    Tối ưu hóa lượt tiếp cận của khách hàng, hỗ trợ công tác quảng bá hình ảnh của công ty, dễ sử dụng và tiết kiệm chi phí, chúng tôi hài lòng khi làm việc với <span class="color">Novaio.</span><br>
                                    <a target="_blank"  href="http://funtrip.novaiotech.com/" style="font-size: 18px">
                                        <span class="color">xem dự án</span>
                                    </a>
                                    <i class="vossen-quote color"></i>
                                </p>  
                                <h5><strong>Mr Khoa</strong></h5>
                                <p class="occupation">Web Designer</p>
                            </div> 
                            <!-- Testimonial Three -->
                            <div> 
                                <p>
                                    <i class="vossen-quote color"></i>
                                    Hỗ trợ tìm kiếm khách hàng trong và ngoài nước, đơn giản hóa thao tác đặt/ trả phòng, tiết kiệm chi phí và nguồn lực. Tự tin quảng bá hình ảnh và nâng cao chất lượng phục vụ.<br>
                                    <a target="_blank"  href="http://www.suitedevillehotel.vn/" style="font-size: 18px">
                                        <span class="color">xem dự án</span>
                                    </a>
                                    <i class="vossen-quote color"></i>
                                </p> 
                                <h5><strong>Mrs Đỗ Phượng</strong></h5>
                                <p class="occupation">UX Designer</p>
                            </div> 

                        </div>
                        
                    </div> 
                    
                </div>
            </div>
        </section>
        <!-- End Testimonials -->
        
        <!-- Clients Section -->
        <!-- <section class="pt70 pb70">
            <div class="container"> 
                <div class="row">                        
                    <h6 class="hidden">heading for W3c val checks</h6>
                    <div class="clients-slider owl-carousel owl-theme " data-autoplay="false" data-speed="4000">
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/1.jpg" alt="#"></a></div>  
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/2.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/3.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/4.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/5.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/6.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/7.jpg" alt="#"></a></div>
                        <div><a target="_blank"  href="#" target="_blank"><img src="img/clients/8.jpg" alt="#"></a></div>
                    </div>

                </div>
            </div>
        </section>--> 
        <!-- End Clients --> 
        
        <!-- Pricing -->   
        <section id="pricing" class="pt80 pb90 pricing-1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12 text-center pb20">   
                        <h2 data-reveal="bottom">Bảng giá</h2>
                        <p class="lead mt20" data-reveal="top">BẢNG GIÁ DỊCH VỤ THIẾT KẾ WEBSITE TRỌN GÓI</p>
                    </div>

                    <div class="col-lg-11 col-md-12 mr-auto">
                        
                        <div class="col-md-4 price-table" data-reveal="left">
                            <div class="price-box"> 
                                <h5><strong>CHUYÊN NGHIỆP</strong></h5>
                                <h3 class="bold price-price">
                                    <span>4,500,000 <sup>vnđ</sup></span>
                                   
                                </h3>
                                <div class="price-features">
                                    <p><strike>Thiết kế theo yêu cầu</strike></p>
                                    <p>Băng thông <span class="color">Không giới hạn</span></p>
                                    <p>Dung lượng lưu trữ <span class="color">5BG</span></p>
                                    <p>Tên miền <span class="color">.com, .net, <strike>com.vn, .vn</strike></span></p>
                                    <p><strike>Ngôn ngữ Tiếng Việt và Tiếng Anh</strike></p>
                                    <p>Responsive Design</p>
                                    <p>Chuẩn SEO</p>
                                    <p><strike>SSL Security</strike></p>
                                    <p>Bảo hành</p>
                                </div>
                                <a target="_blank"  href="/dang-ky" class="btn btn-primary btn-md btn-appear"><span>Đăng ký <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div>

                        <div class="col-md-4 price-table-featured" data-reveal="bottom">
                            <div class="price-box"> 
                                <h5><strong>NÂNG CAO</strong></h5>
                                <h3 class="bold price-price"> 
                                    <span>7,200,000  <sup>vnđ</sup></span>
                                   
                                </h3>
                                <div class="price-features">
                                    <p>Thiết kế theo yêu cầu</p>
                                    <p>Băng thông <span class="color">Không giới hạn</span></p>
                                    <p>Dung lượng lưu trữ <span class="color">5BG</span></p>
                                    <p>Tên miền <span class="color">.com, .net, com.vn, .vn</span></p>
                                    <p>Ngôn ngữ Tiếng Việt và Tiếng Anh</p>
                                    <p>Responsive Design</p>
                                    <p>Chuẩn SEO</p>
                                    <p><strike>SSL Security</strike></p>
                                    <p>Bảo hành</p>
                                </div>
                                <a target="_blank"  href="/dang-ky" class="btn btn-primary btn-md btn-appear"><span>Đăng ký <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div> 

                        <div class="col-md-4 price-table" data-reveal="right">
                            <div class="price-box"> 
                                <h5><strong>CAO CẤP</strong></h5>
                                <h3 class="bold price-price"> 
                                    <span>10,800,000  <sup>vnđ</sup></span>
                                    
                                </h3>
                                <div class="price-features">
                                    <p>Thiết kế theo yêu cầu</p>
                                    <p>Băng thông <span class="color">Không giới hạn</span></p>
                                    <p>Dung lượng lưu trữ <span class="color">5BG</span></p>
                                    <p>Tên miền <span class="color">.com, .net, com.vn, .vn</span></p>
                                    <p>Ngôn ngữ Tiếng Việt và Tiếng Anh</p>
                                    <p>Responsive Design</p>
                                    <p>Chuẩn SEO</p>
                                    <p>SSL Security</p>
                                    <p>Bảo hành</p>
                                </div>
                                <a target="_blank"  href="/dang-ky" class="btn btn-primary btn-md btn-appear"><span>Đăng ký <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Pricing -->
        
        <!-- Start News -->
        <section class="pt100 pb110">
            <div class="container">
                <div class="row"> 
                    
                    <div class="col-md-12 text-center pb20">   
                        <h2 data-reveal="bottom">Tin tức</h2>
                        <p class="lead mt20" data-reveal="top">sự kiện, tin tức</p>
                    </div>

                    <div class="col-md-12 vertical-col-align">
                        
                        <!-- Blog Item -->
                        <div class="col-md-4 col-sm-6" data-reveal="right">
                            <div class="blog-grid-content featured-news">
                                <img src="img/blog/6.png" alt="#">
                                <div class="post-header">
                                    <h5><span>August 26, 2016 In</span> <a target="_blank"  href="#" class="color">Shopping</a></h5>
                                    <a target="_blank"  href="blog-post-standard.html"><h3>Omni-Channel</h3></a>
                                </div>
                                <p>Báo cáo bán lẻ kênh hoàn chỉnh: Thương hiệu nào cần biết về thói quen mua sắm tiêu dùng hiện đại</p>
                                <a target="_blank"  href="#" class="btn btn-md btn-move"><span>Read More <i class="ion-arrow-right-c"></i></span></a>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            
                            <!-- Blog Item -->
                            <div class="col-md-6 col-sm-6" data-reveal="right">
                                <div class="blog-grid-content">
                                    <div class="post-header">
                                        <h5><span>May 12, 2016 In</span> <a target="_blank"  href="#" class="color">Design</a></h5>
                                        <a target="_blank"  href="blog-post-standard.html"><h4>Camera nhận diện khuôn mặt</h4></a>
                                    </div>
                                    <p>iPhone X giá 1.000 USD chính thức ra mắt: Thiết kế toàn màn hình siêu đẹp, camera nhận diện khuôn mặt, sạc không dây</p>
                                    <a target="_blank"  href="#" class="btn btn-sm"><span>Read More <i class="ion-arrow-right-c"></i></span></a>
                                </div>
                            </div>

                            <!-- Blog Item -->
                            <div class="col-md-6 col-sm-6" data-reveal="right">
                                <div class="blog-grid-content">
                                    <div class="post-header">
                                        <h5><span>April 20, 2016 In</span> <a target="_blank"  href="#" class="color">Deployment</a></h5>
                                        <a target="_blank"  href="blog-post-gallery.html"><h4>Trí tuệ nhân tạo - AI</h4></a>
                                    </div>
                                    <p>Trí tuệ nhân tạo đã học được cách tạo ra video game chỉ bằng cách xem người ta chơi</p>
                                    <a target="_blank"  href="#" class="btn btn-sm"><span>Read More <i class="ion-arrow-right-c"></i></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>        
        <!-- End News -->
        
        <!-- Contact Form -->    
        <section id="contact" class="pt120 pb100">
            <div class="container">
                <div class="row">     
                    
                    <div class="col-md-12 text-center pb20">   
                        <h2 data-reveal="bottom">Liên hệ với chúng tôi</h2>
                        <p class="lead" data-reveal="top"><span class="color">Công ty Cổ phần Công nghệ NovaIO</span><br>Lô B - Tầng 10, Toà nhà Công viên phần mềm  Đà Nẵng
                        <br>Số 02 Quang Trung, TP. Đà Nẵng.

                        <br>Hỗ trợ KH: <span class="color">84 090 553 1717</span>
                        <br>Email: info@novaio.vn
                        </p>
                    </div>
                    
                    <div class="col-md-8 col-md-offset-2 contact box-style" data-reveal="bottom"> 
                        <div id="message-info"></div>
                        <!-- Forms can be functional only on server. Upload to your server when testing. -->
                        <form id="contactform" method="post"> 
                            
                            <div class="col-sm-12">
                                <input name="name" id="name" placeholder="Tên bạn *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="email" id="email" placeholder="Email *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="phone" id="phone" placeholder="Điện thoại"/>
                            </div>
                            <div class="col-sm-12"> 
                                <textarea name="message" rows="9" id="message" placeholder="Tin nhắn *"></textarea>
                            </div>
                            <div class="col-md-12" data-reveal="top">
                                <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Gửi tin nhắn"/>
                            </div>
                            
                        </form>
                    </div>  

                </div>
            </div>
        </section>
        <!-- End Contact Form -->


        <!-- Google Map -->
        <section>

        <div 
              id="vossen-map"
              data-map-address="Tầng 10 - 02 Quang Trung, Hải Châu, Thạch Thang, Đà Nẵng, Vietnam"
              data-marker-info="Công ty Công Nghệ NovaI"
              data-maps-api-key="AIzaSyBD3JE1T5ssqLMdfRgR1bErpuWNBtIMHbI"
              data-map-zoom="16"
              data-map-height="500px"
              data-map-style="standard">
        </div>
        </section>
        <!-- End Google Map -->

        <!-- Callout -->
        <section class="parallax pt120 pb120" data-overlay-light="8">
            <div class="background-image">
                <img src="img/backgrounds/s-7.jpg" alt="#">
            </div>
            <div class="container"> 
                <div class="row">
                    
                    <div class="col-md-12 text-center"> 
                        <h2 data-reveal="top">Thiết kế web thật dễ dàng</h2> 
                        <p class="lead" data-reveal="top">Kho giao diện và tùy chỉnh <span class="color">miễn phí</span> lưu trữ Cloud!</p>
                        <a target="_blank"  href="/dang-ky" class="btn btn-md btn-primary mt30 btn-app-store" data-reveal="bottom"><i class="ion-social-apple"></i> tạo website ngay</a>
                    </div> 

                </div>
            </div>
        </section>
        <!-- End Callout -->
@endsection 

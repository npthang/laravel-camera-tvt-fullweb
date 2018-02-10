@extends('layout.master')
@section('metatag')
<meta name="description" content="Thiết kế website, Xây dựng ứng dụng di động, Tiếp thị trực tuyến" />
        <meta name="keywords" content="Thiet ke website, Mobile app, marketing, Thiet ke web Da Nang" />

@endsection 
@section('content')
         <section class="blog">
            <div class="container">
                <div class="row">

                    <!-- Blog Content -->
                    <div class="col-md-9">
                        <div class="blog-post">
                            <div class="mt20 mb20">
                                <img src="{{ asset('upload/blog/' . $blogs->image_link) }}" class="img-responsive width100" alt="#">
                            </div>
                            
                            <div class="post-header">
                                <h5><span>In</span> <strong><a target="_blank"  href="#" class="color">NovaIO</a></strong></h5>
                                <a target="_blank"  class="link-to-post" href="#"><h3><strong>{{ $blogs->title }}</strong></h3></a>
                            </div>
                            {!! $blogs->content !!}
                            <div class="post-tags">
                                <a target="_blank"  href="#" rel="tag">Forest</a>
                                <a target="_blank"  href="#" rel="tag">Northwest</a>
                                <a target="_blank"  href="#" rel="tag">Ocean</a>
                                <a target="_blank"  href="#" rel="tag">Travel</a>
                            </div>
                            
                            <div class="post-share">
                                <a target="_blank"  href="#"><i class="ion-social-facebook"></i> <span>Share</span></a>
                                <a target="_blank"  href="#"><i class="ion-social-twitter"></i> <span>Tweet</span></a>
                                <a target="_blank"  href="#"><i class="ion-social-pinterest"></i> <span>Pin it</span></a>
                                <a target="_blank"  href="#"><i class="ion-social-googleplus"></i></a>
                            </div>
                            
                        </div> 
                

                    </div>
                    <!-- End Blog Content -->

                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar"> 

                        <div class="blog-widget">
                             <h5>GIỚI THIỆU</h5>
                            <p>
Novaio làm công ty phần mềm dịch vụ và nghiên cứu trong lĩnh vực công nghệ & cách mạng công nghiệp 4.0. Đưa làn sóng phát triển công nghệ mới vào sản xuất và nâng cao hiệu quả kinh doanh cho doanh nghiệp.</p>
                        </div>  

                        <div class="blog-widget">
                            <h5>Categories</h5>
                            <ul class="category-list list-icons">
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>Travel</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>Lifestyle</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>Wander</a></li>  
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>Graphics</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>Other Bits</a></li>
                            </ul> 
                        </div> 

                        <div class="blog-widget blog-tags">
                            <h5>Tags</h5>
                            <ul class="tags-list">
                                <li><a target="_blank"  href="#">Design</a></li>
                                <li><a target="_blank"  href="#">Photography</a></li>
                                <li><a target="_blank"  href="#">Branding</a></li> 
                                <li><a target="_blank"  href="#">Videos</a></li>
                                <li><a target="_blank"  href="#">Web Design</a></li>      
                                <li><a target="_blank"  href="#">Apps</a></li>
                                <li><a target="_blank"  href="#">Development</a></li> 
                            </ul>
                        </div> 

                        <div class="blog-widget">
                            <h5>Archives</h5>
                            <ul class="category-list list-icons">
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>April 2016</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>March 2016</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>February 2016</a></li> 
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>January 2016</a></li>
                                <li><a target="_blank"  href="#"><i class="ion-ios-arrow-right"></i>December 2015</a></li>
                            </ul> 
                        </div>

                        <div class="sidebar-share"> 
                            <ul class="list-inline">
                                <li><a target="_blank"  href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a target="_blank"  href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a target="_blank"  href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a target="_blank"  href="#"><i class="ion-social-pinterest"></i></a></li> 
                                <li><a target="_blank"  href="#"><i class="ion-social-google"></i></a></li> 
                            </ul>
                        </div>    

                    </div>
                    <!-- End Sidebar --> 

                </div>
            </div>
        </section> 
@endsection 
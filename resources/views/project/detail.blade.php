@extends('layout.master')
@section('metatag')
<meta name="description" content="Thiết kế website, Xây dựng ứng dụng di động, Tiếp thị trực tuyến" />
<meta name="keywords" content="Thiet ke website, Mobile app, marketing, Thiet ke web Da Nang" />
<script>
  fbq('track', 'Search');
</script>

@endsection 
@section('content')
       
        <!-- Project -->
        <section class="pt140 pb50">
            <div class="container">
                <div class="row">    
                    
                    <div class="col-md-12 text-center">
                        <h1><strong>Project</strong> {{ $project->name }}</h1>
                        <p class="lead">{{ $project->introduce }}</p>
                    </div>
                    
                    <div class="col-md-8 mt20 mb40">
                        <div class="carousel lightbox owl-carousel owl-theme" data-autoplay="false" data-speed="4000" data-touch-drag="true" data-loop="false">
                            @foreach(json_decode($project->image) as $img)
                                <div>
                                    <a target="_blank"  href="{{ asset('upload/projects/' . $img) }}"><img src="{{ asset('upload/projects/' . $img) }}" class="img-responsive width100" alt="#"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-md-4 project-sidebar"> 

                        <div>
                            <h4><strong>Project Info</strong></h4>
                            {!! $project->info !!}
                        </div>  

                        <div class="project-info">
                            <div>
                                <p>Client</p>
                                <p>{{ $project->client }}</p>
                            </div>
                            <div>
                                <p>Date</p>
                                <p>{{ $project->date }}</p>
                            </div>
                            <div>
                                <p>Services</p>
                                <p>{{ $project->services }}</p>
                            </div>
                            <div>
                                <p>Link</strong></p>
                                <a target="_blank"  href="{{ URL::asset($project->link) }}">{{ $project->link }}</a>
                            </div>
                        </div>

                        <div > 
                            <ul class="list-inline">
                                <li><a target="_blank"  href="{{ URL::asset($project->fanpage) }}" class="btn btn-block btn-social btn-facebook" >
                                <span class="fa fa-facebook"></span> Fanpage Facebook
                              </a></li>
                            </ul>
                        </div>    

                    </div>
                    <!-- End Sidebar --> 
                
                </div>
            </div>
        </section>            
        <!-- End Project -->    
@endsection 
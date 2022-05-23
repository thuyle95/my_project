@extends('layouts.app')
@section('content')
    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area">
            <div class="home-slider-container default-slider-container">
                <div class="home-slider-wrapper slider-default">
                    <div class="slider-content-area" data-bg-img="assets/img/slider/slider-bg.webp">
                        <div class="container pt--0 pb--0">
                            <div class="slider-container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <div class="slider-content">
                                            <h2 class="title"><span class="counter"
                                                                    data-counterup-delay="80">{{$totalPosts}}</span> job
                                                available <br>You can choose your dream job</h2>
                                            <p class="desc">Find great job for build your bright career. Have many job
                                                in this platform.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="job-search-wrap">
                                            <div class="job-search-form">
                                                <form action="{{route('searchJob')}}" method="get">
                                                    <div class="row row-gutter-10">
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <input type="text" name="search" class="form-control"
                                                                       placeholder="Job title or keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <select class="form-control" name="province_id">
                                                                    <option value="" selected>Choose City</option>
                                                                    @foreach($provinces as $province)
                                                                        <option
                                                                            value="{{$province->id}}">{{$province->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <select class="form-control" name="searchCategory">
                                                                    <option value="" selected>Category</option>
                                                                    @foreach($businessCategory as $category)
                                                                        <option
                                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-form-search"><i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="play-video-btn">
                            <a href="https://www.youtube.com/mcvqOUtcAJg" class="video-popup">
                                <img src="assets/img/icons/play.webp" alt="Image-HasTech">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-shape">
                <img class="shape1" data-aos="fade-down" data-aos-duration="1500" src="assets/img/slider/vector1.webp"
                     width="270" height="234" alt="Image-HasTech">
                <img class="shape2" data-aos="fade-left" data-aos-duration="2000" src="assets/img/slider/vector2.webp"
                     width="201" height="346" alt="Image-HasTech">
                <img class="shape3" data-aos="fade-right" data-aos-duration="2000" src="assets/img/slider/vector3.webp"
                     width="276" height="432" alt="Image-HasTech">
                <img class="shape4" data-aos="flip-left" data-aos-duration="1500" src="assets/img/slider/vector4.webp"
                     width="127" height="121" alt="Image-HasTech">
            </div>
        </section>

        <section class="work-process-area">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">How It Work?</h3>
                            <div class="desc">
                                <p>Many desktop publishing packages and web page editors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="working-process-content-wrap">
                            <div class="working-col">
                                <!--== Start Work Process ==-->
                                <div class="working-process-item">
                                    <div class="icon-box">
                                        <div class="inner">
                                            <img class="icon-img" src="assets/img/icons/w1.webp" alt="Image-HasTech">
                                            <img class="icon-hover" src="assets/img/icons/w1-hover.webp"
                                                 alt="Image-HasTech">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Create an Account</h4>
                                        <p class="desc">It is long established fact reader distracted readable
                                            content</p>
                                    </div>
                                    <div class="shape-arrow-icon">
                                        <img class="shape-icon" src="assets/img/icons/right-arrow.webp"
                                             alt="Image-HasTech">
                                        <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.webp"
                                             alt="Image-HasTech">
                                    </div>
                                </div>
                                <!--== End Work Process ==-->
                            </div>
                            <div class="working-col">
                                <!--== Start Work Process ==-->
                                <div class="working-process-item">
                                    <div class="icon-box">
                                        <div class="inner">
                                            <img class="icon-img" src="assets/img/icons/w2.webp" alt="Image-HasTech">
                                            <img class="icon-hover" src="assets/img/icons/w2-hover.webp"
                                                 alt="Image-HasTech">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">CV/Resume</h4>
                                        <p class="desc">It is long established fact reader distracted readable
                                            content</p>
                                    </div>
                                    <div class="shape-arrow-icon">
                                        <img class="shape-icon" src="assets/img/icons/right-arrow.webp"
                                             alt="Image-HasTech">
                                        <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.webp"
                                             alt="Image-HasTech">
                                    </div>
                                </div>
                                <!--== End Work Process ==-->
                            </div>
                            <div class="working-col">
                                <!--== Start Work Process ==-->
                                <div class="working-process-item">
                                    <div class="icon-box">
                                        <div class="inner">
                                            <img class="icon-img" src="assets/img/icons/w3.webp" alt="Image-HasTech">
                                            <img class="icon-hover" src="assets/img/icons/w3-hover.webp"
                                                 alt="Image-HasTech">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Find Your Job</h4>
                                        <p class="desc">It is long established fact reader distracted readable
                                            content</p>
                                    </div>
                                    <div class="shape-arrow-icon">
                                        <img class="shape-icon" src="assets/img/icons/right-arrow.webp"
                                             alt="Image-HasTech">
                                        <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.webp"
                                             alt="Image-HasTech">
                                    </div>
                                </div>
                                <!--== End Work Process ==-->
                            </div>
                            <div class="working-col">
                                <!--== Start Work Process ==-->
                                <div class="working-process-item">
                                    <div class="icon-box">
                                        <div class="inner">
                                            <img class="icon-img" src="assets/img/icons/w4.webp" alt="Image-HasTech">
                                            <img class="icon-hover" src="assets/img/icons/w4-hover.webp"
                                                 alt="Image-HasTech">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Save & Apply</h4>
                                        <p class="desc">It is long established fact reader distracted readable
                                            content</p>
                                    </div>
                                    <div class="shape-arrow-icon d-none">
                                        <img class="shape-icon" src="assets/img/icons/right-arrow.webp"
                                             alt="Image-HasTech">
                                        <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.webp"
                                             alt="Image-HasTech">
                                    </div>
                                </div>
                                <!--== End Work Process ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="job-category-area">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">Popular Category</h3>
                            <div class="desc">
                                <p>Many desktop publishing packages and web page editors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-gutter-20">
                    @foreach($businessCategory as $category)
                        <div class="col-sm-6 col-lg-3">
                            <!--== Start Job Category Item ==-->
                            <div class="job-category-item">
                                <div class="content">
                                    <h3 class="title"><a href="{{route('searchCategories',$category->id)}}">{{$category->name}}
                                </div>
                                <a class="overlay-link" href="{{route('searchCategories',$category->id)}}"></a>
                            </div>
                            <!--== End Job Category Item ==-->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--== End Job Category Area Wrapper ==-->

        <!--== Start Recent Job Area Wrapper ==-->
        <section class="recent-job-area bg-color-gray">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">Recent Job Circulars</h3>
                            <div class="desc">
                                <p>Many desktop publishing packages and web page editors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6 col-lg-4">
                            <!--== Start Recent Job Item ==-->
                            <div class="recent-job-item">
                                {{--              <div class="company-info">--}}
                                {{--                <div class="logo">--}}
                                {{--                  <a href="company-details.php"><img src="{{$post->user->recruiter->profile_image}}" width="75" height="75" alt="Image-HasTech"></a>--}}
                                {{--                </div>--}}
                                {{--              </div>--}}
                                <div class="main-content">
                                    <h3 class="title text-center"><a
                                            href="{{route('posts.detail', $post->id)}}">{{$post->title}}</a></h3>
                                    <h5 class="work-type">{{$post->job_type}}</h5>
                                    <p class="desc">{{$post->content}}</p>
                                </div>
                                <div class="recent-job-info">
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <div class="salary">
                                            <h4>{{$post->salary}}</h4>
                                            <p>/monthly</p>
                                        </div>
                                    @endif
                                    <a class="btn-theme btn-sm" href="{{route('candidates.create')}}">Apply Now</a>
                                </div>
                            </div>
                            <!--== End Recent Job Item ==-->
                        </div>
                    @endforeach
                </div>
                {{--            {{$posts->links()}}--}}
            </div>
        </section>
        <!--== End Recent Job Area Wrapper ==-->


        <!--== Start Brand Logo Area Wrapper ==-->
        <div class="brand-logo-area">
            <div class="container pt--0 pb--0" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-content">
                            <div class="swiper brand-logo-slider-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/1.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/2.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/3.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/4.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/5.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/6.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Brand Logo Item ==-->
                                        <div class="brand-logo-item">
                                            <img src="assets/img/brand-logo/1.webp" alt="Image-HasTech">
                                        </div>
                                        <!--== End Brand Logo Item ==-->
                                    </div>
                                </div>
                            </div>
                            <!--== Add Swiper Arrows ==-->
                            <div class="swiper-btn-wrap">
                                <div class="brand-swiper-btn-prev">
                                    <i class="icofont-long-arrow-left"></i>
                                </div>
                                <div class="brand-swiper-btn-next">
                                    <i class="icofont-long-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Brand Logo Area Wrapper ==-->

        <!--== Start Testimonial Area Wrapper ==-->
        <section class="testimonial-area bg-color-gray">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">Our Happy Clients</h3>
                            <div class="desc">
                                <p>Many desktop publishing packages and web page editors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper testi-slider-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/1.webp" width="75" height="75"
                                                         alt="Image-HasTech">
                                                </div>
                                                <div class="testi-info">
                                                    <h4 class="name">Roselia Hamets</h4>
                                                    <span class="designation">Hiring Manager</span>
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p class="desc">It is a long established fact that reader will
                                                    distracted the readable content page looking at its layout point
                                                    using that has more-or-less normal distribution of letters opposed
                                                    using content making.</p>
                                                <div class="rating-box">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                                              alt="Image-HasTech"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/2.webp" width="75" height="75"
                                                         alt="Image-HasTech">
                                                </div>
                                                <div class="testi-info">
                                                    <h4 class="name">Assunta Manson</h4>
                                                    <span class="designation">Hiring Manager</span>
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p class="desc">It is a long established fact that reader will
                                                    distracted the readable content page looking at its layout point
                                                    using that has more-or-less normal distribution of letters opposed
                                                    using content making.</p>
                                                <div class="rating-box">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                                              alt="Image-HasTech"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/3.webp" width="75" height="75"
                                                         alt="Image-HasTech">
                                                </div>
                                                <div class="testi-info">
                                                    <h4 class="name">Amira Shepard</h4>
                                                    <span class="designation">Hiring Manager</span>
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p class="desc">It is a long established fact that reader will
                                                    distracted the readable content page looking at its layout point
                                                    using that has more-or-less normal distribution of letters opposed
                                                    using content making.</p>
                                                <div class="rating-box">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                                              alt="Image-HasTech"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/4.webp" width="75" height="75"
                                                         alt="Image-HasTech">
                                                </div>
                                                <div class="testi-info">
                                                    <h4 class="name">Joshua George</h4>
                                                    <span class="designation">Hiring Manager</span>
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p class="desc">It is a long established fact that reader will
                                                    distracted the readable content page looking at its layout point
                                                    using that has more-or-less normal distribution of letters opposed
                                                    using content making.</p>
                                                <div class="rating-box">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                                              alt="Image-HasTech"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/5.webp" width="75" height="75"
                                                         alt="Image-HasTech">
                                                </div>
                                                <div class="testi-info">
                                                    <h4 class="name">Rosie Patton</h4>
                                                    <span class="designation">Hiring Manager</span>
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p class="desc">It is a long established fact that reader will
                                                    distracted the readable content page looking at its layout point
                                                    using that has more-or-less normal distribution of letters opposed
                                                    using content making.</p>
                                                <div class="rating-box">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                                              alt="Image-HasTech"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                            </div>

                            <!--== Add Swiper Pagination ==-->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Testimonial Area Wrapper ==-->

    </main>
@endsection

@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="{{\Illuminate\Support\Facades\Auth::user()->recruiter->banner_image?? ''}}">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Employers Details</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li><a href="index.blade.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Employers</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Employers Details Area Wrapper ==-->
    <section class="employers-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="employers-details-wrap">
                        <div class="employers-details-info">
                            <div class="thumb">
                                <img src="{{asset('image')}}/{{\Illuminate\Support\Facades\Auth::user()->recruiter->profile_image ?? ''}}" width="130" height="130" alt="Image-HasTech">
                            </div>
                            <div class="content">
                                <h4 class="title">{{\Illuminate\Support\Facades\Auth::user()->name}}.</h4>
                                <h5 class="sub-title">{{\Illuminate\Support\Facades\Auth::user()->email}}</h5>
                                <ul class="info-list">
                                    <li><i class="icofont-location-pin"></i> {{\Illuminate\Support\Facades\Auth::user()->address_detail}}</li>
                                    <li><i class="icofont-phone"></i> +{{\Illuminate\Support\Facades\Auth::user()->phone}}</li>
                                </ul>
                                @if (\Illuminate\Support\Facades\Auth::user()->id !== 2)
                                <a href="{{route('recruiters.edit',\Illuminate\Support\Facades\Auth::user()->id)}}" type="button" class="btn-theme">Edit</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="employers-details-item">
                        <div class="content">
                            <h4 class="title">About Company</h4>
                            <p class="desc">{{\Illuminate\Support\Facades\Auth::user()->recruiter->description ?? ''}}</p>
                            <ul class="employers-details-list">
                                <li><i class="icofont-check"></i> Developing custom themes (WordPress.org & ThemeForest Standards)</li>
                                <li><i class="icofont-check"></i> Creating reactive website designs</li>
                                <li><i class="icofont-check"></i> Working under strict deadlines</li>
                                <li><i class="icofont-check"></i> Develop page speed optimized themes</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content mb--0 pb-2">
                                    <h4 class="title">Open Position</h4>
                                </div>
                            </div>
                            @foreach($posts as $post)
                                @if($post->user_id == \Illuminate\Support\Facades\Auth::id())
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <!--== Start Recent Job Item ==-->
                                <div class="recent-job-item recent-job-style3-item">
                                    <div class="main-content">
                                        <h3 class="title"><a href="{{route('posts.detail',$post->id)}}">{{$post->title}}</a></h3>
                                        <h5 class="work-type">{{$post->job_type}}</h5>
                                        <p class="desc">{{$post->content}}</p>
                                    </div>
                                    <div class="recent-job-info">
                                        <div class="salary">
                                            <td><a class="btn btn-primary" style="color: white" href="{{route('posts.edit',$post->id)}}">Update</a></td>
                                            <td><a class="btn btn-danger" style="color: white; margin-left: 20px"  onclick="return confirm('Are you sure?')"
                                                   href="{{route('posts.destroy',$post->id)}}">Delete</a></td>
                                        </div>
{{--                                        <a class="btn-theme btn-sm" href="job-details.blade.php">Apply Now</a>--}}
                                    </div>
                                </div>
                                <!--== End Recent Job Item ==-->
                            </div>
                                @endif
                            @endforeach
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-4">
                    <div class="employers-sidebar">
                        <div class="widget-item">
                            <div class="widget-title">
                                <h3 class="title">Information</h3>
                            </div>
                            <div class="summery-info">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="table-name">Company Name</td>
                                        <td class="dotted">:</td>
                                        <td>{{\Illuminate\Support\Facades\Auth::user()->recruiter->company_name ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Location</td>
                                        <td class="dotted">:</td>
                                        <td>{{\Illuminate\Support\Facades\Auth::user()->recruiter->address_company ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Members</td>
                                        <td class="dotted">:</td>
                                        <td>{{\Illuminate\Support\Facades\Auth::user()->recruiter->employee ?? ''}} People</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Phone</td>
                                        <td class="dotted">:</td>
                                        <td>+{{$post->user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Email</td>
                                        <td class="dotted">:</td>
                                        <td>{{$post->user->email}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget-item">
                            <div class="widget-title">
                                <h3 class="title">Share With</h3>
                            </div>
                            <div class="social-icons">
                                <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="icofont-facebook"></i></a>
                                <a href="https://twitter.com" target="_blank" rel="noopener"><i class="icofont-twitter"></i></a>
                                <a href="https://www.skype.com" target="_blank" rel="noopener"><i class="icofont-skype"></i></a>
                                <a href="https://www.pinterest.com" target="_blank" rel="noopener"><i class="icofont-pinterest"></i></a>
                                <a href="https://dribbble.com/" target="_blank" rel="noopener"><i class="icofont-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Employers Details Area Wrapper ==-->
</main>
@endsection

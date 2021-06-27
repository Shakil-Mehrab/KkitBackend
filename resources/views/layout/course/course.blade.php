@extends('layout.master')
@section('content')

<section class="all_course">
    <div>
        <img class="w-100" height="300px" src="{{asset('frontimages/course_banner.jpg')}}" alt="!">
    </div>

    <!--====== Web design & development courses start =======-->
    <div class="web_design py-5">
        <div class="col-md-12 text-center text-danger fw-bold py-4">
            <h2>Web Design & Development</h2>
            <span class="divider"></span>
        </div>
        <div class="container">
            <div class="row">
            @forelse($courses as $orderablecourse)
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <a href="#"><button class="btn btn-form course_btn fw-bold">View Course</button></a>
                        </div>
                        <img src="{{asset($orderablecourse->thumbnail)}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">{{$orderablecourse->heading}}</a>
                            <div class="review  p-3">
                                @for($i=1;$i<=$orderablecourse->rating;$i++)
                                <i class="fa fa-star" style="color:orange"></i>
                                @endfor
                                @for($i=1;$i<=5-$orderablecourse->rating;$i++)
                                <i class="fa fa-star"></i>
                                @endfor
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                {{$orderablecourse->price}} TK
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
<!-- 
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-1.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Full Stack Web Development</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 5000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll
                                        Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-1.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">PHP, Laravel Basic to Advance
                                Course</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 4000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll
                                        Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-1.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Wordpress Theme Customisation</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll
                                        Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--====== Web design & development courses end =======-->


    <!--====== graphics design courses start =======-->
    <div class="Graphics_design my-3">
        <div class="col-md-12 text-center text-danger fw-bold py-4">
            <h2>Graphics Design</h2>
            <span class="divider"></span>
        </div>
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <a href="#"><button class="btn btn-form course_btn fw-bold">View Course</button></a>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-2.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Fundamental of Graphics Design</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-2.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">T-Shirt Design</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-2.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Logo Design</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-2.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Bookover Design</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====== graphics design courses end =======-->


    <!--====== digital marketing courses start =======-->
    <div class="digital_marketing my-3">
        <div class="col-md-12 text-center text-danger fw-bold py-4">
            <h2>Digital Marketing</h2>
            <span class="divider"></span>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-3.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Fundamental of Digital Marketing –
                                Digital Google Garage Certificate</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-3.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Fundamental of Digital Marketing</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-3.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Social media marketing</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card my-2">
                        <div class="hover_button">
                            <button class="btn btn-form course_btn fw-bold">View Course</button>
                        </div>
                        <img src="{{asset('frontimages/Courses/course-3.jpg')}}" class="card-img-top" alt="!">
                        <div class="card-body">
                            <a class="card-title fw-bold web_title" href="#">Search Engine Optimization (SEO)</a>
                            <div class="review  p-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star mx-3"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    ৳ 3000.00
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn btn-form fw-bold btn-danger enroll_btn">Enroll Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--====== digital marketing courses end =======-->


</section>
@endsection
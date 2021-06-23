@extends('layout.master')
@section('content')
@include('layout.includes.slide')
<!--============ START OF K KIT ==============-->
<section id="about">
  <div class="container py-3 ">
    <div class="row">
      <div class="col-md-12">
        <h2 class="fw-bold">Welcome to <span style="color: #DE0011;">K K IT</span> </h2>
        <h6 class="fw-bold">WE ARE COMMITTED TO PROVIDE QUALITY SERVICES AND PLACING HONESTY AND INTEGRITY AT THE HEART OF ALL OUR ACTIONS.</h6 class="fw-bold">
        <p> <span style="color: #DE0011;  font-size: 22px;">KHALEDA KIBRIA IT (K K IT)</span> is the leading online earning training center controlled by its expert which is established on 01 March 2017. It is aiming at establishing itself as one of the prestigious entities in the world market to provide IT and security related services. Our services include Security Solution for Online Management, Software and advance IT training. Initially, our target is to guide students to get jobs in the online market to make independent as a freelancer. We offer a high-quality training service and capable of making money online as a freelancer. We ensure students skill enough to earn money at least 20000tk – unlimited per month as per his/her skill. It is only possible if you do hard work and applies all the lesson that we deliver and maintain a daily practice.</p>

        <p> KKIT wishes to be largest Outsourcing Company in the history of Bangladesh Information Technology industry by providing outstanding service to the World clients. We provide specific training to help you get a job in the most challenging and exciting industry of earth.</p>
      </div>
    </div>
  </div>
</section>
<!--============ START OF COURSE ==============-->
<section class="course">
  <div class="container mx-auto">
    <h2>Our Courses</h2>
    <p class="course_p">Choose your best course & take the first step to build a better career.</p>
    <div class="row">
      @forelse($courses as $course)
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card">
          <img src="{{asset($course->thumbnail)}}" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{$course->heading}}</h5>
            <p class="card-text">
              <?php echo str_replace('"', "", $course->description); ?>

            </p>
            <a href="#" class="btn btn-primary btn_color course_btn">More Details</a>
          </div>
        </div>
      </div>
      @empty
      @endforelse

      <!-- <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card">
          <img src="images/Courses/course-1.jpg" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold web_title">Web Design & Development</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn_color text-center">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card">
          <img src="images/Courses/course-2.jpg" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold">Graphis Design</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn_color course_btn">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card">
          <img src="images/Courses/course-3.jpg" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold">Digital Marketing</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn_color course_btn">More Details</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!--============ START OF SERVICE SECTION ================-->
<section class="service">
  <div class="container mx-auto">
    <h2>Our Services</h2>
    <p class="service_p">Our Services for Customers </p>
    <div class="row">
      @forelse($services as $service)
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="{{asset($service->thumbnail)}}" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold web_title">{{$service->heading}}</h5>
            <p class="card-text">Choose your requirment</p>
            <div class="s-links">
              <ul>
                <?php echo str_replace('"', "", $service->description); ?>
                <!-- <li><a href="#">1. Small-Medium Business (SMB) Website</a></li>
                <li><a href="#">2. Corporate Website</a></li>
                <li><a href="#">3. Landing Page Or Single Page Website</a></li>
                <li><a href="#">4. E-Commerce Website</a></li>
                <li><a href="#">5. Branding Or Biography Website</a></li>
                <li><a href="#">6. Portfolio Website</a></li> -->
              </ul>
            </div>
            <div class="service_detail">
              <a href="#" class="btn btn-primary btn-sm btn_color text-center ">See more</a>
            </div>
          </div>
        </div>
      </div>
      @empty
      @endforelse
      <!-- <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/Courses/course-2.jpg" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold">Graphis Design</h5>
            <p class="card-text">Choose your requirment</p>
            <div class="s-links">
              <ul>
                <li><a href="#">1. Banner Design</a></li>
                <li><a href="#">2. Brochure Design</a></li>
                <li><a href="#">3. Business Card Design</a></li>
                <li><a href="#">4. Calendar Design</a></li>
                <li><a href="#">5. Cover Photo Design for Social Mediae</a></li>
                <li><a href="#">6. CV Design</a></li>
                <li><a href="#">7. Flyer Design </a></li>
              </ul>
            </div>
            <div class="service_detail">
              <a href="#" class="btn btn-primary btn-sm btn_color text-center ">See more </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/Courses/course-3.jpg" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title fw-bold">Digital Marketing</h5>
            <p class="card-text">Choose your requirment</p>
            <div class="s-links">
              <ul>
                <li><a href="#">1. Search Engine Optimization</a></li>
                <li><a href="#">2. Pay-per-Click</a></li>
                <li><a href="#">3. Social Media Marketing</a></li>
                <li><a href="#">4. Content Marketing</a></li>
                <li><a href="#">5. Email Marketing</a></li>
                <li><a href="#">6. Mobile Marketing</a></li>
                <li><a href="#">7. Marketing Analytics</a></li>
              </ul>
            </div>
            <div class="service_detail">
              <a href="#" class="btn btn-primary btn-sm btn_color text-center ">See more</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!--============ START OF FACILITY SECTION ==============-->
<section class="facility">
  <h2>Our Supportss</h2>
  <div class="container support">
    <div class="row">
      @forelse($supports as $support)
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
        <img src="{{asset($support->thumbnail)}}" class="card-img-top" alt="!">
          <div class="card-body">
            <h5 class="card-title">{{$support->heading}}</h5>
            <p class="card-text"><?php echo str_replace('"', "", $support->description); ?></p>
          </div>
        </div>
      </div>
      @empty
      @endforelse
      <!-- <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/facilities/faci1.png" alt="!" class="faci_img">
          <div class="card-body">
            <h5 class="card-title">Lifetime Support</h5>
            <p class="card-text">All CITI students get supports for life. For any live project get our experts' guideline and maintain it in international standard.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/facilities/faci2.png" alt="!" class="faci_img">
          <div class="card-body">
            <h5 class="card-title">Practice Lab Support</h5>
            <p class="card-text">We offer lab practise facilities for weak students where they can practice the task and be able to hold the attention by solving what is not understood by them.</p>
          </div>
        </div>
      </div> -->
    </div>
    <!-- <div class="row pt-3">
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/facilities/faci3.png" alt="!" class="faci_img">
          <div class="card-body">
            <h5 class="card-title">Class Video</h5>
            <p class="card-text">Get the recorded lectures and class practical as video. It will create a good storage of materials for future. And you can practice at home with the help of these materials.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/facilities/faci4.png" alt="!" class="faci_img">
          <div class="card-body">
            <h5 class="card-title">Review Class</h5>
            <p class="card-text">Ensure 100% learning of tools, techniques, designs by our review classes for each batch. Better understand the difficult terms by revising every topic.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2">
        <div class="card card_size">
          <img src="images/facilities/faci5.png" alt="!" class="faci_img">
          <div class="card-body">
            <h5 class="card-title">Job Placement</h5>
            <p class="card-text">Acquire exclusive opportunities to work in international marketplaces as an expert freelancer. CITI creates opportunities by adding value to your career.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>
<!--============ START OF CAREER  SECTION ==================-->
<section class="career my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="brand_color fw-bold my-4">Career Counselling</h2>
        <form>
          <div class="col-md-12">
            <input class="form-control" type="text" name="name" placeholder="Enter your name"><br>
          </div>
          <div class="col-md-12">
            <input class="form-control" type="text" name="email" placeholder="Enter your email"><br>
          </div>
          <div class="col-md-12">
            <input class="form-control" type="text" name="phone" placeholder="Enter your phone number"><br>
          </div>
          <div class="col-md-12">
            <input class="form-control btn btn-danger" type="submit" name="submit" value="Submit">
          </div>
        </form>
      </div>
      <div class="col-lg-6 col-md-6 col-12 img_placing">
        <img src="{{asset('frontimages/career-counselling.png')}}" width="100%">
      </div>
    </div>
  </div>
</section>
<!--============ START OF CONTACT SECTION ==================-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 contact-heading pb-4">
        <h2>Do you have any question?</h2>
        <h3>Contact Us</h3>

      </div>
      <div class="col-md-6 col-12">
        <div class="contact-left mb-4">
          <div class="">
            <h3 class="text-white text-center"><i class="fa fa-map-marker contact_icon" aria-hidden="true"></i> Address</h3>
            <p class="text-white text-center">{{$contact->address1}},<br> {{$contact->address2}}</p>
            <div class="my-5">
              <h3 class="text-white text-center"><i class="fa fa-phone contact_icon" aria-hidden="true"></i> Phone</h3>
              <p class="text-white text-center">{{$contact->phone}}</p>
            </div>
            <h3 class="text-white text-center"><i class="fa fa-envelope contact_icon" aria-hidden="true"></i> Email</h3>
            <p class="text-white text-center">{{$contact->email}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="contact-right mb-4">
          <h2 class="text-light text-center py-4">GET IN TOUCH</h2>
          <div class="mx-4">
            <form action="">
              <input type="text" placeholder="Name" class="form-control"><br>
              <input type="text" placeholder="Email" class="form-control"><br>
              <input type="text" placeholder="Subject" class="form-control"><br>
              <textarea name="" id="" cols="50" rows="5" placeholder="Message" class="form-control "></textarea>
            </form>
            <button type="button" class="btn btn-danger form-control  my-3">Send Mail</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
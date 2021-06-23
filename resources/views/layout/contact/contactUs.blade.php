@extends('layout.master')
@section('content')

<section class="contact" id="contact_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-heading pb-4">

                <h3 class="my-3 text-danger display-6">Contact Us</h3>
            </div>
            <div class="col-md-6 col-12">
                <div class="contact-left mb-4">
                    <div class="">
                        <h3 class="text-white text-center"><i class="fa fa-map-marker contact_icon" aria-hidden="true"></i> Address</h3>
                        <p class="text-white text-center mb-0">{{$contact->address1}}</p>
                        <p class="text-white text-center">{{$contact->address2}}</p>

                        <div class="my-5">
                            <h3 class="text-white text-center"><i class="fa fa-phone contact_icon" aria-hidden="true"></i> Phone</h3>
                            <p class="text-white text-center">{{$contact->phone}} <br> 01919-995552</p>
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

            <div class="col-md-12">
                <iframe class="w-100 py-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3363675188943!2d90.36683561430847!3d23.80663509254422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d68d0d6f35%3A0xca4252732bab77bc!2sShah%20Ali%20Plaza%2C%20Mirpur%2010%20Roundabout%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1623745910459!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

        </div>
    </div>
</section>

@endsection
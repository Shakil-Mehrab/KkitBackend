<div class="media_body">
    <div class="user_image">
        <div class="user_img mr-1">
            <img src="{{asset(auth()->user()->thumbnail)}}" alt="user" width="60px">
        </div>
        <h6><a href="#">{{auth()->user()->name}}</a></h6>
    </div>
    <ul class="tree_ul">
        <!-- <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Product
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/product')}}">Add Product</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/product')}}">View Product</a></li>
            </ul>
        </li> -->
        <!-- <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Category
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/category')}}">Add Category</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/category')}}">View Category</a></li>
            </ul>
        </li> -->
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                User
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/user')}}">View User</a></li>
            </ul>
        </li>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Contact
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/contact/create')}}">Add Contact</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/contact')}}">View Contact</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Course
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/course/create')}}">Add Course</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/course')}}">View Course</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Slider
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/slider/create')}}">Add Slider</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/slider')}}">View Slider</a></li>
            </ul>
        </li>
        
         <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
             Services
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/service/create')}}">Add Services</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/service')}}">View Services</a></li>
            </ul>
        </li>
        </li> <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
             Supports
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/support/create')}}">Add Supports</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/support')}}">View Supports</a></li>
            </ul>
        </li>
         <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
             About
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/about/create')}}">Add About</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/about')}}">View About</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
            Counselling
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/counselling/create')}}">Add Counselling</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/counselling')}}">View Counselling</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
            Get In Touch
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/getintouch/create')}}">Add Get In Touch</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/getintouch')}}">View Get In Touch</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
            Orderable Course
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/orderablecourse/create')}}">Add Orderable Course</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/orderablecourse')}}">View Orderable Course</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">

            <a class="change_color_to_dark_white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
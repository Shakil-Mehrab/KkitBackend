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
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/user')}}">View User</a></li>
            </ul>
        </li>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Contact
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/contact')}}">Add Contact</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/contact')}}">View Contact</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Course
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/course')}}">Add Course</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/course')}}">View Course</a></li>
            </ul>
        </li>
        <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Slider
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/slider')}}">Add Slider</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/slider')}}">View Slider</a></li>
            </ul>
        </li>
        
         <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
            Our Services
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/service')}}">Add Services</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/service')}}">View Services</a></li>
            </ul>
        </li>
        </li> <li class="tree_li mb-2">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
            Our Supports
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/create/slider')}}">Add Supports</a></li>
                <li class="tree_li_ul_li"><a class="change_color_to_dark_white" href="{{url('admin/view/slider')}}">View Supports</a></li>
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
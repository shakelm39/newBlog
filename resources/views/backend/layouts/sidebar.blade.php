<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        </li>
        <li><a><i class="fa fa-clone"></i>Category <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('category.create')}}">Add Category</a></li>
                <li><a href="{{route('category.view')}}">View Category</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-clone"></i>Post <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#">Add Post</a></li>
                <li><a href="#">View Post</a></li>
            </ul>
        </li>
    </ul>
    </div>
</div>
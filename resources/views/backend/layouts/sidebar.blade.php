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
                <li><a href="{{route('post.create')}}">Add Post</a></li>
                <li><a href="{{route('post.view')}}">View Post</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-clone"></i>Comments <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('comment.index')}}">View Comment</a></li>
            </ul>
        </li>
    </ul>
    </div>
</div>
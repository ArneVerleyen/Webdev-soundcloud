

<div class="sidebar-wrapper">

    <nav class="sidebar">
        <div class="sidebar-header">
            <h3>Soundcloud admin page</h3>
        </div>
        <ul class="list-unstyled components">

            <li>
                <a href="{{route('admin.home', app()->getLocale())}}">Home Page</a>
            </li>
            <li>
                <a href="{{route('admin.blogs', app()->getLocale())}}">Blogs</a>
            </li>
            <li>
                <a href="{{route('admin.donations', app()->getLocale())}}">Donations</a>
            </li>
            <li>
                <a href=""></a>
            </li>
        </ul>
        <a href="{{route('home', app()->getLocale())}}">Back to Homepage</a>
        <a href="#">Logout</a>

    </nav>


</div>

<div id="mySidenav" class="sidenav">
    
    <div class="sidebar--navigation">
        <p class="related-content">Site Nav</p>
        <ul>
            <li>
                <a href="{{ url('/') }}"">
                    <div class="icon-container">
                        <i class="fa fa-camera-retro fa-lg"></i>                        
                    </div>
                    <span class="sidebar-nav-text">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('articles_index') }}">
                    <div class="icon-container">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>                        
                    </div>
                    <span class="sidebar-nav-text">Articles</span>
                </a>
            </li>
            <li>
                <a href="{{ route('videos_index') }}">
                    <div class="icon-container">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>                        
                    </div>
                    <span class="sidebar-nav-text">Videos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="icon-container">
                        <i class="fa fa-phone" aria-hidden="true"></i>                        
                    </div>
                    <span class="sidebar-nav-text">Contact</span>
                </a>
            </li>
            <li>
                <a href="{{ url('resources') }}">
                    <div class="icon-container">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>
                    <span class="sidebar-nav-text">Resources</span>
                </a>
            </li>
            <li>
                <a href="{{ url('about') }}">
                    <div class="icon-container">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>                        
                    </div>
                    <span class="sidebar-nav-text">Who</span>
                </a>
            </li>             
        </ul>
    </div>

    <div class="sidebar--options">
        <p class="related-content">Related Content</p>
        <ul>
            <li>
                <a href="#">
                    <div class="sidebar--image--container">
                        <img src="/images/sidebar-icons/javascript-sidebar.png" alt="JavaScript Sidebar Icon"  class="sidebar--option--image">
                    </div>
                    <span class="sidebar--option--text">JavaScript</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="sidebar--image--container">
                        <img src="/images/sidebar-icons/jquery-sidebar.gif" alt="jQuery Sidebar Icon"  class="sidebar--option--image">
                    </div>
                    <span class="sidebar--option--text">jQuery</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="sidebar--image--container">
                        <img src="/images/sidebar-icons/react-sidebar.png" alt="React Sidebar Icon"  class="sidebar--option--image">
                    </div>
                    <span class="sidebar--option--text">React</span>
                </a>
            </li>

            <li>            
                <a href="#">
                    <div class="sidebar--image--container">
                        <img src="/images/sidebar-icons/php-sidebar.png" alt="PHP Sidebar Icon"  class="sidebar--option--image">                        
                    </div>
                    <span class="sidebar--option--text">PHP</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="sidebar--image--container">
                        <img src="/images/sidebar-icons/laravel-sidebar.png" alt="Laravel Sidebar Icon"  class="sidebar--option--image">
                    </div>
                    <span class="sidebar--option--text">Laravel</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="sidebar--image--container">                    
                        <img src="/images/sidebar-icons/git-sidebar.png" alt="Git Sidebar Icon"  class="sidebar--option--image">
                    </div>
                    <span class="sidebar--option--text">Git</span>
                </a>
            </li>            

        </ul>        
    </div>
</div>
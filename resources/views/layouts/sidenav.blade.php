<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                
                    <li>
                        <a href=" {{ route('adminhome') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    <li>
                        <a href="template/#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Room</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('roomcreate') }}" class=" hvr-bounce-to-right"> <i class="fa fa-caret-right nav_icon"></i>Manage Room</a></li>
                            
                            
            
                        <li><a href="{{ route('createtarrif') }}" class=" hvr-bounce-to-right"><i class="fa fa-caret-right nav_icon"></i>Manage Room Category</a></li>

                       </ul>
                    </li>

                     <li>
                        <a href="{{ route('allusers') }}" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i> <span class="nav-label">Users</span> </a>
                    </li>
                    
                    <li>
                        <a href="template/gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                     <li>
                        <a href="template/#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="template/404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                            <li><a href="template/faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="template/blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                     <li>
                        <a href="template/layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                    </li>
                   
                    <li>
                        <a href="template/#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="template/forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                            <li><a href="template/validation.html" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="template/#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="template/signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                            <li><a href="template/signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="# " class=" hvr-bounce-to-right"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-th nav_icon"></i> <span class="nav-label">Logout</span>
                                        </a>
                    </li>
                </ul>
            </div>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
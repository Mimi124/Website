
{{-- @php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

// @dd($current)

@endphp --}}



<div class="left-side-menu">

    <div class="h-100" data-simplebar>



        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                       <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2" >Menu</li>
                {{-- {{ ($prefix == '/users')?'active': ''}} --}}


                <li>
                    <a href="#sidebarApp" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Slider </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarApp">
                        <ul class="nav-second-level">
                            <li>
                                 <a href="{{route('slider.view')}}">
                                    <i class="icon-people">   View Slider </i>
                                 </a>

                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarUsers" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Features </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarUsers">
                        <ul class="nav-second-level">
                            <li>
                                 <a href="{{route('feature.view')}}">
                                    <i class="icon-people">View Features</i> </a>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="fe-truck"></i>
                        <span>Our Goal</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                 <a href="{{ route('goal.view') }}">View Goals</a>
                            </li>
                        </ul>
                    </div>
                </li>





                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-child-outline"></i>
                        <span> Our Team </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('team.view') }}">
                                    <i class="mdi mdi-account-group">   View Members</i> </a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarFacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-child-outline"></i>
                        <span> Facts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarFacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('fact.view') }}">
                                    <i class="mdi mdi-account-group">   View Facts</i> </a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarProjects" data-bs-toggle="collapse">
                        <i class="mdi mdi-briefcase-check-outline"></i>
                        <span> Projects </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="nav-second-level">
                            <li>
                                <a href="project-list.html">List</a>
                            </li>
                            <li>
                                <a href="project-detail.html">Detail</a>
                            </li>
                            <li>
                                <a href="project-create.html">Create Project</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-multiple-outline"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="task-list.html">List</a>
                            </li>
                            <li>
                                <a href="task-details.html">Details</a>
                            </li>
                            <li>
                                <a href="task-kanban-board.html">Kanban Board</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarContacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-account-outline"></i>
                        <span> Contacts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarContacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="contacts-list.html">Members List</a>
                            </li>
                            <li>
                                <a href="contacts-profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTickets" data-bs-toggle="collapse">
                        <i class="mdi mdi-lifebuoy"></i>
                        <span> Tickets </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="tickets-list.html">List</a>
                            </li>
                            <li>
                                <a href="tickets-detail.html">Detail</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html">Log In</a>
                            </li>

                            <li>
                                <a href="auth-register.html">Register</a>
                            </li>

                            <li>
                                <a href="auth-signin-signup.html">Signin - Signup</a>
                            </li>

                            <li>
                                <a href="auth-recoverpw.html">Recover Password</a>
                            </li>

                            <li>
                                <a href="auth-lock-screen.html">Lock Screen</a>
                            </li>

                            <li>
                                <a href="auth-logout.html">Logout</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Error Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="pages-404-two.html">Error 403
                                </a>
                            </li>
                            <li>
                                <a href="pages-404-alt.html">Error 405</a>
                            </li>
                        </ul>
                    </div>
                </li>





            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>

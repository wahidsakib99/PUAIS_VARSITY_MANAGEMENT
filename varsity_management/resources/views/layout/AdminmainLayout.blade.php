<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Wahid Sakib">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="description" content="Varsity management system | PUAIS">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="css/mainLayout.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>
    <!-- WHOLE BODY -->
    <div class="wbody">
        <section class="topbar">
            <!-- TOPBAR STARTS HERE -->
            <div class="topb">
                <!--  <div class="logo">
                    <p><b>XYZ</b></p>
                </div> -->
            </div>
            <ul class="navigate">
                <li class="notifications"><i class="far fa-bell" id="bell"></i><span class="notificationBubble">9</span>
                    <ul class="topul">
                        <li>
                            <span class="icon"></span>
                            <span class="text">Someone Liked your post</span>
                        </li>
                        <li>
                            <span class="icon"></span>
                            <span class="text">Someone Liked you post</span>
                        </li>
                        <li>
                            <span class="icon"></span>
                            <span class="text">Someone Liked you post</span>
                        </li>
                        <li>
                            <span class="icon"></span>
                            <span class="text">Someone Liked you post</span>
                        </li>
                        <li>
                            <span class="icon"></span>
                            <span class="text">Someone Liked you post</span>
                        </li>
                    </ul>
                </li>
                <li style="margin-left: 4px;"><i class="fas fa-user"></i>
                </li>
                <li><i class="fa fa-power-off" id="poweroff"></i></li>
            </ul>


        </section>

        <!-- TOPBAR ENDS HERE -->
        <section class="sidebarAndContent">

            <!-- SIDEBAR CONTENTS STARTS HERE -->
            <div class="Leftcontainer">
                <!-- Sider bar er top information -->

                <center>
                    <h2>PUAIS</h2>
                </center>
                <div class="topinfo">
                    <div class="far fa-user" style="margin-left: 45%; color: aliceblue;"></div>
                    <br>
                    <p class="user">Admin</p>

                </div>
                <!-- options with logo -->
                <div class="optionsSide">
                    <ul class="sideul">
                        <li onclick="location.href='{{ url('admin') }}'" class="{{ Request::is('admin') ? 'active' : '' }}">

                            <i class="fab fa-dashcube"></i><span class="text">Dashboard</span>



                        </li>
                        <li onclick="location.href='{{ url('adminstu') }}'" class="{{ Request::is('adminstu') ? 'active' : '' }}">

                            <i class="fas fa-user"></i><span class="text">Student</span>

                        </li>
                        <li onclick="location.href='{{ url('admincourse') }}'" class="{{ Request::is('admincourse') ? 'active' : '' }}">

                            <i class="fab fa-discourse"></i> <span class="text">Course</span>

                        </li>
                        <li onclick="location.href='{{ url('adminteacher') }}'" class="{{ Request::is('adminteacher') ? 'active' : '' }}">
                            <i class="fas fa-chalkboard-teacher"></i><span class="text">Teacher</span>
                        </li>
                        <li onclick="location.href='{{ url('adminroutine') }}'" class="{{ Request::is('adminroutine') ? 'active' : '' }}">
                            <i class="fas fa-object-group"></i><span class="text">Routine</span>

                        </li>
                        <li onclick="location.href='{{ url('adminresult') }}'" class="{{ Request::is('adminresult') ? 'active' : '' }}">
                            <i class="fas fa-clipboard"></i><span class="text">Result</span>

                        </li>
                        <li onclick="location.href='{{ url('adminlibrary') }}'" class="{{ Request::is('adminlibrary') ? 'active' : '' }}">
                            <i class="fas fa-book"></i><span class="text">Library</span>

                        </li>
                        <li onclick="location.href='{{ url('admincoursefee') }}'" class="{{ Request::is('admincoursefee') ? 'active' : '' }}">
                            <i class="fas fa-dollar-sign"></i><span class="text">Course Fee</span>

                        </li>
                        <li onclick="location.href='{{ url('adminsection') }}'" class="{{ Request::is('adminsection') ? 'active' : '' }}">

                            <i class="fas fa-list"></i><span class="text">Section</span>


                        </li>
                        <li onclick="location.href='{{ url('adminmail') }}'" class="{{ Request::is('adminmail') ? 'active' : '' }}">

                            <i class="fas fa-mail-bulk"></i> <span class="text">Mail/SMS</span>


                        </li>
                        <li onclick="location.href='{{ url('adminnotice') }}'" class="{{ Request::is('adminnotice') ? 'active' : '' }}">

                            <i class="fas fa-bell"></i><span class="text">Notice</span>


                        </li>
                        <li onclick="location.href='{{ url('adminsetting') }}'" class="{{ Request::is('adminsetting') ? 'active' : '' }}">

                            <i class="	fas fa-cogs"></i><span class="text">Setting</span>


                        </li>
                        <li onclick="location.href='{{ url('stuenrollment') }}'" class="{{ Request::is('stuenrollment') ? 'active' : '' }}">

                            <i class="fas fa-plus"></i><span class="text">Enrollment</span>

                        </li>
                        <li onclick="location.href='{{ url('stuadvisor') }}'" class="{{ Request::is('stuadvisor') ? 'active' : '' }}">

                            <i class="fab fa-tripadvisor"></i><span class="text">Advisor</span>


                        </li>
                        <li onclick="location.href='{{ url('teacherrequestsubject') }}'" class="{{ Request::is('teacherrequestsubject') ? 'active' : '' }}">

                            <i class="fas fa-book-open"></i><span class="text">Request Subject</span>


                        </li>
                        <li onclick="location.href='{{ url('teacherpendingrequest') }}'" class="{{ Request::is('teacherpendingrequest') ? 'active' : '' }}">

                            <i class="fas fa-pen-alt"></i><span class="text">Pending Request</span>


                        </li>
                        <li onclick="location.href='{{ url('stupayment') }}'" class="{{ Request::is('stupayment') ? 'active' : '' }}">

                            <i class="fas fa-credit-card"></i><span class="text">Payment</span>


                        </li>


                    </ul>
                </div>
            </div>
            <!-- SIDEBAR CONTENTS ENDS HERE -->
            <div class="Rightcontainer">
                <!-- Right Side content starts here -->
                <div class="spacer"></div>
                <div>
                    @yield('rightcontent')
                </div>

                <!-- Right Side content ends here -->
            </div>
        </section>

    </div>

</body>

</html>

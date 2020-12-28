
<head>
    <meta charset="UTF-8">
    <title>Resume Project</title>
    <link rel="stylesheet" href="{{asset('candidate/style.CSS')}}"/>
</head>
<body>
<div class="maincontent">

    <div class="left_content">
        <div class="surname">
            <div class="propic">
                <img src="{{asset('candidate/img/prince.JPG')}}" alt="" class="profilepicture" >
            </div>
            <div class="names">

                @foreach($showCandidate as $showCandidate)
                    <h2> {{$showCandidate->firstName}}</h2>

                @endforeach
                <P>{{$showCandidate->title}}</P>
            </div>
        </div>
        <div class="profile">
            <div class="fullicon">
                <img src="{{asset('candidate/img/profile.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>PROFILE</h1>
            </div>
            <div class="profile_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="pline">
            </div>
            <div class="pdes">

                    <html>
                    <head>
                        <title>Homepage</title>
                    </head>

                    <body>

                    <table width='80%' border=0>

                        <tr bgcolor='#CCCCCC'>
                            <td>firstName</td>
                            <td>lastName</td>
                            <td>Degree</td>
                            <td>institute</td>
                            <td>dob</td>
                            <td>religion</td>
                            <td>n_id</td>
                            <td>p_num</td>
                            <td>m_num</td>
                            <td>a_email</td>
                            <td>Update</td>
                        </tr>

                         <tr>
                             <td>
                                 {{$showCandidate->firstName}}
                             </td>
                             <td>
                                 {{$showCandidate->lastName}}
                             </td>
                             <td>
                                 {{$showCandidate->degree}}
                             </td>
                             <td>
                                 {{$showCandidate->institute}}
                             </td>
                         </tr>


                    </table>
                    </body>
                    </html>

                </p>
            </div>
        </div>
        <div class="contact">
            <div class="fullicon">
                <img src="{{asset('candidate/img/contact.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>CONTACT</h1>
            </div>
            <div class="contact_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="cline">
            </div>
            <div class="Cdes">
                <div class="c_left">
                    <p>E-Mail</p>
                    <p>Address</p>
                    <p>PHONE</p>
                    <p>WEBSITE</p>
                </div>
                <div class="c_right">

                  <p>{{$showCandidate->email}}</p>

                </div>
            </div>
        </div>
        <div class="skills">
            <div class="fullicon">
                <img src="{{asset('candidate/img/skills.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>SKILLS</h1>
            </div>
            <div class="skills_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="sline">
            </div>
            <div class="s_des">
              <h2>{{$showCandidate->softSkills}}</h2>
            </div>
        </div>
    </div>
    <div class="right_content">
        <div class="education">
            <div class="fullicon">
                <img src="{{asset('candidate/img/education.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>EDUCATION</h1>
            </div>
            <div class="edu_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="Eline">
            </div>
            <div class="edu_des">


                <div class="right_blackdots">
                    <img src="{{asset('candidate/img/black-dot.png')}}" alt="balckDot" class="blackdots">
                </div>

                <div class="Enames">
                    <h1>{{$showCandidate->degree}} <span>// {{$showCandidate->From}} - {{$showCandidate->To}}</span></h1>
                    <h1>Institution Name</h1>
                    <p>{{$showCandidate->institute}}</p>
                </div>



            </div>
        </div>
        <div class="experience">
            <div class="fullicon">
                <img src="{{asset('candidate/img/experiance.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>EXPERIENCE</h1>
            </div>
            <div class="ex_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="Eline">
            </div>
            <div class="edu_des">
                <div class="right_blackdots">
                    <img src="{{asset('candidate/img/black-dot.png')}}" alt="" class="blackdots">
                </div>

                <div class="Exnames">
                    <h1>{{$showCandidate->title}} <span>// {{$showCandidate->eFrom}} - {{$showCandidate->eTo}}</span></h1>
                    <h1>Organization Name</h1>
                    <p>{{$showCandidate->org}}</p>
                    <p>{{$showCandidate->address}}</p>
                </div>

            </div>
        </div>
        <div class="software">
            <div class="fullicon">
                <img src="{{asset('candidate/img/software.png')}}" alt="" class="icon">
            </div>
            <div class="title">
                <h1>SOFTWARE</h1>
            </div>
            <div class="software_line">
                <img src="{{asset('candidate/img/line.png')}}" alt="" class="Eline">
            </div>

            <div class="softdes">
                <div class="soft_left">
                 <h2>{{$showCandidate->softSkills}}</h2>

                </div>
                <div class="soft_right">

                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

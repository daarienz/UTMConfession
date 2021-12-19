<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confess</title>

    <link href="{{url('https://fonts.gstatic.com')}}" rel="preconnect">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/templatemo-seo-dream.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/animated.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/sort.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{url('https://kit.fontawesome.com/a076d05399.js')}}" crossorigin="anonymous"></script>
    <link href="{{asset('/assets/css/profile.css')}}" rel="stylesheet">

    @include('includes.header')
</head>

<body>
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" method="post">
                        @csrf


                        <div class="row">


                            <div class="col-md-4">
                                <div class="profile-img">
                                    <div class="section-headings">
                                        <h2><span>My</span><em> Profile</em></h2> <br>
                                        <img style="border-radius: 50%;" src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" /> <br> <br> <br> <br>
                                        <div class="file btn btn-lg btn-primary">
                                            Change Avatar
                                            <input type="file" name="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="profile-head">
                                    <div class="section-headings">
                                    <h2>{{ Auth::user()->username }}</h2>
                                    <h6>{{ Auth::user()->description }}</h6> <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Username :</b></label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ Auth::user()->username }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Email :</b></label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Status :</b></label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ Auth::user()->description }}</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-md-2">
                                <a style="text-decoration: none;" href="editProfile" class="profile-edit-btn" name="btnAddMore">Edit</a><br>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
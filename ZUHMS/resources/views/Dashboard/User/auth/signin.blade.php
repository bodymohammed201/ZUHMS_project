@extends('Dashboard.layouts.master2')
@section('css')

<style>
    .panel {
        display: none;
    }
</style>


<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('Dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
            <div class="row wd-100p mx-auto text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                    <img src="{{URL::asset('Dashboard/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                </div>
            </div>
        </div>
        <!-- The content half -->
        <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a>
                                    <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">ZU<span>HM</span>S</h1>
                                </div>
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <h2>Welcome Back Again</h2>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Choose Your Way To Login</label>
                                            <select class="form-control" id="sectionChooser">
                                                <option value="" selected disabled>Choose From List</option>
                                                <option value="user">Login As patient</option>
                                                <option value="admin">Login As Admin </option>
                                                <option value="doctor">Login As Doctor</option>
                                                <!--          <option value="ray_employee">Login As Ray_Employee</option>
                                                <option value="laboratorie_employee">Login As Laboratorie_Employee</option> -->
                                            </select>
                                        </div>


                                        {{--form user--}}
                                        <div class="panel" id="user">
                                            <h2> Login As patient</h2>
                                            <form method="POST" action="{{ route('login.patient') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                                </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                                <div class="row row-xs">


                                                </div>
                                            </form>

                                        </div>

                                        {{--form admin--}}
                                        <div class="panel" id="admin">
                                            <h2> Login As Admin</h2>
                                            <form method="POST" action="{{ route('login.admin') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                                </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                                <div class="row row-xs">

                                                </div>
                                        </div>
                                        </form>

                                    </div>

                                    {{--form Doctor--}}
                                    <div class="panel" id="doctor">
                                        <h2> Login As Doctor</h2>
                                        <form method="POST" action="{{ route('login.doctor') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                            </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                            <div class="row row-xs">

                                            </div>
                                        </form>

                                    </div>

                                    {{--form RayEmployee--}}
                                    <div class="panel" id="ray_employee">
                                        <h2> Login As Ray_Employee</h2>
                                        <form method="POST" action="{{ route('login.ray_employee') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                            </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                            <div class="row row-xs">

                                            </div>
                                        </form>

                                    </div>

                                    {{--form laboratorie_employee--}}
                                    <div class="panel" id="laboratorie_employee">
                                        <h2> Login As Laboratorie_Employee</h2>
                                        <form method="POST" action="{{ route('login.laboratorie_employee') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                            </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                            <div class="row row-xs">

                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End -->
        </div>
    </div><!-- End -->
</div>
</div>
@endsection
@section('js')


<script>
    $('#sectionChooser').change(function() {
        var myID = $(this).val();
        $('.panel').each(function() {
            myID === $(this).attr('id') ? $(this).show() : $(this).hide();
        });
    });
</script>
@endsection
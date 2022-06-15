@if(empty($setting))
@php $setting = \App\Models\Settings::first(); @endphp
@endif
<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tb-contact">

                    @auth
                        <a href="/userpanel">Welcome {{Auth::user()->name}}</a>

                        <a href="/logout" class="btn btn-danger">LOGOUT</a>
                    @else
                        <a href="/loginuser" class="btn btn-dark"><strong style="color: #ffffff">LOGIN  </strong></a>

                        <a href="/registeruser" class="btn btn-light"><strong style="color: #000000">REGISTER</strong></a>
                    @endauth

                </div>
            </div>

            <div class="tb-menu">

                <a href="{{route('contact')}}">Contact</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('references')}}">References</a>



                <div class="tb-contact">

@if($setting->email)

                        <p><i class="fas fa-envelope"></i>{{$setting->email}}</p>
                    @endif
@if($setting->phone)
                    <p><i class="fas fa-phone-alt"></i>{{$setting->phone}}</p>

                    @endif
                </div>


            </div>



        </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar Start -->

<!-- Brand Start -->
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset("assets")}}/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="b-ads">
                    <a href="{{route('home')}}">
                        <img src="{{asset("assets")}}/img/ads-1.jpg" alt="Ads">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="b-search">
                    <form id="f1" name="f1" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
parent.findString(this.t1.value);return false;">
                    <input type="text" id="t1" name="t1" placeholder="Search">
                   <button class="fa fa-search" type="submit" name="b1" value="Search"></button>
                    </form>
                </div>

                <script>
                    var TRange=null;

                    function findString (str) {
                        if (parseInt(navigator.appVersion)<4) return;
                        var strFound;
                        if (window.find) {

                            // CODE FOR BROWSERS THAT SUPPORT window.find

                            strFound=self.find(str);
                            if (!strFound) {
                                strFound=self.find(str,0,1);
                                while (self.find(str,0,1)) continue;
                            }
                        }
                        else if (navigator.appName.indexOf("Microsoft")!=-1) {

                            // EXPLORER-SPECIFIC CODE

                            if (TRange!=null) {
                                TRange.collapse(false);
                                strFound=TRange.findText(str);
                                if (strFound) TRange.select();
                            }
                            if (TRange==null || strFound==0) {
                                TRange=self.document.body.createTextRange();
                                strFound=TRange.findText(str);
                                if (strFound) TRange.select();
                            }
                        }
                        else if (navigator.appName=="Opera") {
                            alert ("Opera browsers not supported, sorry...")
                            return;
                        }
                        if (!strFound) alert ("String '"+str+"' not found!")
                        return;
                    }
                </script>



            </div>
        </div>
    </div>
</div>
<!-- Brand End -->


<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                @php
               $mainCategories= \App\Http\Controllers\HomeController::categorylist();
                @endphp
                <div class="navbar-nav mr-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>

                        <div class="dropdown-menu">

                            @foreach($mainCategories as $rs)
                            <a href="{{route('categorynews',['id'=>$rs->id, 'slug'=>$rs->title])}}" class="dropdown-item">{{$rs->title}}</a>
                            @endforeach

                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">References</a>

                    <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>


                    <script src="http://127.0.0.1:8000/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="http://127.0.0.1:8000/assets/js/adminmain.js"></script>
                   <!-- MENU BURAYA GELECEK -->

                </div>

                <div class="social ml-auto">
                    @if($setting->twitter)
                        <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if($setting->facebook)
                        <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($setting->linkedin)
                        <a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                    @endif

                    @if($setting->instagram)
                        <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($setting->youtube)
                        <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                    @endif

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

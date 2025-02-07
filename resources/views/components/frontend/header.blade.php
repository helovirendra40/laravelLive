<header id="wm-header" class="wm-header-two">
                <!--// MainHeader \\-->
                <div class="wm-main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">  
                                 <a href="{{ route("frontend.home") }}" class="wm-logo">
                                    <img src="{{ asset("uploads/logo/".$sitesettings->logo_light) }}" alt="{{ $sitesettings->site_title }}" class="logo-dark"/>
                                    <!-- <img src="{{ asset("uploads/logo/".$sitesettings->logo_dark) }}" alt="{{ $sitesettings->site_title }}" class="logo-white"/> -->
                                </a>
                            </div>
                            <div class="col-md-9">
                                <!--// Navigation \\-->
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                      
                                       @if (count($menu) > 0)
                                            <ul class="nav navbar-nav">
                                                    @foreach ($menu as $item)
                                                    <li class="nav-item">
                                                        <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                                                    </li>
                                                    @endforeach
                                            </ul>
                                      @endif
                                    </div>
                                </nav>
                                <!--// Navigation \\-->
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MainHeader \\-->
                <!--// TopStrip \\-->
                <div class="wm-topstrip">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="wm-stripinfo"> <ul> <li><i class="wmicon-technology4"></i>  +91 92898 66815</li> <li><i class="wmicon-letter"></i>info@vidyalive.com</li> </ul> </div> -->
                                        @if (count($menu) > 0)
                                            <ul class="wm-adminuser-section">
                                                    @foreach ($menu as $item)
                                                    <li>
                                                        <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                                                    </li>
                                                    @endforeach
                                            </ul>
                                        @endif                             
                            </div>
                        </div>
                    </div>
                </div>
                <!--// TopStrip \\-->
</header>


@extends("frontend.master")

@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

@section("content")
  <section class="wm-main-wrapper">
          @include("frontend.Filter.filtertitle")
          @include("frontend.Filter.sidebar")
          @include("frontend.filter.filtercontent")        
  </section>
  <div class="forFilterPageBottomFixed">
    <img width="100" height="100" src="https://img.icons8.com/ios/100/filter--v1.png" alt="filter--v1"/>
  </div>
@endsection
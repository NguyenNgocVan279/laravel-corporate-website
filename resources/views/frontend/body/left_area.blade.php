<!--Xử lý để lấy ra prefix và route để active sidebar 28/01/2022-->
@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
  //dd($prefix);
  //dd($route);
@endphp
<!--End Xử lý để lấy ra prefix và route-->



<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <h1 id="colorlib-logo"><a href="{{url('/')}}">VinaSOFT</a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="{{ $route == '' ? 'colorlib-active' : '' }}"><a href="{{url('/')}}">Home</a></li>
            <li class="{{ $route == 'show.service' ? 'colorlib-active' : '' }}"><a href="{{route('show.service')}}">Dịch vụ</a></li>
            <li class="{{ $route == 'show.project' ? 'colorlib-active' : '' }}"><a href="{{route('show.project')}}">Dự án</a></li>
            <li class="{{ $route == 'show.blog' ? 'colorlib-active' : '' }}"><a href="{{route('show.blog')}}">Chia sẻ</a></li>
            <li class="{{ $route == 'show.contact' ? 'colorlib-active' : '' }}"><a href="{{route('show.contact')}}">Liên hệ</a></li>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <p>
            <small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://vinasoft.net" target="_blank">VinaSoft</a> Distributed by: <a href="https://vinasoft.net/" target="_blank">VinaSoft.Net</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="https://vinasoft.net/" target="_blank">vinasoft.net</a></span></small>
        </p>
        <ul>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-twitter2"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
    </div>

</aside>
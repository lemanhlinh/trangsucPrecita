<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    {!! SEO::generate() !!}--}}

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="copyright" content="Công ty Sửa Chữa Điện Nước 356" />
    <meta name="author" content="Công ty Thiết kế website Nhật Hà" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta name="GENERATOR" content="Công ty Sửa Chữa Điện Nước 356" />
    <link type="image/x-icon" href="{{ asset('images/favicon.ico') }}" rel="icon">

    <meta property="og:site_name" content="suadiennuocgiare365.com" />
    <meta property="og:locale" content="vi_VN" />
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <!-- Styles -->
    <link rel='stylesheet' id='menu-icons-extra-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/ot-flatsome-vertical-menu/libs/menu-icons/css/extra.min.css?ver=0.10.2' type='text/css' media='all' />
    <link rel='stylesheet' id='hrw-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/call-now-icon-animate/css.css' type='text/css' media='' />
    <link rel='stylesheet' id='contact-form-7-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-four-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/font-awesome-4-menus/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='ot-vertical-menu-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/ot-flatsome-vertical-menu/assets/css/ot-vertical-menu.css?ver=1.1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css'  href='https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-icons-css'  href='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/assets/css/fl-icons.css?ver=3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-woocommerce-wishlist-css'  href='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.css?ver=3.4' type='text/css' media='all' />
    <link rel='stylesheet' id='bfa-font-awesome-css'  href='//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'  href='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-shop-css'  href='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css'  href='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome-child/style.css?ver=3.6.0' type='text/css' media='all' />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{ asset('assets/menu/moby.min.css') }}" media="screen">--}}
    {{--    <link href="{{ asset('css/web/imagehover.css') }}" rel="stylesheet" media="screen">--}}
    {{--    <link href="{{ asset('css/web/jquery.mmenu.all.css') }}" rel="stylesheet" media="screen">--}}
    {{--    <link rel="stylesheet" href="{{ asset('/css/web/style.css') }}" media="screen">--}}
    @yield('link')
</head>
<body>
<div id="app" class="box-shadow-ql">
    <!-- Header -->
    @include('web.partinals.header')
    <!-- /.Header -->

    @yield('content')
    <!-- Main Footer -->
    @include('web.partinals.footer')

{{--    @include('web.components.offcanvas')--}}
    <nav id="navigation-menu">
        <ul>
{{--            @if(!empty(App\Models\MenuItem::getTree()))--}}
{{--                @foreach (App\Models\MenuItem::getTree() as $shop)--}}
{{--                    @include('web.components.menu.mobile', ['item'=>$shop])--}}
{{--                @endforeach--}}
{{--            @endif--}}
        </ul>
    </nav>
</div>
<!-- jQuery -->

<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.6.0'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.js?ver=3.4'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.6.0'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=3.6.0'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-includes/js/wp-embed.min.js?ver=4.9.15'></script>
<script type='text/javascript' src='https://mauweb.monamedia.net/precita/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
{{--<script src="{{ mix('js/app.js') }}"></script>--}}
<!-- Scripts -->
@yield('script')
<script>
    var logo = $('.logo-image img').attr('src');
    var template  = '<div class="moby-inner">';
    template +=      '<div class="head-menu-mobile">';
    template +=             '<img src="'+logo+'" class="img-fluid">';
    template +=     '<div class="moby-close"><span class="moby-close-icon"></span></div>'; // Reserved class for closing moby
    template +=     '</div>';
    template +=     '<div class="moby-wrap">';
    template +=             '<div class="moby-menu"></div>'; // Must be included in template
    template +=     '</div>';
    template += '</div>';

    var mobyMenu = new Moby({
        menu       : $('#navigation-menu'), // The menu that will be cloned
        mobyTrigger: $('#moby-button'), // Button that will trigger the Moby menu to open
        menuClass		 : 'left-side',
        subMenuOpenIcon : '<span><i class="fa fa-chevron-down"></i></span>',
        subMenuCloseIcon : '<span><i class="fa fa-chevron-up"></i></span>',
        template : template,
    });
    $(document).ready(function() {
        let toastrSuccsee = '{{ Session::get('success') }}';
        let toastrDanger = '{{ Session::get('danger') }}';
        if (toastrDanger.length > 0 || toastrSuccsee.length > 0) {
            if (toastrDanger.length > 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: toastrDanger,
                })
                toastr["error"](toastrDanger)
            } else {
                Swal.fire(
                    'Thành công!',
                    toastrSuccsee,
                    'success'
                )
            }
        }
    });
</script>
</body>
</html>

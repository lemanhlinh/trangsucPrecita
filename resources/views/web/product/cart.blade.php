@extends('web.layout')
@section('content')
    <main id="main" class="">



        <div class="checkout-page-title page-title" bis_skin_checked="1">
            <div class="page-title-inner flex-row medium-flex-wrap container" bis_skin_checked="1">
                <div class="flex-col flex-grow medium-text-center" bis_skin_checked="1">
                    <nav class="breadcrumbs heading-font checkout-breadcrumbs text-center h2 strong">
                        <a href="https://mauweb.monamedia.net/precita/cart/" class="current">Shopping Cart</a>
                        <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
                        <a href="https://mauweb.monamedia.net/precita/checkout/" class="hide-for-small">Checkout details</a>
                        <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
                        <a href="#" class="no-click hide-for-small">Order Complete</a>
                    </nav>
                </div><!-- .flex-left -->
            </div><!-- flex-row -->
        </div><!-- .page-title -->
        <div class="cart-container container page-wrapper page-checkout" bis_skin_checked="1"><div class="woocommerce" bis_skin_checked="1"><div class="text-center pt pb" bis_skin_checked="1">
                    <p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>		<p class="return-to-shop">
                        <a class="button primary wc-backward" href="https://mauweb.monamedia.net/precita/shop/">
                            Quay trở lại cửa hàng			</a>
                    </p>
                </div></div>
        </div>


    </main>
@endsection

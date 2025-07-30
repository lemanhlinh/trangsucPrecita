@extends('web.layout')
@section('link')

@endsection
@section('content')
<div class="shop-page-title category-page-title page-title " bis_skin_checked="1">

    <div class="page-title-inner flex-row  medium-flex-wrap container" bis_skin_checked="1">
        <div class="flex-col flex-grow medium-text-center" bis_skin_checked="1">
            <div class="is-large" bis_skin_checked="1">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="https://mauweb.monamedia.net/precita">Trang chủ</a> <span class="divider">/</span> Trang Sức</nav></div>
            <div class="category-filtering category-filter-row show-for-medium" bis_skin_checked="1">
                <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                    <i class="icon-menu"></i>
                    <strong>Lọc</strong>
                </a>
                <div class="inline-block" bis_skin_checked="1">
                </div>
            </div>
        </div><!-- .flex-left -->

        <div class="flex-col medium-text-center" bis_skin_checked="1">


            <p class="woocommerce-result-count hide-for-medium">
                Hiển thị 1–12 trong 26 kết quả</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <option value="popularity" selected="selected">Phổ biến nhất</option>
                    <option value="rating">Đánh giá cao nhất</option>
                    <option value="date">Mới nhất</option>
                    <option value="price">Giá thấp đến cao</option>
                    <option value="price-desc">Giá cao xuống thấp</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
        </div><!-- .flex-right -->

    </div><!-- flex-row -->
</div>
<main id="main" class="">
    <div class="row category-page-row" bis_skin_checked="1">

        <div class="col large-3 hide-for-medium " bis_skin_checked="1">
            <div id="shop-sidebar" class="sidebar-inner col-inner" bis_skin_checked="1">
                <aside id="nav_menu-7" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span><div class="is-divider small" bis_skin_checked="1"></div><div class="menu-danh-muc-san-pham-vertical-menu-container" bis_skin_checked="1"><ul id="menu-danh-muc-san-pham-vertical-menu-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-497"><a href="https://mauweb.monamedia.net/precita/">Home</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-487"><a href="https://mauweb.monamedia.net/precita/product-category/trang-suc/">Trang Sức</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-488"><a href="https://mauweb.monamedia.net/precita/product-category/trang-suc-cuoi/">Trang Sức Cưới</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-489"><a href="https://mauweb.monamedia.net/precita/product-category/trang-suc-kim-cuong/">Trang Sức Kim Cương</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-490"><a href="https://mauweb.monamedia.net/precita/product-category/qua-tang/">Quà Tặng</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-491"><a href="https://mauweb.monamedia.net/precita/loc-uu-dai-den-50/">Lốc ưu đãi đến 50%</a></li>
                        </ul></div></aside><aside id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter"><span class="widget-title shop-sidebar">Lọc theo giá</span><div class="is-divider small" bis_skin_checked="1"></div><form method="get" action="https://mauweb.monamedia.net/precita/product-category/trang-suc/">
                        <div class="price_slider_wrapper" bis_skin_checked="1">
                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="" bis_skin_checked="1"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;" bis_skin_checked="1"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                            <div class="price_slider_amount" bis_skin_checked="1">
                                <input type="text" id="min_price" name="min_price" value="1500000" data-min="1500000" placeholder="Giá thấp nhất" style="display: none;">
                                <input type="text" id="max_price" name="max_price" value="23600000" data-max="23600000" placeholder="Giá cao nhất" style="display: none;">
                                <button type="submit" class="button">Lọc</button>
                                <div class="price_label" style="" bis_skin_checked="1">
                                    Giá: <span class="from">1,500,000₫</span> — <span class="to">23,600,000₫</span>
                                </div>

                                <div class="clear" bis_skin_checked="1"></div>
                            </div>
                        </div>
                    </form></aside><aside id="woocommerce_products-2" class="widget woocommerce widget_products"><span class="widget-title shop-sidebar">Sản phẩm</span><div class="is-divider small" bis_skin_checked="1"></div><ul class="product_list_widget"><li>

                            <a href="https://mauweb.monamedia.net/precita/product/set-hoa-tai-mat-day-chuyen-stars/">
                                <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/13182-13184-cz-wg_2.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Set hoa tai &amp; mặt dây chuyền Stars</span>
                            </a>


                            <span class="woocommerce-Price-amount amount">2,350,000<span class="woocommerce-Price-currencySymbol">₫</span></span>
                        </li>
                        <li>

                            <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-vang-uranus/">
                                <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/e-0652-bt-wg.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Hoa tai vàng Uranus</span>
                            </a>


                            <del><span class="woocommerce-Price-amount amount">10,300,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">5,100,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                        </li>
                        <li>

                            <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-nile/">
                                <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/m0301e-di-wg.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Hoa tai kim cương Nile</span>
                            </a>


                            <del><span class="woocommerce-Price-amount amount">35,500,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">17,500,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                        </li>
                        <li>

                            <a href="https://mauweb.monamedia.net/precita/product/nhan-vang-the-bow/">
                                <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/7968358-cz-wg.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Nhẫn vàng The Bow</span>
                            </a>


                            <span class="woocommerce-Price-amount amount">6,540,000<span class="woocommerce-Price-currencySymbol">₫</span></span>
                        </li>
                        <li>

                            <a href="https://mauweb.monamedia.net/precita/product/day-chuyen-vang-filled-with-love/">
                                <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/kh-161n-cz-wg_1.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Dây chuyền vàng Filled with Love</span>
                            </a>


                            <span class="woocommerce-Price-amount amount">14,550,000<span class="woocommerce-Price-currencySymbol">₫</span></span>
                        </li>
                    </ul></aside>			</div><!-- .sidebar-inner -->
        </div><!-- #shop-sidebar -->

        <div class="col large-9" bis_skin_checked="1">
            <div class="shop-container" bis_skin_checked="1">

                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-3-hover" bis_skin_checked="1">

                    <div class="product-small col has-hover post-201 product type-product status-publish has-post-thumbnail product_cat-day-chuyen-da-cz product_cat-day-chuyen-vong-co product_cat-trang-suc first instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/day-chuyen-abundance-of-love/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-201" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=201" rel="nofollow" data-product-id="201" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="201" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/day-chuyen-abundance-of-love/">Dây chuyền Abundance of Love</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">4,650,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-199 product type-product status-publish has-post-thumbnail product_cat-day-chuyen-da-quy-ngoc-trai product_cat-day-chuyen-vong-co product_cat-trang-suc instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-50%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/day-chuyen-kim-cuong-central-emerald/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-111884-diem-pg.jpg 1112w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-199" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=199" rel="nofollow" data-product-id="199" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="199" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/day-chuyen-kim-cuong-central-emerald/">Dây chuyền kim cương Central Emerald</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">16,698,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">8,349,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-197 product type-product status-publish has-post-thumbnail product_cat-day-chuyen-kim-cuong product_cat-day-chuyen-vong-co product_cat-trang-suc instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-50%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/day-chuyen-kim-cuong-cupid/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-n-112225-di-wg.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-197" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=197" rel="nofollow" data-product-id="197" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="197" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/day-chuyen-kim-cuong-cupid/">Dây chuyền kim cương Cupid</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">10,500,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">5,200,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-208 product type-product status-publish has-post-thumbnail product_cat-bo-trang-suc product_cat-chung-loai-khac product_cat-trang-suc last instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-50%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/full-set-hoa-tai-holiday-box/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1-300x300.png 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1-150x150.png 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1-600x600.png 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1-100x100.png 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/1_1__1.png 700w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-208" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=208" rel="nofollow" data-product-id="208" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="208" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/full-set-hoa-tai-holiday-box/">Full Set Hoa Tai Holiday Box</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">21,600,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">10,800,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-250 product type-product status-publish has-post-thumbnail product_cat-mau-vang product_cat-trang-suc product_cat-vang first instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-51%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-agnes/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/h1283e-di-yg.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-250" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=250" rel="nofollow" data-product-id="250" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="250" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-agnes/">Hoa tai kim cương Agnes</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">9,500,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">4,700,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-293 product type-product status-publish has-post-thumbnail product_cat-hoa-tai product_cat-hoa-tai-kim-cuong product_cat-trang-suc instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-alana/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/07/h1286e-di-wy.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-293" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=293" rel="nofollow" data-product-id="293" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="293" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-alana/">Hoa tai kim cương Alana</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">23,600,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-180 product type-product status-publish has-post-thumbnail product_cat-hoa-tai product_cat-hoa-tai-kim-cuong product_cat-trang-suc instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-oriana/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-e-112393-di-wg.jpg 1112w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-180" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=180" rel="nofollow" data-product-id="180" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="180" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-oriana/">Hoa tai kim cương Oriana</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">20,000,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-182 product type-product status-publish has-post-thumbnail product_cat-hoa-tai product_cat-hoa-tai-da-quy-ngoc-trai product_cat-trang-suc last instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-ruby-aonami/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4037e-diru-wg.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-182" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=182" rel="nofollow" data-product-id="182" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="182" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/hoa-tai-kim-cuong-ruby-aonami/">Hoa tai kim cương ruby Aonami</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">8,000,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-184 product type-product status-publish has-post-thumbnail product_cat-hoa-tai product_cat-hoa-tai-da-cz product_cat-trang-suc first instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/hoa-tai-vang-dancing-leaf/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/ds_pe00012-cz-pg.jpg 1112w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-184" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=184" rel="nofollow" data-product-id="184" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="184" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/hoa-tai-vang-dancing-leaf/">Hoa tai vàng Dancing Leaf</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">5,000,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-193 product type-product status-publish has-post-thumbnail product_cat-mat-day-chuyen product_cat-mat-day-chuyen-da-quy-ngoc-trai product_cat-trang-suc instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-50%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-kim-cuong-juno/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-113218-disa-wg.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-193" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=193" rel="nofollow" data-product-id="193" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="193" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-kim-cuong-juno/">Mặt dây chuyền kim cương Juno</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">15,700,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">7,800,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-191 product type-product status-publish has-post-thumbnail product_cat-mat-day-chuyen product_cat-mat-day-chuyen-kim-cuong product_cat-trang-suc instock sale shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                                <div class="callout badge badge-circle" bis_skin_checked="1"><div class="badge-inner secondary on-sale" bis_skin_checked="1"><span class="onsale">-39%</span></div></div>
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-kim-cuong-soonet/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-768x768.jpg 768w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-1024x1024.jpg 1024w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/sr-p-111249-di-wg.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-191" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=191" rel="nofollow" data-product-id="191" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="191" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-kim-cuong-soonet/">Mặt dây chuyền kim cương Soonet</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">9,300,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">5,630,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->

                    <div class="product-small col has-hover post-214 product type-product status-publish has-post-thumbnail product_cat-3-000-000d-5-000-000d product_cat-muc-gia product_cat-trang-suc last instock shipping-taxable purchasable product-type-simple" bis_skin_checked="1">
                        <div class="col-inner" bis_skin_checked="1">

                            <div class="badge-container absolute left top z-1" bis_skin_checked="1">
                            </div>
                            <div class="product-small box " bis_skin_checked="1">
                                <div class="box-image" bis_skin_checked="1">
                                    <div class="image-fade_in_back" bis_skin_checked="1">
                                        <a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-vang-arian/">
                                            <img width="300" height="300" src="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-300x300.jpg 300w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-150x150.jpg 150w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-600x600.jpg 600w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg-100x100.jpg 100w, https://mauweb.monamedia.net/precita/wp-content/uploads/2018/06/k4167p-czpf-wg.jpg 700w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover" bis_skin_checked="1">
                                        <div class="wishlist-icon" bis_skin_checked="1">
                                            <button class="wishlist-button button is-outline circle icon">
                                                <i class="icon-heart"></i>			</button>
                                            <div class="wishlist-popup dark" bis_skin_checked="1">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-214" bis_skin_checked="1">
                                                    <div class="yith-wcwl-add-button show" style="display:block" bis_skin_checked="1">


                                                        <a href="/precita/product-category/trang-suc/?add_to_wishlist=214" rel="nofollow" data-product-id="214" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt">
                                                            Yêu Thích</a>
                                                        <img src="https://mauweb.monamedia.net/precita/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                    </div>

                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" bis_skin_checked="1">
                                                        <span class="feedback">Product added!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none" bis_skin_checked="1">
                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                        <a href="https://mauweb.monamedia.net/precita/wishlist/" rel="nofollow">
                                                            Browse Wishlist	        </a>
                                                    </div>

                                                    <div style="clear:both" bis_skin_checked="1"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse" bis_skin_checked="1"></div>

                                                </div>

                                                <div class="clear" bis_skin_checked="1"></div>			</div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover" bis_skin_checked="1">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover" bis_skin_checked="1">
                                        <a class="quick-view quick-view-added" data-prod="214" href="#quick-view">Quick View</a>			</div>
                                </div><!-- box-image -->

                                <div class="box-text box-text-products text-center grid-style-2" bis_skin_checked="1">
                                    <div class="title-wrapper" bis_skin_checked="1"><p class="name product-title"><a href="https://mauweb.monamedia.net/precita/product/mat-day-chuyen-vang-arian/">Mặt dây chuyền vàng Arian</a></p></div><div class="price-wrapper" bis_skin_checked="1">
                                        <span class="price"><span class="woocommerce-Price-amount amount">2,936,000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                    </div>		</div><!-- box-text -->
                            </div><!-- box -->
                        </div><!-- .col-inner -->
                    </div><!-- col -->
                </div><!-- row --><div class="container" bis_skin_checked="1">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center"><li><span aria-current="page" class="page-number current">1</span></li><li><a class="page-number" href="https://mauweb.monamedia.net/precita/product-category/trang-suc/page/2/">2</a></li><li><a class="page-number" href="https://mauweb.monamedia.net/precita/product-category/trang-suc/page/3/">3</a></li><li><a class="next page-number" href="https://mauweb.monamedia.net/precita/product-category/trang-suc/page/2/"><i class="icon-angle-right"></i></a></li></ul></nav>
                </div>

            </div><!-- shop container -->
        </div>
    </div>

</main>
@endsection
@section('script')
    {{--    <script src="{{ asset('assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/wow.min.js') }}"></script>--}}

@endsection

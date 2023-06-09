<div class="header">
    <div class="topbar">
        <div class="topbar_place">
            <i class="fas fa-map-marker"></i> 147D, Tân Lập 2, phường Hiệp Phú, quận 9, TP Thủ Đức, TP HCM
        </div>

        <div class="topbar_media">
            <div class="media_phone">
                <i class="fas fa-phone"></i>
                <span>0123456789</span>
            </div>
            <div class="media_fb">
                <a href><i class="fab fa-facebook-f color-while"></i></a>
                <div class="media_fb_hover media_hover_topleft">
                    <span>Follow on Facebook</span>
                    <div class="media-hover-square"></div>
                </div>
            </div>

            <div class="media_insta">
                <a href><i class="fab fa-instagram color-while"></i></a>
                <div class="media_insta_hover media_hover_topleft">
                    <span>Follow on Instagram</span>
                    <div class="media-hover-square"></div>
                </div>
            </div>

            <div class="media_twitter">
                <a href><i class="fab fa-twitter color-while"></i></a>
                <div class="media_twitter_hover media_hover_topleft">
                    <span>Follow on Twitter</span>
                    <div class="media-hover-square"></div>
                </div>
            </div>

            <div class="media_ytb">
                <a href><i class="fab fa-youtube color-while"></i></a>
                <div class="media_ytb_hover media_hover_topleft">
                    <span>Follow on Youtube</span>
                    <div class="media-hover-square"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="header_main">
        <div class="header_inner">
            <div class="header_logo">
                <img class="header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
            </div>

            <div class="header_center">
                <div class="header_search">
                    <input type="search" class="search_web" placeholder="Tìm kiếm">
                </div>

                <div class="header_search_logo">
                    <button class="search_btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>

            <div class="header_right" >
                <div class="cart" >
                    <a href="./cart.php" class="cart_text">Giỏ Hàng</a>

                    <div class="cart_box">
                        <div class="logo_cart" ><a href="./cart.php">0</a></div>
                    </div>
                </div>
                <div class="header_signin">
                    <a href="{{URL::to('/logout')}}"><button class="btn_login js-btn-register" >Logout</button></a>
                </div>

            </div>

        </div>


    </div>

    <div class="menu">
        <a href="{{URL::to('/admin')}}" id="home" class="header_home_text">
            <span>TRANG CHỦ</span>
        </a>
        <a href="{{URL::to('/admin/dienthoai')}}" id="phone" class="header_home_text">
            <span>ĐIỆN THOẠI</span>
        </a>
        <a href="{{URL::to('/admin/laptop')}}" id="laptop" class="header_home_text">
            <span>LAPTOP</span>
        </a>
        <a href="{{URL::to('/admin/tablet')}}" id="tablet" class="header_home_text">
            <span>MÁY TÍNH BẢNG</span>
        </a>
        <a href="{{URL::to('/admin/phukien')}}" id="phukien" class="header_home_text">
            <span>PHỤ KIỆN</span>
        </a>
        <a href="{{URL::to('/admin/contact')}}" id="contact" class="header_home_text">
            <span>LIÊN HỆ</span>
        </a>
    </div>
</div>

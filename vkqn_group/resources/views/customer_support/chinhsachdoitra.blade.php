<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('allcode.headcustommer')
</head>

<body>
    <div class="all">
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

                    <div class="header_right">
                        <div class="cart">
                            <span class="cart_text">Giỏ Hàng</span>

                            <div class="cart_box">
                                <div class="logo_cart">0</div>
                            </div>
                        </div>

                        <div class="header_signin">
                            <button class="btn_login">Đăng Ký</button>
                        </div>

                        <div class="header_login">
                            <button class="btn_login">Đăng Nhập</button>
                        </div>
                    </div>

                </div>


            </div>

            <div class="menu">
                <a href="../index.php" id="home" class="header_home_text">
                    <span>TRANG CHỦ</span>
                </a>
                <a href="../dienthoai.php" id="phone" class="header_home_text">
                    <span>ĐIỆN THOẠI</span>
                </a>
                <a href="../laptop.php" id="laptop" class="header_home_text">
                    <span>LAPTOP</span>
                </a>
                <a href="../tablet.php" id="tablet" class="header_home_text">
                    <span>MÁY TÍNH BẢNG</span>
                </a>
                <a href="../phukien.php" id="phukien" class="header_home_text">
                    <span>PHỤ KIỆN</span>
                </a>
                <a href="../contact.php" id="contact" class="header_home_text">
                    <span>LIÊN HỆ</span>
                </a>
            </div>
        </div>

        <div class="main">
            <h1 class="heading_main">Chính sách đổi trả</h1>
            <div class="content_main">
                <h2 class="content_heading">1. Đầu tiên:</h2>
                <div class="content_text">
                    <div>
                        Nếu quý khách có nhu cầu đổi trả hàng, vui lòng thông báo ngay cho bộ phận chăm sóc khách hàng của DreamTeam trong vòng 3 ngày kể từ thời điểm nhận hàng thông qua fanpage: https://www.facebook.com/dreamteam/ . Sau khi nhận được yêu cầu đổi / trả, bộ phận Hỗ trợ khách hàng sẽ phản hồi khách hàng trong vòng 24 giờ làm việc.
                    </div>
                </div>

                <h2 class="content_heading">2. Chính sách đổi trả</h2>
                <div class="content_text">
                    <h3 class="headingVi">DreamTeam không hỗ trợ đổi trả trong các trường hợp sau:</h3>
                    <div class="textVi">
                        <ul>
                            <li>Sản phẩm đã qua sử dụng.</li>
                            <li>Các sản phẩm là quà tặng miễn phí.</li>
                            <li>Khách hàng không ưng ý / không thích sản phẩm.</li>
                            <li>Với trường hợp khách hàng bị dị ứng với sản phẩm, khách hàng có thể liên hệ công ty để đổi sản phẩm khác hoặc được hoàn lại tiền trong vòng 14 ngày kể từ ngày mua hàng và phải có giấy xác nhận của bác sĩ chuyên khoa da liễu về các thành phần không đảm bảo quy định về an toàn dược mỹ phẩm của nhà nước Việt Nam do Cục Quản lí Dược của Bộ Y Tế ban hành.</li>
                        </ul>
                    </div>

                    <div class="texttext">
                        Trong vòng 05 ngày làm việc, kể từ ngày nhận được thông báo xác nhận yêu cầu đổi/trả từ bộ phận Hỗ trợ khách hang, khách hàng vui lòng gửi sản phẩm cần đổi/trả về địa chỉ: Số 5A, đường 30/4, phường ABC, quận X, TP YZ. Nếu sản phẩm gửi trả ngoài thời gian hiệu lực, bộ phận Hỗ trợ khách hàng của chúng tôi xin từ chối xử lý.
                    </div>

                    <div class="texttext">
                        DreamTeam sẽ xử lý việc đổi trả sản phẩm trong vòng 07 ngày làm việc kể từ ngày nhận được sản phẩm đổi/trả của khách hàng. Đối với trường hợp cần hoàn tiền lại cho khách hàng, DreamTeam sẽ tiến hành xử lý và hoàn tất việc hoàn trả tiền cho khách hàng trong vòng 30 ngày.
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            @include('allcode.footer')
        </div>
    </div>

    @include('allcode.linkfooter')

</body>

</html>

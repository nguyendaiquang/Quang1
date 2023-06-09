<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Liên Hệ</title>
</head>

<body>
    <div class="all">
        @include('allcode.headchungdn')
        <div class="main">
            <div class="contact_top">
                <h1>Liên Hệ Với Chúng Tôi Qua Hotline</h1>

                <div class="topbar_media topbar_contact">
                    <div class="media_fb contact_border">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_insta contact_border">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_twitter contact_border">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_ytb contact_border">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="contact_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.641108905958!2d108.21987141482933!3d16.03218748890388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ee598df9c5%3A0xaadb53409be7c909!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaeG6v24gdHLDumMgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1647180025658!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="contact_bottom">
                <div id="contact">
                    <div class="content-section">
                        <h2 class="section-heading text-color">CONTACT</h2>
                        <p class="section-sub-heading text-color">
                            I'd like your feedback!!!
                        </p>
                        <div class="row contact-content">
                            <div class="col col-half contact-info">
                                <p><i class="fa-solid fa-location-dot"></i> Da Nang, VN</p>
                                <p><i class="fa fa-phone"></i> Phone: +84 123456789</p>
                                <p><i class="fa-solid fa-envelope"></i> Email: dreamteam@mail.com</p>
                            </div>
                            <div class="col col-half contact-form">
                                <form action="">
                                    <div class="row mt">
                                        <div class="col col-half">
                                            <input type="text" name="" placeholder="Name" required="" id="" class="form-control">
                                        </div>
                                        <div class="col col-half">
                                            <input type="email" name="" placeholder="Email" required="" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col col-half mt_8">
                                            <input type="text" name="" placeholder="Phone" required="" id="" class="form-control">
                                        </div>
                                        <div class="col col-half mt_8">
                                            <input type="email" name="" placeholder="Address" required="" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col col-full mt_8">
                                            <input type="text" name="" placeholder="Messaga" required="" id="" class="form-control">
                                        </div>
                                    </div>
                                    <input class="form-submit" type="submit" value="SEND">
                                </form>
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="footer_container">
                <div class="footer_link footer_item">
                    <h3 class="footer_heading ">LIÊN KẾT</h3>
                    <ul>
                        <li><a href="./">Trang chủ</a></li>
                        <li><a href="./dienthoai">Điện thoại</a></li>
                        <li><a href="./laptop">Laptop</a></li>
                        <li><a href="./tablet">Máy tính bảng</a></li>
                        <li><a href="./phukien">Phụ kiện</a></li>
                        <li><a href="./contact">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="footer_info footer_item">
                    <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                    <ul>
                        <li><a href="">Giới thiệu DreamTeam</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                    </ul>
                </div>

                <div class="footer_support footer_item">
                    <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                    <ul>
                        <li><a href="">Giao hàng và thanh toán</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Hướng dẫn đặt hàng</a></li>
                        <li><a href="">Hướng dẫn bán hàng</a></li>
                    </ul>
                </div>

                <div class="footer_contact footer_item">
                    <h3 class="footer_heading">THÔNG TIN LIÊN HỆ</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> 666 ABC3 Nguyễn Hữu Thọ, Phường 22, Hải Châu, Tp.Đà Nẵng</li>
                        <li><i class="fa fa-phone"></i><a href="tel:0123456789"> 0123 456 789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:dreamteam@gmail.com"> dreamteam@gmail.com</a></li>
                        <li><i class="fab fa-facebook"></i><a href=""> Facebook</a></li>
                        <li><i class="fab fa-instagram"></i><a href=""> Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_copyright">Copyright © 2022 Bản quyền thuộc về DreamTeam
                <!-- © Bản quyền thuộc về Trần Cường, Nguyễn Thanh Tiến, Đỗ Vạn Lâm -->
            </div>
        </div>
    </div>

    <script src="./assets/js/media.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>

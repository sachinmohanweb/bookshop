<footer>
    <div class="container">
        <div class="find flex-wrap">
            <div class="col-lg-5 col-12">
                <h3>Can’t Find What You Are <br>Looking For?... Request Book</h3>
            </div>
            <div class="col-lg-7 col-12">
                <div class="request flex-wrap">
                    <div class="col-md-9 col-12">
                        <input type="text">
                    </div>
                    <div class="col-md-3 col-12">
                        <button> Request</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-menu d-flex justify-content-between flex-wrap">
            <ul class="f-navigation">
                <li><a href="">Home</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul class="f-social">
                <li><a href=""><img src="{{ asset('website/img/fb.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('website/img/tw.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('website/img/insta.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('website/img/youtube.png')}}" alt=""></a></li>
            </ul>
        </div>
        <div class="footer-bottom flex-wrap">
            <div class="col-lg-6 col-12">
                <div class="bottom-footer-info d-flex justify-content-between align-items-center">
                    <p> ©<script>document.write(new Date().getFullYear());</script>  Monito. All rights reserved</p>
                    <div class="f-logo">
                        <img src="{{ asset('website/img/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <ul>
                    <li><a href="">Vender Code</a></li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('website/js/main.js')}}"></script>
<script src="{{ asset('website/js/script1.js')}}"></script>

<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            autoplay: false, 
            dots: true,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);

        sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: 6,
            dots: false,
            nav: false,
            smartSpeed: 200,
            slideSpeed: 500,
            responsive: {
                0: {
                    items: 4,
                },
                600: {
                    items: 4,
                },
                991: {
                    items:5,
                },
                1000: {
                    items: 6,
                }
            },
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {

            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

        //end block

            sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
         
</script>
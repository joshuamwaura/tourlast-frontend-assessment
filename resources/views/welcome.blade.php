{{-- index.blade.php (fixed) --}}
@include('Frontend.layouts.header_booking')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="{{ asset('booking/css/style.css') }}" />
<style>
    .cart_tittle h4 {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        line-height: 1.3;
    }

    .cart_tittle strong {
        color: var(--primary-blue);
    }

    .claim_alloffer .btn {

        border: none;
        padding: 14px 32px;
        border-radius: 8px;
        font-weight: 600;
        color: white;
        font-size: 1rem;
    }

    .claim_alloffer .btn:hover {
        background: var(--secondary-blue);
        transform: translateY(-2px);
        color: var(--primary);
    }

    .offer_amount_item {
        background: white;
        padding: 20px 28px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .offer_amount_item h5 {
        font-size: 0.85rem;
        color: var(--text-gray);
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .offer_amount_item span {
        font-size: 2.2rem;
        font-weight: 800;
        color: #FF6B35;
        display: block;
    }

    /* Sections */
    /* .offer_hotel_sec,
    .popular_attractions_sec,
    .tour_packages_sec,
    .why_choose_sec {
        padding: 70px 0;
    } */
    .offer_hotel_sec {
        margin-top: 20px;
    }

    .popular_attractions_sec {
        background: var(--light-blue);
    }

    .main_tiltle {
        text-align: left;
        margin-bottom: 10px;
    }

    .main_tiltle h3 {
        /* font-size: clamp(1.8rem, 4vw, 2.5rem); */
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0px;

    }

    .main_tiltle p {
        color: var(--text-gray);
        font-size: 1.05rem;
    }

    /* Offer Banners */
    .offer_banner_item img {
        border-radius: 14px;
        width: 100%;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        transition: transform 0.3s ease;
    }

    .offer_banner_item img:hover {
        transform: translateY(-4px);
    }

    /* City Image Cards - Large with overlay */
    .city_card {
        position: relative;
        height: 280px;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .city_card:hover {
        transform: translateY(-6px);
    }

    .city_card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .city_card_overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 100%);
        padding: 25px;
    }

    .city_card_overlay h4 {
        color: white;
        font-size: 1.8rem;
        font-weight: 700;
        margin: 0;
    }

    /* Popular Hotel/Apartment Cards - Grid Style */
    /* .popular_grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .popular_item {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .popular_item:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.15);
    }

    .popular_item_img {
        height: 200px;
        overflow: hidden;
    }

    .popular_item_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .popular_item:hover .popular_item_img img {
        transform: scale(1.1);
    }

    .popular_item_content {
        padding: 18px;
    } */

    .item_rating {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
        font-size: 0.9rem;
        color: var(--text-gray);
    }

    .item_rating .stars {
        color: #FFA500;
        font-weight: 600;
    }

    .popular_item_content h5 {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .item_price {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 12px;
        border-top: 1px solid var(--border-light);
    }

    .item_price .label {
        font-size: 0.85rem;
        color: var(--text-gray);
    }

    .item_price .price {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--primary-blue);
    }

    /* Carousel wrapper */
    /* .popular-carousel {
    position: relative;
    display: flex;
    align-items: center;
} */

    /* Make grid scrollable horizontally */
    /* Carousel wrapper */
    .popular-carousel {
        position: relative;
        display: flex;
        align-items: center;
    }

    /* Scrollable grid */
    .popular_grid {
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: minmax(260px, 1fr);
        gap: 25px;
        /* margin-top: 30px; */
        margin-bottom: 30px;
        overflow-x: auto;
        scroll-behavior: smooth;
        /* padding: 10px 0; */

        scrollbar-width: none;
    }

    .popular_grid::-webkit-scrollbar {
        display: none;
    }

    /* Card */
    .popular_item {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .popular_item:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.15);
    }

    /* Image wrapper (FIXED) */
    .popular_item_img {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .popular_item_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .popular_item:hover .popular_item_img img {
        transform: scale(1.1);
    }

    /* Content */
    .popular_item_content {
        padding: 18px;
    }

    /* Arrows */
    .popular-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.55);
        color: #fff;
        border: none;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 5;

        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .popular-arrow.show {
        opacity: 1;
        pointer-events: auto;
    }

    .popular-arrow.left {
        left: -20px;
    }

    .popular-arrow.right {
        right: -20px;
    }

    .popular-arrow:hover {
        background: var(--primary-blue);
    }

    /* Like button */
    .like-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 3;
    }

    .like-btn i {
        font-size: 18px;
        color: #444;
        transition: all 0.3s ease;
    }

    .like-btn.active i {
        color: #e63946;
    }

    .like-btn:hover i {
        transform: scale(1.2);
    }

    /* Tour Packages */
    .package_dropdown {
        background: #E8F4F8;
        border-radius: 12px;
        margin-bottom: 20px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    }

    .package_header {
        background: white;
        padding: 18px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 2px solid var(--light-blue);
    }

    .package_header h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin: 0;
    }

    .package_header .icon {
        font-size: 1.2rem;
    }

    .package_content {
        padding: 20px 25px;
    }

    .package_content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .package_content li {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        font-size: 0.95rem;
    }

    .package_content li:last-child {
        border-bottom: none;
    }

    .package_content .price {
        font-weight: 700;
        color: var(--primary-blue);
    }

    /* Why Choose Section */
    .why_choose_sec {
        background: var(--light-blue);
    }

    .why_grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .why_item {
        background: white;
        padding: 30px 20px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease;
    }

    .why_item:hover {
        transform: translateY(-5px);
    }

    .why_icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #0A4D8C, #2E7AB8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
    }

    .why_item h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .why_item p {
        font-size: 0.9rem;
        color: var(--text-gray);
        line-height: 1.5;
        margin: 0;
    }

    /* App Download Section */
    .app_download_area {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        margin-top: 50px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .app_info h4 {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
    }

    .app_info p {
        color: var(--text-gray);
        margin-bottom: 20px;
    }

    .app_buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .app_buttons img {
        height: 45px;
        cursor: pointer;
    }

    .qr_area {
        text-align: center;
    }

    .qr_code {
        width: 180px;
        height: 180px;
        background: #f5f5f5;
        border: 2px solid var(--border-light);
        border-radius: 12px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
    }

    .qr_area p {
        color: var(--text-gray);
        font-size: 0.9rem;
    }

    /* Swiper */
    .swiper-pagination-bullet {
        background: var(--primary-blue);
        opacity: 0.3;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }

    .offer-card-wrapper {
        height: 100%;
        /* control card height */
    }

    .offer-card {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        border-radius: 14px;

    }



    /* Make image fill full height */
    .offer-card img {
        width: 100%;
        height: 100%;
        display: block;
    }

    /* Button on image */
    .offer-btn {
        position: absolute;
        bottom: 16px;
        left: 16px;
        margin-left: 10px;
        margin-bottom: 10px;
        padding: 9px 18px;
        font-size: 14px;
        font-weight: 500;

        background: rgba(0, 0, 0, 0.55);
        color: #fff;
        text-decoration: none;
        border-radius: 6px;

        backdrop-filter: blur(6px);
        transition: all 0.25s ease;
    }

    /* Hover */
    .offer-btn:hover {
        background: #fff;
        color: #000;
    }

    /* The new css */
    .offer-carousel {
        position: relative;
        display: flex;
        align-items: center;
    }

    .offer-viewport {
        overflow: hidden;
        width: 100%;
    }

    .offer-track {
        display: flex;
        gap: 16px;
        /* space ONLY between cards */
        transition: transform 0.4s ease;
    }

    /* Each card = 50% viewport width (2 visible) */
    .offer-card-wrapper {
        flex: 0 0 calc(50% - 12px);

        height: 100%;
        padding: 0;

    }

    /* .offer-card {
    position: relative;
    height: 100%;
    overflow: hidden;
    border-radius: 14px;
}

.offer-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
} */

    /* Button overlay */
    .offer-btn {
        position: absolute;
        bottom: 16px;
        left: 16px;
        padding: 9px 18px;
        background: rgba(0, 0, 0, 0.55);
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        backdrop-filter: blur(6px);
    }

    /* Carousel wrapper */
    .offer-carousel {
        position: relative;
    }

    /* Arrows overlay on cards */
    .carousel-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);

        background: rgba(0, 0, 0, 0.55);
        color: #fff;
        border: none;

        width: 42px;
        height: 42px;
        border-radius: 50%;

        cursor: pointer;
        font-size: 20px;
        z-index: 5;

        display: flex;
        align-items: center;
        justify-content: center;

        transition: opacity 0.25s ease, visibility 0.25s ease;
    }

    /* Left & right positioning */
    .carousel-arrow.left {
        left: 12px;
    }

    .carousel-arrow.right {
        right: 12px;
    }

    /* Hidden state */
    .carousel-arrow.hidden {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .banner_sec {
            padding: 60px 0 100px;
        }

        .bg_lightblue.main_offer_cart {
            flex-direction: column;
            text-align: center;
        }

        .offer_amount_item {
            width: 100%;
        }

        .popular_grid {
            grid-template-columns: 1fr;
        }

        .city_card {
            height: 220px;
        }

        .app_download_area {
            grid-template-columns: 1fr;
        }

        .why_grid {
            grid-template-columns: 1fr;
        }
    }

    /* .p-20 {
        padding: 70px 0;
    } */

    .p-0 {
        padding: 0;
    }

    /* a {
    text-decoration: none;
} */

    .app-promo-modern {
        padding: 90px 0;
        /* background: linear-gradient(135deg, #f8fafc, #eef2f7); */
        position: relative;

        opacity: 90%;
        background-color: #0c5295;
        overflow: hidden;
        /* background-color: var(--primary); */
        background-image: url('/booking/img/sahara_image 1.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .app-promo-modern::before {
        content: "";
        position: absolute;
        inset: 0;
        /* top:0; right:0; bottom:0; left:0 */
        opacity: 85%;
        background-color: #eef2f7;
        z-index: 1;
    }

    .app-promo-modern>* {
        position: relative;
        z-index: 2;
    }

    .app-modern-wrap {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        align-items: center;
        gap: 60px;
    }

    /* Content */
    .app-modern-content {
        max-width: 520px;
    }

    .app-pill {
        display: inline-block;
        padding: 6px 14px;
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 50px;
        background: rgba(0, 150, 136, 0.12);
        color: var(--primary);
        margin-bottom: 18px;
    }

    .app-modern-content h2 {
        font-size: 2.8rem;
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    .app-modern-content h2 span {
        color: var(--primary);
    }

    .app-modern-content p {
        font-size: 1.05rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 32px;
    }

    /* Actions */
    .app-modern-actions {
        display: flex;
        gap: 20px;
    }

    .store-btn img {
        height: 54px;
        transition: transform 0.25s ease;
    }

    .store-btn:hover img {
        transform: translateY(-4px);
    }

    /* Visual */
    .app-modern-visual {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .app-modern-visual img {
        max-width: 320px;
        width: 100%;
        filter: drop-shadow(0 25px 40px rgba(0, 0, 0, 0.15));
    }

    /* Responsive */
    @media (max-width: 992px) {
        .app-modern-wrap {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .app-modern-content {
            margin: 0 auto;
        }

        .app-modern-actions {
            justify-content: center;
        }

        .app-modern-visual img {
            max-width: 260px;
            margin-top: 40px;
        }
    }


    .attractionsApartment {
        padding-bottom: 40px;
    }
</style>
<section class="main_banner">
    @php
        $hotelPopularQuery = App\Models\Hotel::with('amenity')
            ->whereIn('rating_star', [5, 4, 3])
            ->where('is_popular', '1')
            ->where('status', 'Active')
            ->where('hotel_status', '1')
            ->inRandomOrder()
            ->limit(5)
            ->get();

        $homeQuery = App\Models\Pages::first();
        $queryData = $homeQuery ? json_decode($homeQuery->content, true) : [];

        $citiesQuery = App\Models\Cities::where('type', 'hotel')->where('status', 'Active')->get();
        $citiesApartmentQuery = App\Models\Cities::where('type', 'apartment')->where('status', 'Active')->get();

        $apartmentPopularQuery = App\Models\Apartment::with('amenity')
            ->where('is_popular', '1')
            ->where('status', 'Active')
            ->where('apartment_status', '1')
            ->inRandomOrder()
            ->limit(5)
            ->get();
    @endphp

    <div class="banner_sec">
        <div class="container">
            <div class="banner_title" id="flightLine">
                <h2>Your Gateway to Cheap Flights</h2>
                <p>Save more and book flights effortlessly</p>
            </div>

            <div class="banner_title" id="hotelLine" style="display: none;">
                <h2>Your Perfect Stay, One Click Away</h2>
                <p>Book cheap hotels and create lasting holiday memories</p>
            </div>

            <div class="banner_title" id="apartmentLine" style="display: none;">
                <h2>Save More, Stay Comfortably</h2>
                <p>Find exclusive deals and save on every apartment booking</p>
            </div>

            <!-- banner tabs / form placeholder (keep markup you already have) -->

        </div>
    </div>
</section>

@include('Frontend.User.filter_navbar')

<section class="offer_sec p-0">
    <div class="container">
        <div class="popular_features_tab">
            <div class="main_tiltle">
                <h3>Exclusive offers</h3>
                <p>Discover promotions, deals, and special offers crafted for you</p>
            </div>
        </div>

        <div class="bg_lightblue main_offer_cart">
            <div class="cart_tittle">
                <h4>Save big on your <br><strong>First Booking</strong></h4>
            </div>
            <div class="offer_img">
                <div class="claim_alloffer drop_hed_new">
                    <button class="btn btn-secondary" data-bs-toggle="modal" href="#login" role="button">Sign in and
                        Claim</button>
                </div>
            </div>

            <div class="offer_amount_item">
                <div>
                    <h5>Save</h5>
                    <img style="width: 40px;" src="{{ asset('booking/img/discount.png') }}" alt="">
                </div>
                <span>15%</span>
            </div>
        </div>
    </div>
</section>

{{-- <section class="offer_hotel_sec">
    <div class="container">
        <div class="offer-card-row">

            <div class="offer-card-wrapper">
                <div class="offer-card">
                    <img src="{{ asset('booking/img/banner2.png') }}" alt="Offer Image">
                </div>
            </div>

            <div class="offer-card-wrapper">
                <div class="offer-card">
                    <img src="{{ asset('booking/img/banner3.png') }}" alt="Offer Image">
                </div>
            </div>

        </div>
    </div>
</section> --}}
<section class="offer_hotel_sec">
    <div class="container">

        <div class="offer-carousel">

            <!-- Left arrow -->
            <button class="carousel-arrow left" aria-label="Previous">
                &#10094;
            </button>

            <!-- Cards viewport -->
            <div class="offer-viewport">
                <div class="offer-track">

                    <div class="offer-card-wrapper">
                        <div class="offer-card">
                            <img src="{{ asset('booking/img/banner2.png') }}" alt="">
                            <a href="#" class="offer-btn">Learn more</a>
                        </div>
                    </div>

                    <div class="offer-card-wrapper">
                        <div class="offer-card">
                            <img src="{{ asset('booking/img/banner3.png') }}" alt="">
                            <a href="#" class="offer-btn">Learn more</a>
                        </div>
                    </div>

                    <!-- add more cards -->
                    <div class="offer-card-wrapper">
                        <div class="offer-card">
                            <img src="{{ asset('booking/img/banner2.png') }}" alt="">
                            <a href="#" class="offer-btn">Learn more</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right arrow -->
            <button class="carousel-arrow right" aria-label="Next">
                &#10095;
            </button>

        </div>

    </div>
</section>

{{-- City Grid (Nairobi left, two stacked on right) --}}
<section class="city-wrapper">
    <div class="main_tiltle">
        <h3>Exclusive offers</h3>
        <p>Discover promotions, deals, and special offers crafted for you</p>
    </div>
    <div class="city-grid">
        <!-- Left: Big Nairobi Card -->
        <a href="/booking/user/hotel-listing?hotel=hotel&destination=Nairobi%2C+Kenya&latitude=-1.2920659&longitude=36.8219462"
            class="left-column">

            <div class="city-card big">
                <img src="/booking/img/nairobi.webp" alt="Nairobi">
                <div class="city-title">Nairobi</div>
            </div>
        </a>
        <!-- Right Column -->
        <div class="right-column">
            <a
                href="/booking/user/hotel-listing?hotel=hotel&destination=Mombasa%2C+Kenya&latitude=-4.0434771&longitude=39.6682065">

                <div class="city-card small">
                    <img src="/booking/img/mombasa.webp" alt="Mombasa">
                    <div class="city-title">Mombasa</div>
                </div>
            </a>
            <a
                href="/booking/user/hotel-listing?hotel=hotel&destination=Nakuru%2C+Kenya&latitude=-0.3030988&longitude=36.080026">

                <div class="city-card small">
                    <img src="/booking/img/nakuru.webp" alt="Nakuru">
                    <div class="city-title">Nakuru</div>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Popular apartments (if any) --}}
{{-- @if ($apartmentPopularQuery && $apartmentPopularQuery->isNotEmpty())
    <section class="" id="apartmentPopularQuery">
        <div class="container">
            <div class="popular_features_sec">
                <div class="popular_features_tab">
                    <div class="main_tiltle">
                        <h3>Popular apartment</h3>
                        <p>Your perfect stay, at the best price</p>
                    </div>
                </div>

                <div class="swiper mySwiper apartments-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($apartmentPopularQuery as $itemApartment)
                            <div class="swiper-slide">
                                <div class="popular_features_item">
                                    <a href="{{ route('booking.user.apartment_details', ['slug_url' => base64_encode($itemApartment->id)]) }}">
                                        <div class="popular_hotel_img">
                                            <img src="{{ asset($itemApartment->thumbnail) }}" alt="">
                                        </div>
                                    </a>
                                    <div class="popular_hotel_content">
                                        <div class="hotel_review">
                                            <span><img src="{{ asset('booking/img/star.svg') }}" alt="">5/5</span>
                                            <span>{{ $itemApartment->reviews->count() ?? '' }} reviews</span>
                                        </div>
                                        <div class="popular_features_title feature_price">
                                            <h4>{{ $itemApartment->apartment_name ?? '' }}</h4>
                                            <div class="price_box">
                                                <span>From</span>
                                                <h5>${{ number_format($itemApartment->main_price, 0) ?? '' }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add pagination/navigation if needed -->
                </div>
            </div>
        </div>
    </section>
@endif --}}

{{-- Popular hotels (if any) --}}
{{-- @if ($hotelPopularQuery && $hotelPopularQuery->isNotEmpty())
    <section class="" id="hotelPopularQuery">
        <div class="container">
            <div class="popular_features_sec">
                <div class="popular_features_tab">
                    <div class="main_tiltle">
                        <h3>Popular hotel</h3>
                        <p>Explore, book, save – best hotels worldwide</p>
                    </div>
                </div>

                <div class="swiper mySwiper hotels-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($hotelPopularQuery as $itemD)
                            <div class="swiper-slide">
                                <div class="popular_features_item">
                                    <a href="{{ route('booking.user.hotel_listing_details', ['slug_url' => base64_encode($itemD->id)]) }}">
                                        <div class="popular_hotel_img">
                                            <img src="{{ asset($itemD->thumbnail) }}" alt="">
                                        </div>
                                    </a>
                                    <div class="popular_hotel_content">
                                        <div class="hotel_review">
                                            <span><img src="{{ asset('booking/img/star.svg') }}" alt="">{{ $itemD->rating_star . '/5' }}</span>
                                            <span>{{ $itemD->reviews->count() ?? '' }} reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif --}}
<!-- Popular Attractions - Hotels Grid -->
{{-- @if ($hotelPopularQuery && $hotelPopularQuery->isNotEmpty())
    <section class="" id="hotelPopularQuery">
        <div class="container">
            <div class="main_tiltle">
                <h3>Popular Attractions</h3>
                <p>Explore, book, save – best hotels worldwide</p>
            </div>

            <div class="popular_grid">
                @foreach ($hotelPopularQuery as $hotel)
                    <div class="popular_item">
                        <a href="{{ route('booking.user.hotel_listing_details', ['slug_url' => base64_encode($hotel->id)]) }}?destination={{ urlencode($hotel->location) }}&latitude={{ $hotel->latitude }}&longitude={{ $hotel->longitude}}&check_in_d={{ date('D d M') }}&check_out_d={{ date('D d M', strtotime('+1 day')) }}&check_in={{ date('Y-m-d') }}&check_out={{ date('Y-m-d', strtotime('+1 day')) }}&adult=1+Adult%2C+0+Child%2C+0+Infant%2C+1+Room&adultsCount=1&childrenCount=0&infantsCount=0&roomsCount=1&parent_search=1&pageCount=1&_token={{ csrf_token() }}&hotel=hotel">
                            <div class="popular_item_img">
                                <img src="{{ asset($hotel->thumbnail) }}" alt="{{ $hotel->hotel_name }}">
                            </div>
                            <div class="popular_item_content">
                                <div class="item_rating">
                                    <span class="stars">★ {{ $hotel->rating_star }}/5</span>
                                    <span>{{ $hotel->reviews->count() ?? '0' }} reviews</span>
                                </div>
                                <h5>{{ $hotel->hotel_name }}</h5>
                                <div class="item_price">
                                    <span class="label">From</span>
                                    <span class="price">${{ number_format($hotel->minimum_price, 0) }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif --}}
@if ($hotelPopularQuery && $hotelPopularQuery->isNotEmpty())
    <section id="hotelPopularQuery">
        <div class="container">

            <div class="main_tiltle">
                <h3>Popular Attractions</h3>
                <p>Explore, book, save – best hotels worldwide</p>
            </div>

            <!-- Carousel Wrapper -->
            <div class="popular-carousel">

                <!-- Left Arrow -->
                <button class="popular-arrow left" onclick="scrollPopular(-1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Grid -->
                <div class="popular_grid" id="popularGrid">
                    @foreach ($hotelPopularQuery as $hotel)
                        <div class="popular_item">

                            <a href="#">

                                <!-- Image -->
                                <div class="popular_item_img">
                                    <img src="{{ asset($hotel->thumbnail) }}" alt="{{ $hotel->hotel_name }}">

                                    <!-- Like Button -->
                                    <button type="button" class="like-btn" onclick="toggleLike(event, this)">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                </div>

                                <!-- Content -->
                                <div class="popular_item_content">
                                    <div class="item_rating">
                                        <span class="stars">★ {{ $hotel->rating_star }}/5</span>
                                        <span>{{ $hotel->reviews()->count() ?? '0' }} reviews</span>
                                    </div>

                                    <h5>{{ $hotel->hotel_name }}</h5>

                                    <div class="item_price">
                                        <span class="label">From</span>
                                        <span class="price">${{ number_format($hotel->minimum_price, 0) }}</span>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Right Arrow -->
                <button class="popular-arrow right" onclick="scrollPopular(1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>
        </div>
    </section>
@endif




<section class="attractionsApartment" id="attractionsApartment">
    <div class="container">
        <div class="popular_features_sec" id="popular_featuresApartment">
            <div class="popular_features_tab">
                <div class="main_tiltle">
                    <h3>Tour Packages</h3>
                    <p>Visit anywhere, any time</p>
                </div>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                    @if ($citiesApartmentQuery && $citiesApartmentQuery->isNotEmpty())
                        @php
                            $citiesApartmentQuery1 = App\Models\Cities::where('type', 'apartment')
                                ->where('status', 'Active')
                                ->first();
                            $selectedCity =
                                request('city') ?? ($citiesApartmentQuery1 ? $citiesApartmentQuery1->name : '');
                        @endphp

                        @foreach ($citiesApartmentQuery as $key => $itemApartmentQuery)
                            {{-- <a href="{{ route('booking.user.apartment_details', ['slug_url' => base64_encode($itemApartmentQuery->id)]) }}?destination_apartment={{ urlencode($itemApartmentQuery->location) }}&latitude_apartment={{ $itemApartmentQuery->latitude }}&longitude_apartment={{ $itemApartmentQuery->longitude }}&check_in_apartment_d={{date('D d M')}}&check_out_apartment_d={{ date('D d M', strtotime('+1 day')) }}&check_in_apartment={{date('Y-m-d')}}&check_out_apartment={{ date('Y-m-d', strtotime('+1 day')) }}&adultsCountApartment=1&parent_search=1&pageCount=1&_token={{ csrf_token() }}&apartment=apartment"> --}}
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $selectedCity == $itemApartmentQuery->name ? 'active' : '' }}"
                                    id="pills-tabs{{ $key }}-tab" href="#" role="tab"
                                    aria-controls="pills-tabs{{ $key }}"
                                    aria-selected="{{ request('city') == $itemApartmentQuery->name ? 'true' : 'false' }}">
                                    {{ $itemApartmentQuery->name ?? '' }}
                                </a>
                            </li>
                            {{-- </a> --}}
                        @endforeach
                    @endif
                </ul>

            </div>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-tabs1" role="tabpanel"
                    aria-labelledby="pills-tabs1-tab">

                    <swiper-container class="popularfeatures_sld myswip_tb11" slides-per-view="4" space-between="15"
                        free-mode="true">
                        @php
                            $citiesApartmentQueryfirst2 = App\Models\Cities::where('type', 'apartment')
                                ->where('status', 'Active')
                                ->first();
                            $apartmentPopularsQuery = App\Models\Apartment::with('amenity')
                                ->where('apartment_status', '1')
                                // ->whereDate('toDateValidity', '>=', date('Y-m-d'))
                                ->inRandomOrder();

                            if (request('latitude') && request('longitude')) {
                                $latitude = request('latitude');
                                $longitude = request('longitude');
                                $radius = 100; // 100 km

                                $apartmentPopularsQuery->whereRaw(
                                    "
                                    (6371 * acos(cos(radians(?)) * cos(radians(latitude))
                                    * cos(radians(longitude) - radians(?)) + sin(radians(?))
                                    * sin(radians(latitude))))
< ?",
                                    [$latitude, $longitude, $latitude, $radius],
                                );
                            } else {
                                $latitude = $citiesApartmentQueryfirst2->latitude;
                                $longitude = $citiesApartmentQueryfirst2->longitude;
                                $radius = 100; // 100 km

                                $apartmentPopularsQuery->whereRaw(
                                    "
                                    (6371 * acos(cos(radians(?)) * cos(radians(latitude))
                                    * cos(radians(longitude) - radians(?)) + sin(radians(?))
                                    * sin(radians(latitude)))) < ?",
                                    [$latitude, $longitude, $latitude, $radius],
                                );
                            }

                            $apartmentPopularsQuery = $apartmentPopularsQuery->limit(5)->get();
                        @endphp

                        @foreach ($apartmentPopularsQuery as $itemsApartmentD)
                            <swiper-slide>
                                <a href="#">
                                    <div class="popular_features_item">
                                        <div class="popular_hotel_img">
                                            <img src="{{ asset($itemsApartmentD->thumbnail) }}" alt="">
                                        </div>
                                        <div class="popular_hotel_content">
                                            <div class="hotel_review">
                                                <span><img src="{{ asset('booking/img/star.svg') }}"
                                                        alt="">5/5</span>
                                                {{--  <span>{{ $itemsApartmentD->reviews->count() ?? '' }}
                                                    reviews</span>  --}}
                                            </div>

                                            <div class="popular_features_title feature_price">
                                                <h4>{{ $itemsApartmentD->apartment_name ?? '' }}</h4>
                                                <div class="price_box">
                                                    <span>From</span>
                                                    <h5>${{ number_format($itemsApartmentD->main_price, 0) ?? '' }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </swiper-slide>
                        @endforeach
                    </swiper-container>


                </div>

            </div>

        </div>
    </div>
</section>


<!-- Why Choose Tourlast -->
{{-- <section class=" why_choose_sec">
    <div class="container">
        <div class="main_tiltle">
            <h3>Why choose Tourlast</h3>
            <p>Your trusted partner for seamless travel experiences</p>
        </div>

        <div class="why_grid">
            <div class="why_item">
                <div class="why_icon">📱</div>
                <h5>Easy Booking</h5>
                <p>Book your travel deals in just a few clicks</p>
            </div>

            <div class="why_item">
                <div class="why_icon">💰</div>
                <h5>Best Price Guarantee</h5>
                <p>Get the most competitive prices</p>
            </div>

            <div class="why_item">
                <div class="why_icon">🌐</div>
                <h5>Worldwide Coverage</h5>
                <p>Destinations across the globe</p>
            </div>

            <div class="why_item">
                <div class="why_icon">🔒</div>
                <h5>Secure Payment</h5>
                <p>Protected with encryption</p>
            </div>

            <div class="why_item">
                <div class="why_icon">💬</div>
                <h5>24/7 Support</h5>
                <p>Always available to assist</p>
            </div>
        </div>

        <!-- App Download Section -->
        <div class="app_download_area">
            <div class="app_info">
                <h4>Get Our Travel Deals On the App</h4>
                <p>Download the app and book your next adventure on the go</p>
                <div class="app_buttons">
                    <img src="{{ asset('booking/img/app-store.png') }}" alt="App Store">
                    <img src="{{ asset('booking/img/google-play.png') }}" alt="Google Play">
                </div>
            </div>
            <div class="qr_area">
                <div class="qr_code">
                    <span>📱</span>
                </div>
                <p>Scan to Download App</p>
            </div>
        </div>
    </div>
</section> --}}


{{-- Attractions / apartments / app promo (only once) --}}
@if ($citiesQuery && $citiesQuery->isNotEmpty())
    @php
        // keep your existing city/hotel calculation logic (unchanged)
    @endphp
    {{-- attractionsHotel content here (kept identical to original) --}}
@endif

{{-- <section class="container">
    <div class="tourist-app-promo-clean">
        <div class="app-promo-grid phone-card">
            <div>
                <img src="{{ asset('booking/img/appsection.png') }}" alt="Tourist App">
            </div>

            <div class="promo-text ">
                <h1 class="display-4 fw-bold text-dark mb-2">Our Best Travel Deals<br>Live in the App</h1>
                <p class="lead text-secondary mb-1">Get exclusive access to app-only discounts, faster bookings,<br>and real-time price alerts.</p>
                <p class="text-dark mb-2">Scan the QR Code or download the app to start exploring<br>smarter, cheaper travel with <strong class="text-success">Tourlast</strong>.</p>

                <div class="store-buttons d-flex justify-content-center gap-4">
                    <a href="#" class="store-btn"><img src="{{ asset('booking/img/googleplay.png') }}" alt="Get it on Google Play" height="60"></a>
                    <a href="#" class="store-btn"><img src="{{ asset('booking/img/appstore.png') }}" alt="Download on the App Store" height="60"></a>
                </div>
            </div>

            <div class="promo-badges d-flex flex-column gap-5 justify-content-center">
                <div class="badge-simple d-flex align-items-center gap-3">
                    <img src="{{ asset('booking/img/people_svg.png') }}" alt="Rating" width="48">
                    <div><strong class="fs-3 text-dark">4.8</strong><div class="text-muted">App Rating</div></div>
                </div>
                <div class="badge-simple d-flex align-items-center gap-3">
                    <img src="{{ asset('booking/img/star_svg.png') }}" alt="Downloads" width="48">
                    <div><strong class="fs-3 text-dark">100k+</strong><div class="text-muted">Downloads</div></div>
                </div>
                <div class="badge-simple d-flex align-items-center gap-3">
                    <img src="{{ asset('booking/img/secure-payment.png') }}" alt="Secure" width="48">
                    <div class="text-muted">Secure & Verified App</div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="app-promo-modern">
    <div class="container">

        <div class="app-modern-wrap">

            <!-- Left Content -->
            <div class="app-modern-content">
                <span class="app-pill">Tourlast App</span>

                <h2>
                    Travel Deals.<br>
                    <span>Reimagined for Mobile</span>
                </h2>

                <p>
                    Discover exclusive app-only offers, book faster,
                    and manage your trips seamlessly — all in one place.
                </p>

                <div class="app-modern-actions">
                    <a href="#" class="store-btn">
                        <img src="{{ asset('booking/img/googleplay.png') }}" alt="Google Play">
                    </a>
                    <a href="#" class="store-btn">
                        <img src="{{ asset('booking/img/appstore.png') }}" alt="App Store">
                    </a>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="app-modern-visual">
                <img src="{{ asset('booking/img/qrcode.png') }}" alt="Tourlast App Preview">
            </div>

        </div>

    </div>
</section>


<section class="trust-features-section">
    <div class="container">
        <div class="trust-grid">

            <!-- Card 1 -->
            <div class="trust-card">
                <div class="icon">
                    <img src="{{ asset('booking/img/achievement.png') }}" alt="Trusted by Travelers"
                        class="icon-img">
                </div>
                <h3>Trusted by Travelers Worldwide</h3>
                <p>Join thousands of travelers using Tourlast. Read real stories and ratings—from people just like you.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="trust-card">
                <div class="icon">
                    <img src="{{ asset('booking/img/bed.png') }}" alt="Millions of Stays" class="icon-img">
                </div>
                <h3>Millions of Stays & Experiences</h3>
                <p>Choose from hotels, resorts, apartments, tours, safaris, and more across the world.</p>
            </div>

            <!-- Card 3 -->
            <div class="trust-card">
                <div class="icon">
                    <img src="{{ asset('booking/img/calendar.png') }}" alt="Book Now Pay Later" class="icon-img">
                </div>
                <h3>Book Now, Pay Later</h3>
                <p>Reserve your stay with zero upfront charges. Most rooms offer free cancellation and secure payment
                    options.</p>
            </div>

            <!-- Card 4 -->
            <div class="trust-card">
                <div class="icon">
                    <img src="{{ asset('booking/img/call.png') }}" alt="24/7 Support" class="icon-img">
                </div>
                <h3>24/7 Support You Can Rely On</h3>
                <p>Our multilingual support team is available anytime, anywhere, ready to help whenever you need it.</p>
            </div>

            <!-- Card 5 (you can add if needed) -->
            <!--
            <div class="trust-card">
                <div class="icon">
                    <img src="{{ asset('booking/img/icons/trust-5.png') }}" alt="Another Feature" class="icon-img">
                </div>
                <h3>Another Great Feature</h3>
                <p>Description here...</p>
            </div>
            -->

        </div>
    </div>
</section>

@include('Frontend.layouts.footer_booking')

{{-- ---- JS in the bottom: single guarded Swiper init to prevent dupes ---- --}}
<script>
    // guard to ensure we only init once
    if (!window.__tourlast_swipers_initialized) {
        window.__tourlast_swipers_initialized = true;

        // generic swiper for hotels/apartments (adjust options as you like)
        const initSwiper = (selector, opts = {}) => {
            try {
                const el = document.querySelector(selector);
                if (!el) return;
                return new Swiper(selector, Object.assign({
                    slidesPerView: 3,
                    spaceBetween: 16,
                    loop: false,
                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        576: {
                            slidesPerView: 1.2
                        },
                        768: {
                            slidesPerView: 2
                        },
                        992: {
                            slidesPerView: 3
                        }
                    }
                }, opts));
            } catch (e) {
                console.warn('Swiper init error', e);
            }
        };

        // init the Swipers used on this page
        initSwiper('.apartments-swiper', {
            slidesPerView: 3
        });
        initSwiper('.hotels-swiper', {
            slidesPerView: 3
        });
        initSwiper('.hotelswipper_left', {
            slidesPerView: 1,
            loop: true
        });
        initSwiper('.hotelswipper_right', {
            slidesPerView: 1,
            loop: true
        });

        // ensure any <swiper-container> elements are given a fixed max-height via CSS overrides below
    }

    const track = document.querySelector('.offer-track');
    const cards = document.querySelectorAll('.offer-card-wrapper');
    const nextBtn = document.querySelector('.carousel-arrow.right');
    const prevBtn = document.querySelector('.carousel-arrow.left');

    let index = 0;
    const visibleCards = 2;
    const maxIndex = cards.length - visibleCards;
    const intervalTime = 4000; // 4 seconds
    let autoSlide;

    function updateCarousel() {
        track.style.transform = `translateX(-${index * 50}%)`;

        // Toggle arrows
        prevBtn.classList.toggle('hidden', index === 0);
        nextBtn.classList.toggle('hidden', index === maxIndex);
    }

    function startAutoSlide() {
        autoSlide = setInterval(() => {
            if (index < maxIndex) {
                index++;
            } else {
                index = 0; // restart from beginning
            }
            updateCarousel();
        }, intervalTime);
    }

    function resetAutoSlide() {
        clearInterval(autoSlide);
        startAutoSlide();
    }

    nextBtn.addEventListener('click', () => {
        if (index < maxIndex) {
            index++;
            updateCarousel();
            resetAutoSlide();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (index > 0) {
            index--;
            updateCarousel();
            resetAutoSlide();
        }
    });

    // Init
    updateCarousel();
    startAutoSlide();

    const grid = document.getElementById('popularGrid');
    const leftArrow = document.querySelector('.popular-arrow.left');
    const rightArrow = document.querySelector('.popular-arrow.right');

    function updateArrows() {
        const maxScrollLeft = grid.scrollWidth - grid.clientWidth;

        // Left arrow
        if (grid.scrollLeft > 10) {
            leftArrow.classList.add('show');
        } else {
            leftArrow.classList.remove('show');
        }

        // Right arrow
        if (grid.scrollLeft < maxScrollLeft - 10) {
            rightArrow.classList.add('show');
        } else {
            rightArrow.classList.remove('show');
        }
    }

    function scrollPopular(direction) {
        const cardWidth = grid.querySelector('.popular_item').offsetWidth + 25;
        grid.scrollLeft += direction * cardWidth;
    }

    // Init
    updateArrows();
    grid.addEventListener('scroll', updateArrows);





    function toggleLike(e, btn) {
        e.preventDefault();
        e.stopPropagation();

        btn.classList.toggle('active');

        const icon = btn.querySelector('i');
        icon.classList.toggle('fa-regular');
        icon.classList.toggle('fa-solid');

        console.log('Liked:', btn.classList.contains('active'));
    }
</script>

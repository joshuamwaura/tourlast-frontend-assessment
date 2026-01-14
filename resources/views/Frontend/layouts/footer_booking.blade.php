<footer class="tourlast-footer">
    <div class="container">

        <!-- Footer Main -->
        <div class="footer-main">

            <!-- About Tourlast -->
            <div class="footer-column">
                <h5>About Tourlast</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Manage My Trips</a></li>
                </ul>
            </div>

            <!-- Our Products -->
            <div class="footer-column">
                <h5>Our Products</h5>
                <ul>
                    <li><a href="#">Flights</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Tour Packages</a></li>
                </ul>
            </div>

            <!-- Partners -->
            <div class="footer-column">
                <h5>Partners</h5>
                <ul>
                    <li><a href="#">List Your Flight</a></li>
                    <li><a href="#">List Your Hotel</a></li>
                    <li><a href="#">List Your Packages</a></li>
                    <li><a href="#">Agency</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="footer-column">
                <h5>Follow Us</h5>
                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/share/17dz2e2uoU/?mibextid=wwXIfr" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                    </li>

                    <li>
                        <a href="https://x.com/tourlastcom?s=21&t=8UijpvR5RMC25ins9kfrIw" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-x-twitter"></i> Twitter (X)
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/tourlast?igsh=NzcyMDd1dXU3dHFp&utm_source=qr" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </li>

                    <li>
                        <a href="https://www.tiktok.com/@tourlast?_r=1&_t=ZM-92SXgwIUwYa" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-tiktok"></i> Tiktok
                        </a>
                    </li>

                    <li>
                        <a href="https://www.linkedin.com/company/tourlast/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                    </li>
                </ul>
            </div>



        </div>

        <!-- Payment Methods -->
        <div class="footer-payments">
            <img src="{{ asset('booking/img/visa.png') }}" alt="Visa">
            <img src="{{ asset('booking/img/mastercard.png') }}" alt="Mastercard">
            <img src="{{ asset('booking/img/AMEX.png') }}" alt="Amex">
            <img src="{{ asset('booking/img/Paypal.png') }}" alt="Paypal">
            <img src="{{ asset('booking/img/Mpesa.png') }}" alt="Mpesa">
        </div>

    </div>


    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <div class="container">
            © Copyright {{ date('Y') }} Tourlast. All Rights Reserved
        </div>
    </div>
</footer>

<!-- First Modal: Email -->
<div class="modal fade login_modal signUphidepopup" id="exampleModalToggle" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="login_sec">
                    <div class="login_title">
                        <h5 id="exampleModalToggleLabel">Sign Up</h5>
                        <p>Manage your bookings with ease and enjoy member-only benefits</p>
                    </div>
                    <div class="login_filed">
                        <input type="email" name="email" id="email_address" readonly
                            onfocus="this.removeAttribute('readonly');" placeholder="Please Enter Your Email Address"
                            autocomplete="off">
                        {{-- <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal"
                          class="main_btn w-100 mb-4 p-3" id="continueBtn">Continue</a> --}}
                        <a class="main_btn w-100 mb-4 p-3" id="continueBtn">Continue</a>
                    </div>
                    <span> Don't have an account ?<a class="hide_button signInUphidepopup" data-bs-toggle="modal"
                            href="#login" role="button"> Sign in</a></span>

                    <div class="method_item">
                        <span></span>
                        <span>More Sign In Methods</span>
                        <span></span>
                    </div>
                    <div class="suggetion_login_icon">
                        <a href="#"><img src="{{ asset('booking/img/facebook01.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/google02.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/apple03.svg') }}" alt=""></a>
                    </div>
                    <div class="bottom_text_modal">
                        <span>By signing in or registering, you are deemed to have agreed to the Tourlast.com <a
                                href="#">Terms and Conditions</a> and <a href="#">Privacy
                                Statement</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Modal: Password -->
<div class="modal fade login_modal" id="exampleModalToggle2" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="login_sec">
                    <div class="login_title">
                        <h5 id="exampleModalToggleLabel">Create an Account</h5>
                        <p>Set a password for your new account:</p>
                    </div>
                    <div class="mail_box">
                        <span id="emailDisplay"></span>
                        <a data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                            href="">Not you?</a>
                    </div>
                    <div class="login_filed">
                        <input type="password" class="mb-1" name="password" id="password"
                            placeholder="Password">
                        <div class="eye_icon" id="togglePassword">
                            <img src="{{ asset('booking/img/eye.svg') }}" alt="" id="eyeIcon">
                            {{-- <img src="{{asset('booking/img/eye-hide.svg')}}" alt="" id="eyeIcon"> --}}
                        </div>
                        <p class="mb-3">Password needs to be at least 8 characters, including letters, numbers, and
                            symbols</p>
                        {{-- <a class="main_btn w-100 mb-4 p-3" id="registerBtn" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Register and Sign in</a> --}}
                        <a class="main_btn w-100 mb-4 p-3" id="registerBtn">Sign Up</a>
                    </div>
                    <div class="method_item">
                        <span></span>
                        <span>More Sign In Methods</span>
                        <span></span>
                    </div>
                    <div class="suggetion_login_icon">
                        <a href="#"><img src="{{ asset('booking/img/facebook01.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/google02.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/apple03.svg') }}" alt=""></a>
                    </div>
                    <div class="bottom_text_modal">
                        <span>By signing in or registering, you are deemed to have agreed to the Tourlast.com <a
                                href="#">Terms and Conditions</a> and <a href="#">Privacy
                                Statement</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login_modal" id="exampleModalToggle3" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="welcome_modal">
                    <h3>ThankYou</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quae in
                        deleniti vel? Tempore, cumque officiis exercitationem ab dolor esse? Earum hic </p>
                </div>
                <button class="main_btn w-100 mb-4 p-3" id="reloadpage" data-bs-dismiss="modal"
                    aria-label="Close">Continue</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login_modal" id="exampleModalToggle565" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="welcome_modal">
                    <h3>Are you sure you want to log out ?</h3>

                </div>
                <button class="main_btn w-100 mb-4 p-3" id="reloadpagelogOut">Log Out</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade login_modal exampleModallogin" id="login" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="login_sec">
                    <div class="login_title">
                        <h5 id="exampleModalToggleLabel">Sign in</h5>
                        <p>Manage your bookings with ease and enjoy member-only benefits</p>
                    </div>
                    <div class="login_filed">
                        <input type="email" name="email" id="email_1"
                            placeholder="Please Enter Your Email Address">
                        <button id="submit-email1" onclick="submitEmail()"
                            class="main_btn w-100 mb-4 p-3 submit-email1">Continue</button>
                    </div>
                    <span> Don't have an account ?<a class="hide_button loginhidepopup" data-bs-toggle="modal"
                            href="#exampleModalToggle" role="button"> Sign Up</a></span>
                    <div class="method_item">
                        <span></span>
                        <span>More Sign In Methods</span>

                        <span></span>
                    </div>
                    <div class="suggetion_login_icon">
                        <a href="#"><img src="{{ asset('booking/img/facebook01.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/google02.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('booking/img/apple03.svg') }}" alt=""></a>
                    </div>

                    <div class="bottom_text_modal">
                        <span>By signing in or registering, you are deemed to have agreed to the Tourlast.com <a
                                href="#">Terms and
                                Conditions</a>and <a href="#">Privacy
                                Statement</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login_modal" id="loginmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close refreh" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="login_sec">
                    <div class="login_title">
                        <h5 id="exampleModalToggleLabel">OTP Verification</h5>
                        {{-- <p>Set a password for your new account:</p> --}}
                    </div>
                    <div class="custom_otp">
                        <form id="otp-form">
                            <input type="text" class="otp-input" maxlength="1">
                            <input type="text" class="otp-input" maxlength="1">
                            <input type="text" class="otp-input" maxlength="1">
                            <input type="text" class="otp-input" maxlength="1">
                            {{-- <input type="text" class="otp-input" maxlength="1">
                    <input type="text" class="otp-input" maxlength="1"> --}}
                        </form>
                        <span class="d-block text-center mb-2">Resend Verification Code (59s)</span>
                        <button class="main_btn p-3 w-100" id="verify-otp-button">Verify OTP</button>
                    </div>
                    <div class="method_item">
                        <span></span>
                        <span>More Sign In Methods</span>
                        <span></span>
                    </div>
                    <div class="bottom_text_modal">
                        <span>By signing in or registering, you are deemed to have agreed to the Tourlast.com <a
                                href="#">Terms and
                                Conditions</a>and <a href="#">Privacy
                                Statement</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .loader-main {
        position: fixed;
        /* 🔥 Fix loader on full screen */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999999999;
        background: rgba(255, 255, 255, 0.2);
        /* ✅ Light opacity */
        backdrop-filter: blur(10px);
        /* ✅ Full blur effect */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Loader animation */
    .loader {
        border: 8px solid rgba(255, 255, 255, 0.3);
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite, fade 1s ease-in-out infinite alternate;
    }

    /* Keyframe animations */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes fade {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0.3;
        }
    }
</style>
<div class="loader-main" id="pageLoader" style="display: none;">
    <div class="loader-container">
        <!-- Loader element -->
        <div class="loader"></div>
    </div>
</div>

@php
    $childrenAges = session('children_ages', []); // default empty array
    $childrenAgesApartment = session('children_agesApartment', []); // default empty array
@endphp
<script>
    // document.addEventListener("DOMContentLoaded", function () {

    //       document.getElementById("pageLoader").style.display = "block";

    //       // Hide the loader after the page has fully loaded
    //       window.onload = function () {
    //           document.getElementById("pageLoader").style.display = "none";
    //       };
    //   });
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="{{ asset('booking/js/jquery.min.js') }}"></script>
<script src="{{ asset('booking/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('booking/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.40/moment-timezone-with-data.min.js"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8fPOCs163eUCv5uPhDQcvRMbzVTr882A&libraries=places&callback=initMap">
</script>

<script>
    const storedChildrenAges = @json($childrenAges); // [3, 8, 11]
    const storedChildrenAgesApartment = @json($childrenAgesApartment); // [3, 8, 11]

    // $(document).ready(function () {
    //     function getAgeDropdown(index, selectedValue = -1) {
    //         let options = '<option value="-1">Age needed</option>';
    //         for (let i = 0; i <= 17; i++) {
    //             options += `<option value="${i}" ${i === selectedValue ? 'selected' : ''}>${i} ${i === 1 ? 'year' : 'years'} old</option>`;
    //         }
    //         return `
    //             <div class="child-age-item" data-index="${index}">
    //                 <select name="children_ages[]" class="child-age-select">
    //                     ${options}
    //                 </select>
    //             </div>`;
    //     }

    //     function showDropdownsFromInput() {
    //         let count = parseInt($('.childrenCountingNew12').val()) || 0;
    //         const $container = $('#children_age_dropdowns');
    //         let current = $container.find('.child-age-item').length;

    //         // ✅ Add new dropdowns if needed
    //         if (count > current) {
    //             for (let i = current; i < count; i++) {
    //                 $container.append(getAgeDropdown(i));
    //             }
    //         }

    //         // ✅ Remove extra dropdowns if needed
    //         else if (count < current) {
    //             $container.find('.child-age-item').slice(count).remove();
    //         }
    //     }

    //     // On page load
    //     showDropdownsFromInput();

    //     // When value changes
    //     $('.childrenCountingNew12').on('input change', function () {
    //         showDropdownsFromInput();
    //     });

    //     // Optional: Watch hidden field change via MutationObserver if needed
    //     const target = document.querySelector('.childrenCountingNew12');
    //     if (target) {
    //         const observer = new MutationObserver(showDropdownsFromInput);
    //         observer.observe(target, { attributes: true, attributeFilter: ['value'] });
    //     }
    // });
    $(document).ready(function() {
        function getAgeDropdown(index, selectedValue = -1) {
            let options = '<option value="-1">Age needed</option>';
            for (let i = 0; i <= 17; i++) {
                options +=
                    `<option value="${i}" ${i === selectedValue ? 'selected' : ''}>${i} ${i === 1 ? 'year' : 'years'} old</option>`;
            }
            return `
            <div class="child-age-item" data-index="${index}">
                <select name="children_ages[]" class="child-age-select">
                    ${options}
                </select>
            </div>`;
        }

        function showDropdownsFromInput() {
            let count = parseInt($('.childrenCountingNew12').val()) || 0;
            const $container = $('#children_age_dropdowns');
            let current = $container.find('.child-age-item').length;

            // ✅ Add new dropdowns with selected values from session
            if (count > current) {
                for (let i = current; i < count; i++) {
                    const selected = storedChildrenAges[i] ? parseInt(storedChildrenAges[i]) : -1;
                    $container.append(getAgeDropdown(i, selected));
                }
            }

            // ✅ Remove extra dropdowns if count reduced
            else if (count < current) {
                $container.find('.child-age-item').slice(count).remove();
            }
        }

        // Initial load
        showDropdownsFromInput();

        // When hidden input value changes
        $('.childrenCountingNew12').on('input change', function() {
            showDropdownsFromInput();
        });

        // Optional: MutationObserver (only if value changes via JS directly)
        const target = document.querySelector('.childrenCountingNew12');
        if (target) {
            const observer = new MutationObserver(showDropdownsFromInput);
            observer.observe(target, {
                attributes: true,
                attributeFilter: ['value']
            });
        }
    });

    $(document).ready(function() {
        function getAgeDropdown(index, selectedValue = -1) {
            let options = '<option value="-1">Age needed</option>';
            for (let i = 0; i <= 17; i++) {
                options +=
                    `<option value="${i}" ${i === selectedValue ? 'selected' : ''}>${i} ${i === 1 ? 'year' : 'years'} old</option>`;
            }
            return `
            <div class="child-age-item-Apartment" data-index="${index}">
                <select name="children_agesApartment[]" class="child-age-select">
                    ${options}
                </select>
            </div>`;
        }

        function showDropdownsFromInput() {
            let count = parseInt($('.childrenCountingApartmentNew12').val()) || 0;
            const $container = $('#children_age_dropdownsApartment');
            let current = $container.find('.child-age-item-Apartment').length;

            // Add new dropdowns with selected values from session
            if (count > current) {
                for (let i = current; i < count; i++) {
                    const selected = storedChildrenAgesApartment[i] ? parseInt(storedChildrenAgesApartment[i]) :
                        -1;
                    $container.append(getAgeDropdown(i, selected));
                }
            }

            // Remove extra dropdowns if count reduced
            else if (count < current) {
                $container.find('.child-age-item-Apartment').slice(count).remove();
            }
        }

        // Initial load
        showDropdownsFromInput();

        // When hidden input value changes
        $('.childrenCountingApartmentNew12').on('input change', function() {
            showDropdownsFromInput();
        });

        // Optional: MutationObserver (only if value changes via JS directly)
        const target = document.querySelector('.childrenCountingApartmentNew12');
        if (target) {
            const observer = new MutationObserver(showDropdownsFromInput);
            observer.observe(target, {
                attributes: true,
                attributeFilter: ['value']
            });
        }
    });





    $(document).ready(function() {
        $(".currency-item").on("click", function() {
            $(".currency-item").removeClass("active");
            $(this).addClass("active");
            document.getElementById("pageLoader").style.display = "block";
            let currencyCode = $(this).data("code");

            $.ajax({
                url: "#",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    currency: currencyCode
                },
                success: function(response) {
                    console.log(response);
                    document.getElementById("pageLoader").style.display = "none";
                    location.reload(); // Reload page to apply changes
                },
                error: function(xhr) {
                    document.getElementById("pageLoader").style.display = "none";
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".checkvalue").on("submit", function(e) {
            //  document.getElementById("pageLoader").style.display = "block";
            let isValid = true;

            let fromDestination = $("select[name='from_destination[]']").val();
            // console.log("From Destination:", fromDestination); // Debugging

            if (!fromDestination || fromDestination.length === 0) {
                toastr.error("Please select a location.");
                isValid = false;
            }

            let toDestination = $("select[name='to_destination[]']").val();
            // console.log("To Destination:", toDestination); // Debugging

            if (!toDestination || toDestination.length === 0) {
                toastr.error("Please select a destination.");
                isValid = false;
            }

            // Validate Departure Date
            if ($("#check_in_from").val().trim() === "") {
                toastr.error("Please select a date");
                isValid = false;
            }

            // Validate Return Date if Return Trip is Selected
            if ($("input[name='trip_type']:checked").val() === "return" && $("#check_out_to").val()
                .trim() === "") {
                toastr.error("Please select a date");
                isValid = false;
            }

            // Validate Passenger Count
            if ($("#adultsflight").val() <= 0) {
                toastr.error("At least one adult passenger is required.");
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault(); // Prevent form submission if validation fails
            } else {
                document.getElementById("pageLoader").style.display = "block";
            }
        });
    });

    $(document).ready(function() {
        loadAirports(".airport-select");
        setSelectedAirports();
    });

    // Function to Load Airports in Any Select2 Dropdown
    function loadAirports(selector) {
        $(selector).select2({
            placeholder: "Airport or City",
            minimumInputLength: 2,
            ajax: {
                url: "{{ url('/proxy/airport-list') }}",
                type: "POST",
                dataType: "json",
                delay: 250,
                data: function(params) {
                    return {
                        query: params.term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.map(function(airport) {
                            return {
                                id: airport.AirportCode,
                                text: `${airport.AirportCode} - ${airport.AirportName}`
                            };
                        })
                    };
                },
                cache: true
            }
        });
    }

    function setSelectedAirports() {
        $(".airport-select").each(function() {
            var selectedValue = $(this).val();
            if (selectedValue) {
                $(this).val(selectedValue).trigger('change');
            }
        });
    }
</script>
<script>
    var swiper = new Swiper(".mySwiper_hotel", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport width is 1024px or smaller
            1200: {
                slidesPerView: 4, // Show 4 slides per view
                spaceBetween: 20, // Adjust space between slides
            },
            // When the viewport width is 768px or smaller
            768: {
                slidesPerView: 3, // Show 3 slides per view
                spaceBetween: 15, // Adjust space between slides
            },
            // When the viewport width is 480px or smaller
            600: {
                slidesPerView: 2, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
            480: {
                slidesPerView: 1.5, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
            0: {
                slidesPerView: 1, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
        },
    });


    var swiper = new Swiper(".popularfeatures_sld", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport width is 1024px or smaller
            1200: {
                slidesPerView: 4, // Show 4 slides per view
                spaceBetween: 20, // Adjust space between slides
            },
            // When the viewport width is 768px or smaller
            768: {
                slidesPerView: 3, // Show 3 slides per view
                spaceBetween: 15, // Adjust space between slides
            },
            // When the viewport width is 480px or smaller
            600: {
                slidesPerView: 2, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
            480: {
                slidesPerView: 1.5, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
            0: {
                slidesPerView: 1, // Show 1 slide per view
                spaceBetween: 10, // Adjust space between slides
            },
        },
    });
    var swiper = new Swiper(".hotel_imgsld", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        // autoplay: {
        //     delay: 1900,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            type: "bullets",
            renderBullet: function(index, className) {
                // Only render 3 dots no matter how many slides there are
                if (index < 3) {
                    return `<span class="${className}"></span>`;
                }
            }
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            600: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>

<script>
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            $('#latitude').val(place.geometry['location'].lat());
            $('#longitude').val(place.geometry['location'].lng());
            $("#latitudeArea").removeClass("d-none");
            $("#longtitudeArea").removeClass("d-none");

            $(".submitBTN").prop('disabled', false)
        });
    }

    const progressCircle = document.querySelector(".autoplay-progress svg circle");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiperEl = document.querySelector("swiper-container");
    if (swiperEl) {
        swiperEl.addEventListener("autoplaytimeleft", (e) => {
            const [swiper, time, progress] = e.detail;
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        });
    } else {
        // console.error("swiper-container element not found.");
    }
</script>

<!-- Put your script here -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navPills = document.querySelector(".select_date_flight .nav-pills");
        const leftArrow = document.getElementById("leftArrow");
        const rightArrow = document.getElementById("rightArrow");

        // Scroll left
        if (leftArrow && navPills) {
            leftArrow.addEventListener("click", () => {
                navPills.scrollBy({
                    left: -200,
                    behavior: "smooth",
                });
            });
        }

        // Scroll right
        if (rightArrow && navPills) {
            rightArrow.addEventListener("click", () => {
                navPills.scrollBy({
                    left: 200,
                    behavior: "smooth",
                });
            });
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('.price_range_slider').each(function() {
            const $slider = $(this);
            const $rangeInput = $slider.find(".range-input input"),
                $priceInput = $slider.find(".price-input input"),
                $range = $slider.find(".slider .progress");
            let priceGap = 1000;

            $priceInput.on("input", function() {
                let minPrice = parseInt($priceInput.eq(0).val()),
                    maxPrice = parseInt($priceInput.eq(1).val());

                if (maxPrice - minPrice >= priceGap && maxPrice <= $rangeInput.eq(1).attr(
                        "max")) {
                    if ($(this).hasClass("input-min")) {
                        $rangeInput.eq(0).val(minPrice);
                        $range.css("left", (minPrice / $rangeInput.eq(0).attr("max")) * 100 +
                            "%");
                    } else {
                        $rangeInput.eq(1).val(maxPrice);
                        $range.css("right", 100 - (maxPrice / $rangeInput.eq(1).attr("max")) *
                            100 + "%");
                    }
                }
            });

            $rangeInput.on("input", function() {
                let minVal = parseInt($rangeInput.eq(0).val()),
                    maxVal = parseInt($rangeInput.eq(1).val());

                if (maxVal - minVal < priceGap) {
                    if ($(this).hasClass("range-min")) {
                        $rangeInput.eq(0).val(maxVal - priceGap);
                    } else {
                        $rangeInput.eq(1).val(minVal + priceGap);
                    }
                } else {
                    $priceInput.eq(0).val(minVal);
                    $priceInput.eq(1).val(maxVal);
                    $range.css("left", (minVal / $rangeInput.eq(0).attr("max")) * 100 + "%");
                    $range.css("right", 100 - (maxVal / $rangeInput.eq(1).attr("max")) * 100 +
                        "%");
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".filter_open_sidebar").click(function(e) {
            e.preventDefault(); // Prevent default anchor behavior

            // Toggle the active class on the flight box
            $(".sidebar_sec").toggleClass("active");

            // Toggle the active class on the clicked button
            $(this).toggleClass("active");

            // Toggle button text between "Select" and "Hide"
            if ($(".sidebar_sec").hasClass("active")) {

            }
        });
    });
</script>
<script>
    // function showMenu(type) {
    //     // Show/Hide Menus
    //     document.getElementById('flightMenu').style.display = type === 'flight' ? 'block' : 'none';
    //     document.getElementById('propertyMenu').style.display = type === 'flight' ? 'none' : 'block';

    //     // Get elements
    //     const hotelLine = document.getElementById('hotelLine');
    //     const flightLine = document.getElementById('flightLine');
    //     const apartmentLine = document.getElementById('apartmentLine');

    //     const attractionsApartment = document.getElementById('attractionsApartment');
    //     const attractionsHotel = document.getElementById('attractionsHotel');
    //     const apartmentPopularQuery = document.getElementById('apartmentPopularQuery');
    //     const hotelPopularQuery = document.getElementById('hotelPopularQuery');

    //     // Show/Hide Lines
    //     if (hotelLine) hotelLine.style.display = (type === 'hotel' || type === 'flight') ? 'block' : 'none';
    //     if (flightLine) flightLine.style.display = type === 'flight' ? 'block' : 'none';
    //     if (apartmentLine) apartmentLine.style.display = (type === 'apartment' || type === 'flight') ? 'block' : 'none';

    //     // Show/Hide Sections
    //     if (attractionsHotel) attractionsHotel.style.display = (type === 'hotel' || type === 'flight') ? 'block' : 'none';
    //     if (hotelPopularQuery) hotelPopularQuery.style.display = (type === 'hotel' || type === 'flight') ? 'block' : 'none';

    //     if (attractionsApartment) attractionsApartment.style.display = (type === 'apartment' || type === 'flight') ? 'block' : 'none';
    //     if (apartmentPopularQuery) apartmentPopularQuery.style.display = (type === 'apartment' || type === 'flight') ? 'block' : 'none';
    // }

    function showMenu(type) {
        // Menus
        const flightMenu = document.getElementById('flightMenu');
        const apartmentMenu = document.getElementById('apartmentMenu');
        const hotelMenu = document.getElementById('hotelMenu');

        // Lines
        const hotelLine = document.getElementById('hotelLine');
        const flightLine = document.getElementById('flightLine');
        const apartmentLine = document.getElementById('apartmentLine');

        // Sections
        const attractionsApartment = document.getElementById('attractionsApartment');
        const attractionsHotel = document.getElementById('attractionsHotel');
        const apartmentPopularQuery = document.getElementById('apartmentPopularQuery');
        const hotelPopularQuery = document.getElementById('hotelPopularQuery');

        // Hide all first
        if (flightMenu) flightMenu.style.display = 'none';
        if (apartmentMenu) apartmentMenu.style.display = 'none';
        if (hotelMenu) hotelMenu.style.display = 'none';

        if (hotelLine) hotelLine.style.display = 'none';
        if (flightLine) flightLine.style.display = 'none';
        if (apartmentLine) apartmentLine.style.display = 'none';

        if (attractionsHotel) attractionsHotel.style.display = 'none';
        if (hotelPopularQuery) hotelPopularQuery.style.display = 'none';

        if (attractionsApartment) attractionsApartment.style.display = 'none';
        if (apartmentPopularQuery) apartmentPopularQuery.style.display = 'none';

        // Show only based on selected type
        if (type === 'flight') {
            if (flightMenu) flightMenu.style.display = 'flex';
            if (hotelMenu) hotelMenu.style.display = 'none';
            if (apartmentMenu) apartmentMenu.style.display = 'none';

            if (flightLine) flightLine.style.display = 'block';
            if (hotelLine) hotelLine.style.display = 'none';
            if (apartmentLine) apartmentLine.style.display = 'none';

            if (attractionsHotel) attractionsHotel.style.display = 'block';
            if (hotelPopularQuery) hotelPopularQuery.style.display = 'block';
            if (attractionsApartment) attractionsApartment.style.display = 'block';
            if (apartmentPopularQuery) apartmentPopularQuery.style.display = 'block';
        }

        if (type === 'hotel') {
            if (hotelMenu) hotelMenu.style.display = 'flex';
            if (hotelLine) hotelLine.style.display = 'block';
            if (attractionsHotel) attractionsHotel.style.display = 'block';
            if (hotelPopularQuery) hotelPopularQuery.style.display = 'block';
        }

        if (type === 'apartment') {
            if (apartmentMenu) apartmentMenu.style.display = 'flex';
            if (apartmentLine) apartmentLine.style.display = 'block';
            if (attractionsApartment) attractionsApartment.style.display = 'block';
            if (apartmentPopularQuery) apartmentPopularQuery.style.display = 'block';
        }

    }

    window.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const typeFromUrl = urlParams.get('hotel');
        if (typeFromUrl) {
            showMenu(typeFromUrl); // pass the actual type
        }
    });

    window.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const typeFromUrl = urlParams.get('apartment');
        if (typeFromUrl) {
            showMenu(typeFromUrl); // pass the actual type
        }
    });

    // function showMenu(type) {
    //     // Show/Hide Menus
    //     document.getElementById('flightMenu').style.display = type === 'flight' ? 'block' : 'none';
    //     document.getElementById('propertyMenu').style.display = type === 'flight' ? 'none' : 'block';

    //     // Show/Hide Lines with safety check
    //     const hotelLine = document.getElementById('hotelLine');
    //     const flightLine = document.getElementById('flightLine');
    //     const apartmentLine = document.getElementById('apartmentLine');

    //     const attractionsApartment = document.getElementById('attractionsApartment');
    //     const attractionsHotel = document.getElementById('attractionsHotel');
    //     const apartmentPopularQuery = document.getElementById('apartmentPopularQuery');
    //     const hotelPopularQuery = document.getElementById('hotelPopularQuery');

    //     if (hotelLine) hotelLine.style.display = type === 'hotel' ? 'block' : 'none';
    //     if (flightLine) flightLine.style.display = type === 'flight' ? 'block' : 'none';
    //     if (apartmentLine) apartmentLine.style.display = type === 'apartment' ? 'block' : 'none';

    //     if (attractionsHotel) attractionsHotel.style.display = type === 'hotel' ? 'block' : 'none';
    //     if (hotelPopularQuery) hotelPopularQuery.style.display = type === 'hotel' ? 'block' : 'none';

    //     if (attractionsApartment) attractionsApartment.style.display = type === 'apartment' ? 'block' : 'none';
    //     if (apartmentPopularQuery) apartmentPopularQuery.style.display = type === 'apartment' ? 'block' : 'none';


    //     if (flightLine) attractionsHotel.style.display = type === 'flight' ? 'block' : 'none';
    //     if (flightLine) hotelPopularQuery.style.display = type === 'flight' ? 'block' : 'none';

    //     if (flightLine) attractionsApartment.style.display = type === 'flight' ? 'block' : 'none';
    //     if (flightLine) apartmentPopularQuery.style.display = type === 'flight' ? 'block' : 'none';

    // }



    $(document).ready(function() {
        $('#updateUserButton').click(function(e) {
            e.preventDefault();

            var gender = $('input[name="gender"]:checked').val();
            var display_name = $('#display_name').val().trim();
            var country_id = $('#country_id').val().trim();
            var address = $('#address').val().trim();

            $.ajax({
                url: "#",
                type: "POST",
                data: {
                    gender: gender,
                    display_name: display_name,
                    country_id: country_id,
                    address: address,
                    _token: $('meta[name="csrf-token"]').attr(
                        'content') // CSRF token for Laravel
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);

                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    // Ensure responseJSON is defined and contains the 'errors' property
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;

                        // Loop through the errors and show them using toastr
                        for (let key in errors) {
                            toastr.error(errors[key][
                                0
                            ]); // Display the first error message for each field
                        }
                    } else {
                        // If no validation errors are found, show a generic error message
                        toastr.error("An unexpected error occurred. Please try again.");
                    }
                }
            });
        });
    });


    $(document).ready(function() {
        $('.edit_icon_2').on('click', function() {
            let editIcon = $(this);
            let inputField = editIcon.siblings('input');
            let mobileInput = $('#mobile_no');
            let countryCodeInput = $('#country_code');
            let editState = editIcon.data('edit');

            if (editState === 1) {
                // Enable input fields for editing
                mobileInput.prop('disabled', false).focus();
                countryCodeInput.prop('disabled', false);
                editIcon.data('edit', 2); // Change state to 'editing'
            } else if (editState === 2) {
                // Collect data for the specific fields
                let mobileValue = mobileInput.val();
                let countryCodeValue = countryCodeInput.val();

                // Disable input fields and make AJAX call
                // mobileInput.prop('disabled', true);
                // countryCodeInput.prop('disabled', true);
                editIcon.data('edit', 1); // Reset state to 'not editing'
                document.getElementById("pageLoader").style.display = "block";
                // AJAX request to update mobile number and country code
                $.ajax({
                    url: "#", // Your endpoint
                    type: 'POST',
                    data: {
                        mobile_no: mobileValue,
                        country_code: countryCodeValue
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Phone number updated successfully!');
                            document.getElementById("pageLoader").style.display = "none";
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        toastr.error('Enter valid phone number');
                        document.getElementById("pageLoader").style.display = "none";
                    }
                });
            }
        });

        // Ensure cursor is at the end of the current value when focused
        $('input').on('focus', function() {
            let input = $(this);
            let value = input.val();
            input.val('').val(value); // Moves the cursor to the end of the current value
        });
    });



    $(document).ready(function() {
        // Toggle password visibility when eye icon is clicked
        $('#togglePassword').click(function() {
            var passwordField = $('#password');
            var eyeIcon = $('#eyeIcon');

            // Check if the password field is of type 'password' or 'text'
            if (passwordField.attr('type') === 'password') {
                // Show the password
                passwordField.attr('type', 'text');
                // Change the eye icon to indicate password is visible
                eyeIcon.attr('src', '{{ asset('booking/img/eye-hide.svg') }}');
            } else {
                // Hide the password
                passwordField.attr('type', 'password');
                // Change the eye icon to indicate password is hidden
                eyeIcon.attr('src', '{{ asset('booking/img/eye.svg') }}');
            }
        });
    });

    $(document).ready(function() {
        // Handle the "Continue" button click to switch to the second modal
        $('#continueBtn').click(function() {
            var email = $('#email_address').val().trim();
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (email === '') {
                toastr.error('Please enter a valid email.');
                return;
            }
            if (!emailPattern.test(email)) {
                toastr.error('Please enter a valid email address.');
                return;
            }
            document.getElementById("pageLoader").style.display = "block";
            // Display the entered email in the second modal
            $('#emailDisplay').text(email);
            document.getElementById("pageLoader").style.display = "none";
            $('#exampleModalToggle').modal('hide');
            // Open the second modal for password entry
            $('#exampleModalToggle2').modal('show');
        });

        $('#registerBtn').click(function() {
            $('#email_address').val('');
        });
        // Handle the "Register and Sign in" button click for form submission via AJAX
        $('#registerBtn').click(function() {
            var email = $('#emailDisplay').text().trim();
            var password = $('#password').val().trim();

            if (password.length < 8) {

                toastr.error('Password must be at least 8 characters long.');
                return;
            }

            // AJAX call to save the data (email and password)
            $.ajax({
                url: "#", // Update with your actual endpoint
                method: 'POST',
                data: {
                    email: email,
                    password: password,
                    _token: $('meta[name="csrf-token"]').attr(
                        'content') // CSRF token for Laravel
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);

                        const profileHtml = `
                    <div class="drop_down_box">
                        <button class="profile_box_toggle">
                            <img src="{{ asset('booking/img/profile.svg') }}" alt="">
                            ${response.user.name}
                        </button>
                        <div class="profile_dropdwon">
                            <ul>
                                <li><a href="#">My Booking</a></li>
                                <li><a href="#">Manage Account</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>`;

                        // Replace the login/register buttons with the profile dropdown
                        $('.auth-section').html(profileHtml);
                        $('#exampleModalToggle2').modal('hide');
                        window.location.reload();
                        //  toastr.success('Signup successful! Welcome aboard');
                        //  $('#exampleModalToggle3').modal('show');

                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        const errors = xhr.responseJSON.errors;
                        const firstErrorMessage = Object.values(errors)[0][0];
                        toastr.error(firstErrorMessage);
                    } else {
                        toastr.error("An error occurred. Please try again.");
                    }
                }
            });
        });
    });
</script>
<script>
    $(document).on('click', '#logoutPageOpen', function(e) {
        e.preventDefault();

        $('#exampleModalToggle565').modal('show');
    });

    $(document).on('click', '.loginhidepopup', function(e) {
        e.preventDefault();
        $('.exampleModallogin').modal('hide');

    });

    $(document).on('click', '.signInUphidepopup', function(e) {
        e.preventDefault();
        $('.signUphidepopup').modal('hide');

    });

    $(document).ready(function() {
        $('#reloadpagelogOut').click(function(e) {
            e.preventDefault();
            document.getElementById("pageLoader").style.display = "block";
            $.ajax({
                url: "#",
                type: "GET",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        $('#exampleModalToggle565').modal('hide');
                        document.getElementById("pageLoader").style.display = "none";
                        window.location.href = "#";
                    }

                },
                error: function(xhr) {
                    console.log("Logout failed:", xhr.responseText);
                }
            });
        });
    });


    $(document).ready(function() {
        const verifyButton = $('#verify-otp-button');
        verifyButton.prop('disabled', true);

        // Enable the button when all 4 OTP inputs are filled
        $('.otp-input').on('input', function() {
            let otp = '';
            $('.otp-input').each(function() {
                otp += $(this).val().trim();
            });

            if (otp.length === 4) {
                verifyButton.prop('disabled', false);
            } else {
                verifyButton.prop('disabled', true);
            }
        });

        // Handle Verify OTP button click
        $('#verify-otp-button').on('click', function(e) {
            e.preventDefault();

            let otp = '';
            $('.otp-input').each(function() {
                otp += $(this).val().trim();
            });

            const email = $('#email_1').val().trim();
            document.getElementById("pageLoader").style.display = "block";

            $.ajax({
                url: "#",
                type: 'POST',
                data: {
                    otp: otp,
                    email: email,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {},
                error: function() {},
            });
        });

        // Timer Logic
        let timer = 59;
        let interval;
        const resendSpan = $('.d-block.text-center.mb-2');

        function startTimer() {
            timer = 59;
            interval = setInterval(function() {
                timer--;
                resendSpan.text(`Resend Verification Code (${timer}s)`);
                if (timer <= 0) {
                    clearInterval(interval);
                    resendSpan.html(`<a href="#" id="resend-link">Resend Verification Code</a>`);
                }
            }, 1000);
        }

        // Manually resend OTP on link click
        $(document).on('click', '#resend-link', function(e) {
            e.preventDefault();

            const email = $('#email_1').val().trim();
            if (email === '') {
                toastr.error('Email not found!');
                return;
            }

            removeOtp(); // Call resend logic
            resendSpan.text(`Resend Verification Code (59s)`);
            startTimer(); // Restart timer
        });

        // AJAX call to remove/resend OTP
        function removeOtp() {
            const email = $('#email_1').val().trim();
            $.ajax({
                url: "#",
                type: 'POST',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {},
                error: function() {},
            });
        }
        startTimer();
        $(document).on('click', '#resend-link', function(e) {});
    });
</script>

<script>
    // Set CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function submitEmail() {
        const email = $('#email_1').val().trim();
        // Simple validation for empty email field
        if (email === '') {
            toastr.error('Please enter your email address.');
            // alert('Please enter your email address.');
            return;
        }
        document.getElementById("pageLoader").style.display = "block";
        $.ajax({
            url: "#",
            method: 'POST',
            data: {
                email: email
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    document.getElementById("pageLoader").style.display = "none";
                    $('#login').modal('hide');
                    $('#loginmodal').modal('show');
                } else {
                    document.getElementById("pageLoader").style.display = "none";
                    toastr.error('Your email in not registered. Please sign up.');
                }
            },
            error: function() {
                document.getElementById("pageLoader").style.display = "none";
                toastr.error('An error occurred. Please try again.');
            }
        });
    };
</script>

<script>
    $(document).ready(function() {
        $(".profile_box_toggle").click(function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            // Toggle the active class on the flight box
            $(".profile_dropdwon").toggleClass("active");
            // Toggle the active class on the clicked button
            $(this).toggleClass("active");
            // Toggle button text between "Select" and "Hide"

        });
    });

    $(document).ready(function() {
        $("#reloadpage").click(function(e) {
            e.preventDefault();
            window.location.reload();
        });

        $(".refreh").click(function(e) {
            e.preventDefault();
            window.location.reload();
        });
    });
</script>

<script>
    const form = document.querySelector("#otp-form");
    const inputs = document.querySelectorAll(".otp-input");
    const verifyBtn = document.querySelector("#verify-btn");

    const isAllInputFilled = () => {
        return Array.from(inputs).every((item) => item.value);
    };

    const getOtpText = () => {
        let text = "";
        inputs.forEach((input) => {
            text += input.value;
        });
        return text;
    };

    const toggleFilledClass = (field) => {
        if (field.value) {
            field.classList.add("filled");
        } else {
            field.classList.remove("filled");
        }
    };
    if (form) {
        form.addEventListener("input", (e) => {
            const target = e.target;
            const value = target.value;
            console.log({
                target,
                value
            });
            toggleFilledClass(target);
            if (target.nextElementSibling) {
                target.nextElementSibling.focus();
            }
            verifyOTP();
        });
    }
    inputs.forEach((input, currentIndex) => {
        // fill check
        toggleFilledClass(input);

        // paste event
        input.addEventListener("paste", (e) => {
            e.preventDefault();
            const text = e.clipboardData.getData("text");
            console.log(text);
            inputs.forEach((item, index) => {
                if (index >= currentIndex && text[index - currentIndex]) {
                    item.focus();
                    item.value = text[index - currentIndex] || "";
                    toggleFilledClass(item);
                    verifyOTP();
                }
            });
        });

        // backspace event
        input.addEventListener("keydown", (e) => {
            if (e.keyCode === 8) {
                e.preventDefault();
                input.value = "";
                // console.log(input.value);
                toggleFilledClass(input);
                if (input.previousElementSibling) {
                    input.previousElementSibling.focus();
                }
            } else {
                if (input.value && input.nextElementSibling) {
                    input.nextElementSibling.focus();
                }
            }
        });
    });

    // verifyBtn.addEventListener("click", () => {
    //   verifyOTP();
    // });

    document.addEventListener("DOMContentLoaded", () => {
        const verifyBtn1 = document.getElementById("verify-btn");
        if (verifyBtn1) {
            verifyBtn1.addEventListener("click", () => {
                verifyOTP();
            });
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let form = document.getElementById('hotel_booking_form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let checkIn123 = document.getElementById('check_in_hotel').value.trim();
                let checkOut123 = document.getElementById('check_out_hotel').value.trim();

                if (!checkIn123 || !checkOut123) {
                    toastr.error("Both check-in and check-out dates are required.");
                    e.preventDefault();
                } else {
                    document.getElementById("pageLoader").style.display = "block";
                }
            });
        }
    });

    //   $(document).ready(function () {
    //     let today = moment().format('ddd DD MMM');

    //     $("#check_in_hotel_d").daterangepicker({
    //         autoApply: true,
    //         minDate: today,
    //         locale: {
    //             format: 'ddd DD MMM'
    //         },
    //         startDate: today,
    //         endDate: moment().add(1, 'days') // Default checkout next day
    //     }, function (start, end) {
    //         // ✅ Manually input field ko update karenge
    //         setTimeout(() => {
    //             $("#check_in_hotel_d").val(start.format("ddd DD MMM")); // Sirf check-in date
    //             $("#check_out_hotel_d").val(end.format("ddd DD MMM"));  // Check-out date
    //             $("#check_in_hotel").val(start.format("YYYY-MM-DD")); // Sirf check-in date
    //             $("#check_out_hotel").val(end.format("YYYY-MM-DD"));  // Check-out date
    //         }, 10); // Delay to override daterangepicker's default behavior
    //     });

    //     // ✅ Check-out field pe click karne se calendar open ho
    //     $("#check_out_hotel").on("click", function () {
    //         $("#check_in_hotel_d").trigger("click");
    //     });

    //     $("#check_in_hotel").val("{{ request()->check_in }}");
    //     $("#check_out_hotel").val("{{ request()->check_out }}");
    //     $("#check_in_hotel_d").val("{{ request()->check_in_d }}");
    //     $("#check_out_hotel_d").val("{{ request()->check_out_d }}");
    // });


    $(document).ready(function() {
        let today = moment(); // Keep as a moment object

        $("#check_in_hotel_d").daterangepicker({
            autoApply: true,
            minDate: today.clone(),
            locale: {
                format: 'ddd DD MMM'
            },
            startDate: today.clone(),
            endDate: today.clone().add(1, 'days')
        });

        $('#check_in_hotel_d').on('apply.daterangepicker', function(ev, picker) {
            let startDate = picker.startDate.clone();
            let endDate = picker.endDate.clone();

            // Auto adjust if same date selected
            if (endDate.diff(startDate, 'days') < 1) {
                endDate = startDate.clone().add(1, 'days');
            }

            $("#check_in_hotel_d").val(startDate.format("ddd DD MMM"));
            $("#check_out_hotel_d").val(endDate.format("ddd DD MMM"));
            $("#check_in_hotel").val(startDate.format("YYYY-MM-DD"));
            $("#check_out_hotel").val(endDate.format("YYYY-MM-DD"));
        });

        // Clicking checkout field triggers check-in calendar
        $("#check_out_hotel_d").on("click", function() {
            $("#check_in_hotel_d").trigger("click");
        });

        $("#check_in_hotel").val("{{ request()->check_in }}");
        $("#check_out_hotel").val("{{ request()->check_out }}");
        $("#check_in_hotel_d").val("{{ request()->check_in_d }}");
        $("#check_out_hotel_d").val("{{ request()->check_out_d }}");
    });


    // $(document).ready(function () {
    //     let today = moment(); // Keep as a moment object

    //     $("#check_in_hotel_d").daterangepicker({
    //         autoApply: true,
    //         minDate: today.clone(),
    //         locale: { format: 'ddd DD MMM' },
    //         startDate: today.clone(),
    //         endDate: today.clone().add(1, 'days')
    //     });

    //     $('#check_in_hotel_d').on('apply.daterangepicker', function(ev, picker) {
    //         $("#check_in_hotel_d").val(picker.startDate.format("ddd DD MMM"));
    //         $("#check_out_hotel_d").val(picker.endDate.format("ddd DD MMM"));
    //         $("#check_in_hotel").val(picker.startDate.format("YYYY-MM-DD"));
    //         $("#check_out_hotel").val(picker.endDate.format("YYYY-MM-DD"));
    //     });

    //     $("#check_out_hotel").on("click", function () {
    //         $("#check_in_hotel_d").trigger("click");
    //     });

    //     $("#check_in_hotel").val("{{ request()->check_in }}");
    //     $("#check_out_hotel").val("{{ request()->check_out }}");
    //     $("#check_in_hotel_d").val("{{ request()->check_in_d }}");
    //     $("#check_out_hotel_d").val("{{ request()->check_out_d }}");
    // });



    // document.addEventListener('DOMContentLoaded', function () {
    //   // console.log("Initializing Flatpickr for check-in and check-out");

    //   // Initialize Flatpickr for Check-in
    //   const checkInInstance = flatpickr("#check_in_hotel", {
    //       dateFormat: "Y-m-d",
    //       minDate: "today", // Prevent past dates
    //       onChange: function (selectedDates, dateStr) {
    //           // console.log("Check-in selected:", dateStr);

    //           const checkOutInput = document.querySelector("#check_out_hotel");
    //           const checkOutInstance = checkOutInput._flatpickr;

    //           if (checkOutInstance) {
    //               // Update minDate for check-out to be the same as the check-in date
    //               checkOutInstance.set("minDate", dateStr);

    //               // Auto-adjust check-out date if it's earlier than the new minDate
    //               const selectedCheckOutDate = checkOutInstance.selectedDates[0];
    //               if (!selectedCheckOutDate || new Date(selectedCheckOutDate) < new Date(dateStr)) {
    //                   // Set check-out to be one day after the check-in date
    //                   const newCheckOutDate = new Date(dateStr);
    //                   // newCheckOutDate.setDate(newCheckOutDate.getDate() + 1);
    //                   // checkOutInstance.setDate(newCheckOutDate); // Update check-out date
    //                   // console.log("Auto-set check-out date to:", newCheckOutDate.toISOString().split('T')[0]);
    //               }
    //           }
    //       }
    //   });

    //   // Initialize Flatpickr for Check-out
    //   const checkOutInstance = flatpickr("#check_out_hotel", {
    //       dateFormat: "Y-m-d",
    //       minDate: "today", // Default minDate is today
    //   });

    //   // console.log("Flatpickr initialized for check-in and check-out");
    // });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hotelInputField = document.getElementById('hotelInputField');
        const hotelDropdownBox = document.getElementById('hotelDropdownBox');
        const hotelOkButton = document.getElementById('hotelOkButton');

        if (!hotelInputField || !hotelDropdownBox) return;

        // Set default values
        const adultsInput = document.getElementById('adultsCounting');
        const roomsInput = document.getElementById('roomsCounting');
        if (adultsInput) adultsInput.value = 1; // Default 1
        if (roomsInput) roomsInput.value = 1; // Default 1

        // Show/Hide dropdown box
        hotelInputField.addEventListener('click', () => {
            hotelDropdownBox.style.display = hotelDropdownBox.style.display === 'block' ? 'none' :
                'block';
        });

        document.addEventListener('click', (event) => {
            if (!hotelInputField.contains(event.target) && !hotelDropdownBox.contains(event.target)) {
                hotelDropdownBox.style.display = 'none';
            }
        });

        // Function to update the displayed input field value
        const updateInputFieldhotel = () => {
            const adults = parseInt(document.getElementById('adultsCounting').value || 0);
            const children = parseInt(document.getElementById('childrenCounting').value || 0);
            // const infants = parseInt(document.getElementById('infantsCounting').value || 0);
            const rooms = parseInt(document.getElementById('roomsCounting').value || 0);

            hotelInputField.value =
                `${adults} Adult${adults > 1 ? 's' : ''}, ${children} Child${children > 1 ? 'ren' : ''}, ${rooms} Room${rooms > 1 ? 's' : ''}`;

            $('#adultsCount').val(adults);
            $('#childrenCount').val(children);
            // $('#infantsCount').val(infants);
            $('#roomsCount').val(rooms);
        };

        // Add event listeners for increment and decrement buttons
        document.querySelectorAll('.quantity2').forEach((quantityWrapper) => {
            const inputField = quantityWrapper.querySelector('.quantity__input2');
            const plusButton = quantityWrapper.querySelector('.quantity__plus2_hotel');
            const minusButton = quantityWrapper.querySelector('.quantity__minus2_hotel');

            // Increment button
            plusButton.addEventListener('click', (e) => {
                e.preventDefault();
                let currentValue = parseInt(inputField.value || 0);

                // Adults max limit = 30, min = 1
                if (inputField.id === 'adultsCounting' && currentValue >= 30) return;

                // Children max limit = 10
                if (inputField.id === 'childrenCounting' && currentValue >= 10) return;

                // Rooms max limit = 30, min = 1
                if (inputField.id === 'roomsCounting' && currentValue >= 30) return;

                inputField.value = currentValue + 1;
                updateInputFieldhotel();
            });

            // Decrement button
            minusButton.addEventListener('click', (e) => {
                e.preventDefault();
                let currentValue = parseInt(inputField.value || 0);

                // Adults minimum limit = 1
                if (inputField.id === 'adultsCounting' && currentValue <= 1) return;

                // Rooms minimum limit = 1
                if (inputField.id === 'roomsCounting' && currentValue <= 1) return;

                // Prevent negative values
                if (currentValue > 0) {
                    inputField.value = currentValue - 1;
                    updateInputFieldhotel();
                }
            });
        });

        // OK button to hide the dropdown
        if (hotelOkButton) {
            hotelOkButton.addEventListener('click', (e) => {
                e.preventDefault();
                hotelDropdownBox.style.display = 'none';
            });
        }
    });
</script>
<script>
    $(document).ready(function() {
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggle_btndd1');
        const myDiv = document.getElementById('toggle_my_dd1');
        const closeBtn = document.getElementById('close_btndd1');

        // Toggle class on button click
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                myDiv.classList.toggle('activesidemybb');
            });
        }


        // Close button inside div
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                myDiv.classList.remove('activesidemybb');
            });
        }

    });
</script>
</body>

</html>

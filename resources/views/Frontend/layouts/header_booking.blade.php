<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="autocomplete" content="off">
    <title>Tourlast</title>
    {{-- <link rel="icon" type="image/x-icon" href="{{asset('booking/images/fav.svg')}}" /> --}}
    <link rel="icon" type="image/x-icon" href="{{ url('') }}/public/assets/img/favicon.png" />
    <link rel="stylesheet" href="{{ asset('booking/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('booking/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('booking/css/responsive.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* Select2 Container */
        .select2-container {
            width: 100% !important;
        }

        /* Select2 Dropdown Box */
        .select2-selection {
            height: 45px !important;
            border: 2px solid #ffae00 !important;
            /* Yellow Border */
            border-radius: 8px !important;
            display: flex;
            align-items: center;
        }

        /* Text Inside Select2 */
        .select2-selection__rendered {
            font-size: 16px !important;
            color: #333 !important;
            padding-left: 12px !important;
        }

        /* Placeholder Text */
        .select2-selection__placeholder {
            color: #999 !important;
        }

        /* Dropdown Arrow */
        .select2-selection__arrow {
            height: 100% !important;
            right: 10px !important;
        }

        /* Dropdown Menu */
        .select2-dropdown {
            border: 2px solid #ffae00 !important;
            /* Yellow Border */
            border-radius: 8px !important;
        }

        /* Dropdown Items */
        .select2-results__option {
            font-size: 16px !important;
            padding: 10px !important;
        }

        /* Hover Effect */
        .select2-results__option--highlighted {
            background-color: #ffae00 !important;
            /* Yellow */
            color: #fff !important;
        }

        .auth-section {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .currency-item.active {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
    </style>

    <style>
        .language-popup {
            /* Make sure it's initially hidden */
            display: none;

            /* Position it fixed so it stays in one place on the screen */
            position: fixed;

            /* Centering: move to the middle, then use transform to offset half its size */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            /* The rest of your styling */
            background: white;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            width: 250px;

            /* Optionally, put a high z-index if you want it above everything */
            z-index: 9999;
        }

        .language-popup img {
            width: 20px;
            height: 15px;
            margin-right: 5px;
        }

        .language-option {
            cursor: pointer;
            padding: 5px;
            display: flex;
            align-items: center;
        }

        .language-option:hover {
            background: #f0f0f0;
        }
    </style>
</head>

<body>
    @php
        $selectedCurrency = session('currency' ?? 'KES');
        $flagURL = session('flagURL' ?? 'https://flagcdn.com/w40/gb.png');
        $selectedLanguage = session('selectedLanguage' ?? 'English');

        $currencies = [
            'AED' => 'United Arab Emirates Dirham (AED)',
            'AFN' => 'Afghan Afghani (AFN)',
            'ALL' => 'Albanian Lek (ALL)',
            'AMD' => 'Armenian Dram (AMD)',
            'ANG' => 'Netherlands Antillean Guilder (ANG)',
            'AOA' => 'Angolan Kwanza (AOA)',
            'ARS' => 'Argentine Peso (ARS)',
            'AUD' => 'Australian Dollar (AUD)',
            'AWG' => 'Aruban Florin (AWG)',
            'AZN' => 'Azerbaijani Manat (AZN)',
            'BAM' => 'Bosnia-Herzegovina Convertible Mark (BAM)',
            'BBD' => 'Barbadian Dollar (BBD)',
            'BDT' => 'Bangladeshi Taka (BDT)',
            'BGN' => 'Bulgarian Lev (BGN)',
            'BHD' => 'Bahraini Dinar (BHD)',
            'BIF' => 'Burundian Franc (BIF)',
            'BMD' => 'Bermudian Dollar (BMD)',
            'BND' => 'Brunei Dollar (BND)',
            'BOB' => 'Bolivian Boliviano (BOB)',
            'BRL' => 'Brazilian Real (BRL)',
            'BSD' => 'Bahamian Dollar (BSD)',
            'BTN' => 'Bhutanese Ngultrum (BTN)',
            'BWP' => 'Botswana Pula (BWP)',
            'BYN' => 'Belarusian Ruble (BYN)',
            'BZD' => 'Belize Dollar (BZD)',
            'CAD' => 'Canadian Dollar (CAD)',
            'CHF' => 'Swiss Franc (CHF)',
            'CNY' => 'Chinese Yuan (CNY)',
            'CZK' => 'Czech Koruna (CZK)',
            'DKK' => 'Danish Krone (DKK)',
            'DOP' => 'Dominican Peso (DOP)',
            'DZD' => 'Algerian Dinar (DZD)',
            'EGP' => 'Egyptian Pound (EGP)',
            'EUR' => 'Euro (EUR)',
            'GBP' => 'British Pound (GBP)',
            'GEL' => 'Georgian Lari (GEL)',
            'GHS' => 'Ghanaian Cedi (GHS)',
            'GMD' => 'Gambian Dalasi (GMD)',
            'HKD' => 'Hong Kong Dollar (HKD)',
            'HUF' => 'Hungarian Forint (HUF)',
            'IDR' => 'Indonesian Rupiah (IDR)',
            'ILS' => 'Israeli New Shekel (ILS)',
            'INR' => 'Indian Rupee (INR)',
            'IQD' => 'Iraqi Dinar (IQD)',
            'IRR' => 'Iranian Rial (IRR)',
            'ISK' => 'Icelandic Króna (ISK)',
            'JMD' => 'Jamaican Dollar (JMD)',
            'JOD' => 'Jordanian Dinar (JOD)',
            'JPY' => 'Japanese Yen (JPY)',
            'KES' => 'Kenyan Shilling (KES)',
            'KGS' => 'Kyrgyzstani Som (KGS)',
            'KHR' => 'Cambodian Riel (KHR)',
            'KRW' => 'South Korean Won (KRW)',
            'KWD' => 'Kuwaiti Dinar (KWD)',
            'KZT' => 'Kazakhstani Tenge (KZT)',
            'LBP' => 'Lebanese Pound (LBP)',
            'LKR' => 'Sri Lankan Rupee (LKR)',
            'LYD' => 'Libyan Dinar (LYD)',
            'MAD' => 'Moroccan Dirham (MAD)',
            'MGA' => 'Malagasy Ariary (MGA)',
            'MMK' => 'Myanmar Kyat (MMK)',
            'MNT' => 'Mongolian Tugrik (MNT)',
            'MXN' => 'Mexican Peso (MXN)',
            'MYR' => 'Malaysian Ringgit (MYR)',
            'NAD' => 'Namibian Dollar (NAD)',
            'NGN' => 'Nigerian Naira (NGN)',
            'NPR' => 'Nepalese Rupee (NPR)',
            'NZD' => 'New Zealand Dollar (NZD)',
            'OMR' => 'Omani Rial (OMR)',
            'PEN' => 'Peruvian Sol (PEN)',
            'PHP' => 'Philippine Peso (PHP)',
            'PKR' => 'Pakistani Rupee (PKR)',
            'PLN' => 'Polish Złoty (PLN)',
            'QAR' => 'Qatari Riyal (QAR)',
            'RUB' => 'Russian Ruble (RUB)',
            'SAR' => 'Saudi Riyal (SAR)',
            'SGD' => 'Singapore Dollar (SGD)',
            'THB' => 'Thai Baht (THB)',
            'TRY' => 'Turkish Lira (TRY)',
            'USD' => 'United States Dollar (USD)',
            'ZAR' => 'South African Rand (ZAR)',
        ];
    @endphp
    <header class="header_sec">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('booking/img/logo.png') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="button_logo">
                        <img src="{{ asset('booking/img/whitelogolong.png') }}" alt="">
                    </div>
                    <div class="navbar_right">
                        <div class="navbar_right_item">
                            {{-- Conditional Menu Based on Active Tab --}}
                            <ul id="flightMenu" style="display: none;">
                                <li><a href="#">List your Airline</a></li>
                                <li><a href="#">Agent</a></li>
                            </ul>



                            <ul id="hotelMenu">
                                <li><a href="#">List your Hotel</a>
                                </li>
                            </ul>

                            <ul id="apartmentMenu" style="display: none;">
                                <li><a href="#">List your
                                        Apartment</a></li>
                            </ul>
                            {{-- <style>
                                .iconImage {
                                    width: 15px !important;
                                    height: 32px !important;
                                }
                            </style> --}}
                            {{-- <a class="main_btn btn"  data-bs-toggle="modal" href="#exampleModalToggle" role="button">Sign/Register</a> --}}
                            <div class="auth-section">
                                @if (auth()->user())
                                    <div class="drop_down_box ">
                                        {{-- <button class="profile_box_toggle" ><img src="img/profile.png" alt="">Johan Doe <img src="img/Down_Arrow_3.svg" class="drop_arrow_icon0" alt=""></button> --}}
                                        <button class="profile_box_toggle"><img
                                                src="{{ asset('booking/img/profile.svg') }}" alt="">
                                            {{ auth()->user()->name ?? 'Welcome!' }}</button>
                                        <div class="profile_dropdwon">
                                            <ul>
                                                <li><a href="#"><img class="iconImage"
                                                            src="{{ asset('frontend/images/icon_1.svg') }}"> My
                                                        Booking</a></li>
                                                <li><a href="#"><img class="iconImage"
                                                            src="{{ asset('frontend/images/icon_5.svg') }}">My
                                                        Account</a></li>
                                                <li><a id="logoutPageOpen" href="#"><img class="iconImage"
                                                            src="{{ asset('frontend/images/logout-svgrepo-com.svg') }}">
                                                        Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="dropdown drop_hed_new">
                                        <button class="btn btn-secondary  " data-bs-toggle="modal" href="#"
                                            role="button">
                                            Sign in
                                        </button>

                                    </div>
                                    <div class="dropdown drop_hed_new">
                                        <button class="btn btn-secondary   " data-bs-toggle="modal" href="#">
                                            Sign up
                                        </button>
                                    </div>
                                    <!-- <a class="main_btn btn hide_button"  data-bs-toggle="modal" href="#login" role="button">Sign in</a>
                  <a class="main_btn btn hide_button"  data-bs-toggle="modal" href="#exampleModalToggle" role="button">Sign Up</a> -->
                                @endif
                            </div>
                        </div>
                        <div class="d-flex gap-1">

                            @if (!empty($selectedLanguage) && !empty($flagURL))
                                <button onclick="togglePopup()" type="button" class="currenc_nvvbtn">
                                    <img id="selectedFlag" src="{{ $flagURL }}">
                                    <span id="selectedLanguage">{{ $selectedLanguage }}</span>
                                </button>
                            @else
                                <button type="button" class="currenc_nvvbtn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img id="selectedFlag" src="https://flagcdn.com/w40/gb.png">
                                    <span id="selectedLanguage">en</span>
                                </button>
                            @endif
                            <button type="button" class="currenc_nvvbtn1">
                                USD
                            </button>
                            <a href="#">
                                <h3 style="color: red;" class="header_th_icn">?</h3>
                            </a>
                            <!-- <button type="button" class="currenc_nvvbtn currenc_nvvbtn1" data-bs-toggle="modal" data-bs-target="#contryModelv">
              {{ $selectedCurrency ?? 'KES' }}
            </button> -->


                        </div>



                        <!-- <form action="#" method="POST" id="currencyForm" class="mb-0">
              @csrf
              <select class="form-select currency_select_vv1" name="currency" id="currencySelect" onchange="document.getElementById('currencyForm').submit();">
                  @foreach ($currencies as $code => $name)
<option value="{{ $code }}" {{ $selectedCurrency == $code ? 'selected' : '' }}>
                          {{ $name }}
                      </option>
@endforeach
              </select>
          </form> -->
                    </div>
                </div>
            </div>
        </nav>



        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the current page URL path
                const currentPath = window.location.pathname;

                // Select all sidebar links
                const sideLinks = document.querySelectorAll('.side_link a');

                sideLinks.forEach(link => {
                    // Compare href with current URL path
                    if (link.getAttribute('href').includes(currentPath)) {
                        link.parentElement.classList.add('active');
                    }
                });
            });
        </script>



        <div class="modal flag_model_vv1 fade" id="contryModelv" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Currency</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="country_flages">
                            <ul>
                                @foreach ($currencies as $code => $name)
                                    <li class="currency-item {{ $selectedCurrency == $code ? 'active' : '' }}"
                                        data-code="{{ $code }}">
                                        <img src="https://flagcdn.com/w40/{{ strtolower(substr($code, 0, 2)) }}.png"
                                            alt="{{ $name }} Flag">
                                        {{ $name }} - {{ $code }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="google_translate_element" style="display: none;"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>

    </header>



    <script>
        function togglePopup() {
            var popup = document.getElementById('languagePopup');
            popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
        }

        function changeLanguage(lang, flagUrl) {
            var select = document.querySelector(".goog-te-combo");
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
            }

            // Update the button with selected language and flag
            document.getElementById("selectedFlag").src = flagUrl;
            document.getElementById("selectedLanguage").innerText = document.querySelector(
                `.language-option[onclick*="${lang}"]`).innerText.trim();

            // Hide the popup
            document.getElementById('languagePopup').style.display = 'none';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "#",
                type: 'POST',
                data: {
                    lang: lang,
                    flagUrl: flagUrl
                },
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        // Language change hone ke baad page reload
                        window.location.reload();
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

        }
    </script>



    <style type="text/css">
        .language-option {
            flex: 0 0 calc(33.33% - 10px);
            display: flex;
            gap: 10px;
        }

        .language-option img {
            flex: 0 0 24px;
            max-width: 24px;
        }

        .language-popup1 {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            max-height: calc(100vh - 150px);
            overflow: auto;
        }

        .header_th_icn {
            justify-content: center;
            width: 40px;
            height: 40px;
            align-items: center;
            display: flex;
            margin-bottom: 0;
            border-radius: 100px;
            background: #ffffff6e;
            margin-left: 7px;
            color: #0c5295 !important;
            border: 1px solid #0c5295;
            font-size: 20px;
        }

        @media(max-width: 575.98px) {
            .language-option {
                flex: 0 0 calc(50% - 10px);
            }

            .language-popup1 {
                max-height: calc(100vh - 113px);
            }
        }
    </style>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="language-popup1">
                        <div class="language-option" onclick="changeLanguage('af','https://flagcdn.com/w40/za.png')">
                            <img src="https://flagcdn.com/w40/za.png"> Afrikaans
                        </div>
                        <div class="language-option" onclick="changeLanguage('sq','https://flagcdn.com/w40/al.png')">
                            <img src="https://flagcdn.com/w40/al.png"> Albanian
                        </div>
                        <div class="language-option" onclick="changeLanguage('ar','https://flagcdn.com/w40/sa.png')">
                            <img src="https://flagcdn.com/w40/sa.png"> Arabic
                        </div>
                        <div class="language-option" onclick="changeLanguage('hy','https://flagcdn.com/w40/am.png')">
                            <img src="https://flagcdn.com/w40/am.png"> Armenian
                        </div>
                        <div class="language-option" onclick="changeLanguage('az','https://flagcdn.com/w40/az.png')">
                            <img src="https://flagcdn.com/w40/az.png"> Azerbaijani
                        </div>
                        <div class="language-option" onclick="changeLanguage('eu','https://flagcdn.com/w40/es.png')">
                            <img src="https://flagcdn.com/w40/es.png"> Basque
                        </div>
                        <div class="language-option" onclick="changeLanguage('bn','https://flagcdn.com/w40/bd.png')">
                            <img src="https://flagcdn.com/w40/bd.png"> Bengali
                        </div>
                        <div class="language-option" onclick="changeLanguage('bs','https://flagcdn.com/w40/ba.png')">
                            <img src="https://flagcdn.com/w40/ba.png"> Bosnian
                        </div>
                        <div class="language-option" onclick="changeLanguage('bg','https://flagcdn.com/w40/bg.png')">
                            <img src="https://flagcdn.com/w40/bg.png"> Bulgarian
                        </div>
                        <div class="language-option" onclick="changeLanguage('ca','https://flagcdn.com/w40/es.png')">
                            <img src="https://flagcdn.com/w40/es.png"> Catalan
                        </div>
                        <div class="language-option"
                            onclick="changeLanguage('zh-CN','https://flagcdn.com/w40/cn.png')">
                            <img src="https://flagcdn.com/w40/cn.png"> Chinese (Simplified)
                        </div>
                        <div class="language-option"
                            onclick="changeLanguage('zh-TW','https://flagcdn.com/w40/tw.png')">
                            <img src="https://flagcdn.com/w40/tw.png"> Chinese (Traditional)
                        </div>
                        <div class="language-option" onclick="changeLanguage('hr','https://flagcdn.com/w40/hr.png')">
                            <img src="https://flagcdn.com/w40/hr.png"> Croatian
                        </div>
                        <div class="language-option" onclick="changeLanguage('cs','https://flagcdn.com/w40/cz.png')">
                            <img src="https://flagcdn.com/w40/cz.png"> Czech
                        </div>
                        <div class="language-option" onclick="changeLanguage('da','https://flagcdn.com/w40/dk.png')">
                            <img src="https://flagcdn.com/w40/dk.png"> Danish
                        </div>
                        <div class="language-option" onclick="changeLanguage('nl','https://flagcdn.com/w40/nl.png')">
                            <img src="https://flagcdn.com/w40/nl.png"> Dutch
                        </div>
                        <div class="language-option" onclick="changeLanguage('en','https://flagcdn.com/w40/gb.png')">
                            <img src="https://flagcdn.com/w40/gb.png"> English
                        </div>
                        <div class="language-option" onclick="changeLanguage('et','https://flagcdn.com/w40/ee.png')">
                            <img src="https://flagcdn.com/w40/ee.png"> Estonian
                        </div>
                        <div class="language-option" onclick="changeLanguage('tl','https://flagcdn.com/w40/ph.png')">
                            <img src="https://flagcdn.com/w40/ph.png"> Filipino
                        </div>
                        <div class="language-option" onclick="changeLanguage('fi','https://flagcdn.com/w40/fi.png')">
                            <img src="https://flagcdn.com/w40/fi.png"> Finnish
                        </div>
                        <div class="language-option" onclick="changeLanguage('fr','https://flagcdn.com/w40/fr.png')">
                            <img src="https://flagcdn.com/w40/fr.png"> French
                        </div>
                        <div class="language-option" onclick="changeLanguage('de','https://flagcdn.com/w40/de.png')">
                            <img src="https://flagcdn.com/w40/de.png"> German
                        </div>
                        <div class="language-option" onclick="changeLanguage('el','https://flagcdn.com/w40/gr.png')">
                            <img src="https://flagcdn.com/w40/gr.png"> Greek
                        </div>
                        <div class="language-option" onclick="changeLanguage('gu','https://flagcdn.com/w40/in.png')">
                            <img src="https://flagcdn.com/w40/in.png"> Gujarati
                        </div>
                        <div class="language-option" onclick="changeLanguage('hi','https://flagcdn.com/w40/in.png')">
                            <img src="https://flagcdn.com/w40/in.png"> Hindi
                        </div>
                        <div class="language-option" onclick="changeLanguage('hu','https://flagcdn.com/w40/hu.png')">
                            <img src="https://flagcdn.com/w40/hu.png"> Hungarian
                        </div>
                        <div class="language-option" onclick="changeLanguage('is','https://flagcdn.com/w40/is.png')">
                            <img src="https://flagcdn.com/w40/is.png"> Icelandic
                        </div>
                        <div class="language-option" onclick="changeLanguage('id','https://flagcdn.com/w40/id.png')">
                            <img src="https://flagcdn.com/w40/id.png"> Indonesian
                        </div>
                        <div class="language-option" onclick="changeLanguage('it','https://flagcdn.com/w40/it.png')">
                            <img src="https://flagcdn.com/w40/it.png"> Italian
                        </div>
                        <div class="language-option" onclick="changeLanguage('ja','https://flagcdn.com/w40/jp.png'">
                            <img src="https://flagcdn.com/w40/jp.png"> Japanese
                        </div>
                        <div class="language-option" onclick="changeLanguage('kn','https://flagcdn.com/w40/in.png')">
                            <img src="https://flagcdn.com/w40/in.png"> Kannada
                        </div>
                        <div class="language-option" onclick="changeLanguage('ko','https://flagcdn.com/w40/kr.png')">
                            <img src="https://flagcdn.com/w40/kr.png"> Korean
                        </div>
                        <div class="language-option" onclick="changeLanguage('ms','https://flagcdn.com/w40/my.png')">
                            <img src="https://flagcdn.com/w40/my.png"> Malay
                        </div>
                        <div class="language-option" onclick="changeLanguage('ne','https://flagcdn.com/w40/np.png')">
                            <img src="https://flagcdn.com/w40/np.png"> Nepali
                        </div>
                        <div class="language-option" onclick="changeLanguage('no','https://flagcdn.com/w40/no.png')">
                            <img src="https://flagcdn.com/w40/no.png"> Norwegian
                        </div>
                        <div class="language-option" onclick="changeLanguage('fa','https://flagcdn.com/w40/ir.png')">
                            <img src="https://flagcdn.com/w40/ir.png"> Persian
                        </div>
                        <div class="language-option" onclick="changeLanguage('pl','https://flagcdn.com/w40/pl.png')">
                            <img src="https://flagcdn.com/w40/pl.png"> Polish
                        </div>
                        <div class="language-option" onclick="changeLanguage('pt','https://flagcdn.com/w40/pt.png')">
                            <img src="https://flagcdn.com/w40/pt.png"> Portuguese
                        </div>
                        <div class="language-option" onclick="changeLanguage('ro','https://flagcdn.com/w40/ro.png')">
                            <img src="https://flagcdn.com/w40/ro.png"> Romanian
                        </div>
                        <div class="language-option" onclick="changeLanguage('ru','https://flagcdn.com/w40/ru.png')">
                            <img src="https://flagcdn.com/w40/ru.png"> Russian
                        </div>
                        <div class="language-option" onclick="changeLanguage('es','https://flagcdn.com/w40/es.png')">
                            <img src="https://flagcdn.com/w40/es.png"> Spanish
                        </div>
                        <div class="language-option" onclick="changeLanguage('ta','https://flagcdn.com/w40/in.png')">
                            <img src="https://flagcdn.com/w40/in.png"> Tamil
                        </div>
                        <div class="language-option" onclick="changeLanguage('te','https://flagcdn.com/w40/in.png')">
                            <img src="https://flagcdn.com/w40/in.png"> Telugu
                        </div>
                        <div class="language-option" onclick="changeLanguage('th','https://flagcdn.com/w40/th.png')">
                            <img src="https://flagcdn.com/w40/th.png"> Thai
                        </div>
                        <div class="language-option" onclick="changeLanguage('tr','https://flagcdn.com/w40/tr.png')">
                            <img src="https://flagcdn.com/w40/tr.png"> Turkish
                        </div>
                        <div class="language-option" onclick="changeLanguage('uk','https://flagcdn.com/w40/ua.png')">
                            <img src="https://flagcdn.com/w40/ua.png"> Ukrainian
                        </div>
                        <div class="language-option" onclick="changeLanguage('vi','https://flagcdn.com/w40/vn.png')">
                            <img src="https://flagcdn.com/w40/vn.png"> Vietnamese
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

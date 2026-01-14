<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Required CSS Libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
{{-- <link rel="stylesheet" href="{{asset('booking/css/style.css')}}" /> --}}
<style>
    /* Main Container */
    /* .search-container {
        margin: 0 auto;
        padding: 20px;
    } */

    /* Banner Title */
    .banner-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .banner-title h2 {
        font-size: 42px;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .banner-title p {
        font-size: 18px;
        color: var(--darkgrey);
    }

    /* Main Search Card */
    .search-card {
        background: var(--white);
        border-radius: var(--border-radius);
        padding: 35px;
        margin-bottom: 40px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, .2);
        margin-top: -50px;
        position: relative;
        /* Add this to ensure it layers correctly on top */
        z-index: 10;
        /* Optional: higher value to ensure it's visually on top if needed */
    }

    /* Tab Navigation */
    /* .tab-navigation {
    display: inline-flex;
    gap: 5px;
    background: var(--primary);
    padding: 5px;
    border-radius: 10px;
    margin-bottom: 30px;

    overflow-x: auto;            /
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding-left: 10px;
    padding-right: 10px;
} */

    /* Hide scrollbar in WebKit browsers (Chrome, Safari, new Edge) */
    /* .tab-navigation::-webkit-scrollbar {
    display: none;
} */

    .tab-navigation {
        display: flex;
        gap: 28px;
        align-items: center;
        margin-bottom: 32px;

        overflow-x: auto;
        scrollbar-width: none;
    }

    .tab-navigation::-webkit-scrollbar {
        display: none;
    }

    /* Tab item */
    .tab-icon {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;

        min-width: 84px;
        cursor: pointer;
        color: grey;

        transition: all 0.25s ease;
    }

    /* Icon */
    .tab-icon i {
        font-size: 30px;
        line-height: 1;
    }

    /* Label */
    .tab-icon span {
        font-size: 13px;
        font-weight: 500;
    }

    /* Hover */
    .tab-icon:hover {
        color: grey;
    }

    /* Active */
    .tab-icon.active {
        color: var(--primary);
    }

    /* Active underline (clean, modern) */
    .tab-icon.active::after {
        content: "";
        width: 28px;
        height: 3px;
        background: var(--primary);
        border-radius: 10px;
        margin-top: 6px;
    }

    .tab-btn {
        padding: 10px 20px;
        background: transparent;
        border: none;
        color: var(--white);
        font-size: 14px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        white-space: nowrap;
    }

    .tab-btn:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .tab-btn.active {
        background: var(--white);
        color: var(--primary);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .tab-btn i {
        font-size: 16px;
    }

    /* Tab Content */
    .tab-content-wrapper {
        display: none;
    }

    .tab-content-wrapper.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .tab-icon {
            min-width: 96px;
        }

        .tab-icon i {
            font-size: 34px;
        }
    }

    /* Flight Options */
    .flight-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .trip-type-options {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .radio-option {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        font-size: 15px;
        color: var(--darkgrey);
        font-weight: 500;
    }

    .radio-option input[type="radio"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: var(--primary);
    }

    /* Class Select Dropdown */
    .class-select select {
        padding: 10px 35px 10px 15px;
        border: 2px solid var(--primary);
        border-radius: 8px;
        background: var(--white);
        color: var(--primary);
        font-weight: 600;
        cursor: pointer;
        font-size: 14px;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%230b5394' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
    }

    /* Form Grid */
    .search-form-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr 1.2fr 1fr 150px;
        gap: 15px;
        margin-bottom: 20px;
        align-items: center;
    }

    .search-form-grid.full-width {
        grid-template-columns: 1fr;
    }

    /* Specific grid layouts for different tabs */
    #hotel-tab .search-form-grid,
    #apartment-tab .search-form-grid {
        grid-template-columns: 1.3fr 1.2fr 1fr 150px;
    }

    /* Location and Destination inputs get more space */
    .location-input,
    .destination-input {
        min-width: 0;
    }

    /* Swap button standalone */
    .swap-btn-standalone {
        width: 45px;
        height: var(--input-height);
        background: var(--white);
        border: 2px solid var(--primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        color: var(--primary);
        flex-shrink: 0;
    }

    .swap-btn-standalone:hover {
        background: var(--primary);
        color: var(--white);
        transform: rotate(180deg);
    }

    /* Input Group */
    .input-group-custom {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        color: var(--mediumgrey);
        font-size: 18px;
        z-index: 2;
        pointer-events: none;
    }

    .input-group-custom input,
    .input-group-custom select {
        width: 100%;
        height: var(--input-height);
        padding: 12px 15px 12px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: var(--white);
        color: var(--black);
    }

    .input-group-custom input::placeholder {
        color: var(--mediumgrey);
    }

    .input-group-custom input[readonly] {
        cursor: pointer;
        background-color: var(--white);
    }

    .input-group-custom input:focus,
    .input-group-custom select:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(11, 83, 148, 0.1);
    }

    /* Select2 Styling */
    .select2-container--default .select2-selection--single {
        height: var(--input-height) !important;
        border: 2px solid #e0e0e0 !important;
        border-radius: 10px !important;
        padding-left: 45px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 46px !important;
        color: var(--black) !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: var(--mediumgrey) !important;
    }

    .select2-container--default.select2-container--focus .select2-selection--single {
        border-color: var(--primary) !important;
        box-shadow: 0 0 0 3px rgba(11, 83, 148, 0.1) !important;
    }

    /* Swap Button */
    .swap-btn {
        position: absolute;
        right: -20px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--white);
        border: 2px solid var(--primary);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        color: var(--primary);
    }

    .swap-btn:hover {
        background: var(--primary);
        color: var(--white);
        transform: translateY(-50%) rotate(180deg);
    }

    /* Date Range Picker */
    .date-range-wrapper {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        overflow: hidden;
        height: var(--input-height);
    }

    .date-range-wrapper.single {
        grid-template-columns: 1fr;
    }

    .date-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .date-input-wrapper:first-child {
        border-right: 1px solid #e0e0e0;
    }

    .date-input-wrapper .input-icon {
        left: 15px;
    }

    .date-input-wrapper input {
        border: none;
        border-radius: 0;
        height: 100%;
    }

    .date-input-wrapper input:focus {
        box-shadow: none;
    }

    /* Passenger Dropdown */
    .passenger-dropdown {
        position: relative;
    }

    .passenger-input {
        cursor: pointer;
        background: var(--white) !important;
    }

    .passenger-dropdown-menu {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        right: 0;
        background: var(--white);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        display: none;
        min-width: 320px;
    }

    .passenger-dropdown-menu.active {
        display: block;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .passenger-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .passenger-row:last-child {
        border-bottom: none;
    }

    .passenger-label h6 {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
        color: var(--black);
    }

    .passenger-label span {
        font-size: 13px;
        color: var(--mediumgrey);
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .quantity-btn {
        width: 32px;
        height: 32px;
        border: 2px solid #e0e0e0;
        border-radius: 50%;
        background: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        color: var(--darkgrey);
        font-size: 18px;
    }

    .quantity-btn:hover:not(:disabled) {
        border-color: var(--primary);
        color: var(--primary);
        background: rgba(11, 83, 148, 0.05);
    }

    .quantity-btn:disabled {
        opacity: 0.3;
        cursor: not-allowed;
    }

    .quantity-display {
        min-width: 40px;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: var(--black);
    }

    .dropdown-done-btn {
        width: 100%;
        padding: 12px;
        background: var(--primary);
        color: var(--white);
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 15px;
        transition: all 0.3s ease;
    }

    .dropdown-done-btn:hover {
        background: #094070;
    }

    /* Search Button */
    .search-btn {
        width: 150px;
        padding: 15px 20px;
        background: var(--primary);
        color: var(--white);
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.3s ease;
        height: var(--input-height);
        white-space: nowrap;
    }

    .search-btn:hover {
        background: #094070;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(11, 83, 148, 0.3);
    }

    .search-btn i {
        font-size: 16px;
    }

    /* Multi City Section */
    .multi-city-section {
        display: none;
        margin-top: 20px;
    }

    .multi-city-section.active {
        display: block;
    }

    .multi-city-flight {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr auto;
        gap: 15px;
        margin-bottom: 15px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        position: relative;
    }

    .multi-city-flight .flight-number {
        position: absolute;
        top: -10px;
        left: 20px;
        background: var(--primary);
        color: var(--white);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .remove-flight-btn {
        width: 40px;
        height: var(--input-height);
        background: #f44336;
        color: var(--white);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        align-self: end;
    }

    .remove-flight-btn:hover {
        background: #d32f2f;
    }

    .add-flight-btn {
        width: 100%;
        padding: 12px;
        background: transparent;
        color: var(--primary);
        border: 2px dashed var(--primary);
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .add-flight-btn:hover {
        background: rgba(11, 83, 148, 0.05);
    }

    /* Child Age Dropdowns */
    .child-age-section {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #f0f0f0;
    }

    .child-age-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .child-age-row label {
        font-size: 14px;
        color: var(--darkgrey);
    }

    .child-age-row select {
        padding: 8px 12px;
        border: 2px solid #e0e0e0;
        border-radius: 6px;
        font-size: 14px;
        width: 80px;
    }

    /* Toggle Switch */
    .toggle-switch {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 0;
    }

    .toggle-switch label {
        font-size: 15px;
        color: var(--darkgrey);
        margin: 0;
    }

    .switch {
        position: relative;
        width: 50px;
        height: 26px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        border-radius: 34px;
        cursor: pointer;
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        border-radius: 50%;
        transition: 0.4s;
    }

    input:checked+.slider {
        background-color: var(--primary);
    }

    input:checked+.slider:before {
        transform: translateX(24px);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .search-form-grid {
            grid-template-columns: 1fr auto 1fr 1fr 1fr 150px;
        }

        #hotel-tab .search-form-grid,
        #apartment-tab .search-form-grid {
            grid-template-columns: 1fr 1fr 1fr 150px;
        }

        .multi-city-flight {
            grid-template-columns: 1fr;
        }

        .multi-city-flight .location-group-wrapper {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .multi-city-flight .swap-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .multi-city-flight .swap-btn:hover {
            transform: translateY(-50%) rotate(180deg);
        }
    }

    @media (max-width: 768px) {
        .banner-title h2 {
            font-size: 32px;
        }

        .search-card {
            padding: 20px;
        }

        .tab-btn {
            min-width: 120px;
            font-size: 14px;
            padding: 12px 15px;
        }

        .search-form-grid,
        #hotel-tab .search-form-grid,
        #apartment-tab .search-form-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .swap-btn-standalone {
            display: none;
        }

        .flight-options {
            flex-direction: column;
            align-items: flex-start;
        }

        .date-range-wrapper {
            grid-template-columns: 1fr;
        }

        .date-input-wrapper:first-child {
            border-right: none;
            border-bottom: 1px solid #e0e0e0;
        }

        .search-btn {
            width: 100%;
        }

        .passenger-dropdown-menu {
            left: -20px;
            right: -20px;
            min-width: auto;
        }
    }

    @media (max-width: 480px) {
        .banner-title h2 {
            font-size: 26px;
        }

        .search-card {
            padding: 15px;
        }

        .tab-navigation {
            display: flex;
            /* Change to full flex for better control */
            width: 100%;
            /* Take full width */
            justify-content: flex-start;
            /* Tabs start from left */
            padding: 8px 10px;
            /* Slightly more padding for touch targets */
            margin-bottom: 20px;
            /* Reduce bottom margin on mobile */
        }

        .tab-btn {
            min-width: 100%;
        }
    }

    /* Loading Animation */
    .btn-loading {
        position: relative;
        pointer-events: none;
    }

    .btn-loading:after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        top: 50%;
        left: 50%;
        margin-left: -8px;
        margin-top: -8px;
        border: 2px solid var(--white);
        border-radius: 50%;
        border-top-color: transparent;
        animation: spinner 0.6s linear infinite;
    }

    @keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    /* Modern DateRangePicker Styling */
    .daterangepicker {
        border: none;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        border-radius: 16px;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        overflow: hidden;
        max-width: 650px;
    }

    .daterangepicker:before,
    .daterangepicker:after {
        display: none;
    }

    /* Calendar Header */
    .daterangepicker .calendar-table {
        background: var(--white);
        padding: 20px;
        border-radius: 16px;
    }

    .daterangepicker .calendar-table thead tr:first-child th {
        padding: 15px 0 20px 0;
        font-weight: 700;
        font-size: 18px;
        color: var(--primary);
        border-bottom: 2px solid #f0f0f0;
    }

    .daterangepicker .calendar-table thead tr:last-child th {
        padding: 15px 5px;
        font-weight: 700;
        font-size: 13px;
        color: var(--darkgrey);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Month Navigation */
    .daterangepicker th.prev,
    .daterangepicker th.next {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .daterangepicker th.prev:hover,
    .daterangepicker th.next:hover {
        background-color: var(--lightgrey);
    }

    .daterangepicker th.prev span,
    .daterangepicker th.next span {
        border-width: 0 2px 2px 0;
        border-color: var(--primary);
        padding: 4px;
    }

    /* Calendar Days - Optimized size */
    .daterangepicker td {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
        position: relative;
        padding: 4px;
    }

    .daterangepicker td.available {
        color: var(--black);
    }

    .daterangepicker td.available:hover {
        background-color: var(--lightgrey);
        transform: scale(1.05);
    }

    /* Disabled/Off dates */
    .daterangepicker td.off,
    .daterangepicker td.disabled {
        color: #ccc;
        cursor: not-allowed;
    }

    .daterangepicker td.off:hover,
    .daterangepicker td.disabled:hover {
        background-color: transparent;
        transform: none;
    }

    /* Active/Selected dates */
    .daterangepicker td.active,
    .daterangepicker td.active:hover {
        background: linear-gradient(135deg, var(--primary) 0%, #094070 100%);
        color: var(--white);
        font-weight: 700;
        box-shadow: 0 4px 12px rgba(11, 83, 148, 0.3);
        transform: scale(1.08);
        z-index: 10;
    }

    /* Start and End dates styling */
    .daterangepicker td.start-date {
        border-radius: 10px 4px 4px 10px;
        background: var(--primary);
        color: var(--white);
        font-weight: 700;
        box-shadow: 0 4px 12px rgba(11, 83, 148, 0.3);
    }

    .daterangepicker td.end-date {
        border-radius: 4px 10px 10px 4px;
        background: var(--primary);
        color: var(--white);
        font-weight: 700;
        box-shadow: 0 4px 12px rgba(11, 83, 148, 0.3);
    }

    .daterangepicker td.start-date.end-date {
        border-radius: 10px;
    }

    /* In-range dates */
    .daterangepicker td.in-range {
        background: linear-gradient(135deg, rgba(160, 211, 254, 0.35) 0%, rgba(160, 211, 254, 0.5) 100%);
        color: var(--primary);
        border-radius: 4px;
        font-weight: 600;
    }

    .daterangepicker td.in-range:hover {
        background: linear-gradient(135deg, rgba(160, 211, 254, 0.5) 0%, rgba(160, 211, 254, 0.7) 100%);
        transform: scale(1.05);
    }

    /* Today's date */
    .daterangepicker td.today {
        position: relative;
        font-weight: 700;
    }

    .daterangepicker td.today:after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        background-color: var(--primary);
        border-radius: 50%;
    }

    .daterangepicker td.today.active:after {
        background-color: var(--white);
    }

    /* Calendar Container */
    .daterangepicker .drp-calendar {
        padding: 10px;
    }

    .daterangepicker .drp-calendar.left {
        border-right: 2px solid #f0f0f0;
        padding-right: 15px;
    }

    .daterangepicker .drp-calendar.right {
        padding-left: 15px;
    }

    /* Buttons Section */
    .daterangepicker .drp-buttons {
        border-top: 2px solid #f0f0f0;
        padding: 20px;
        background: #fafafa;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
    }

    .daterangepicker .drp-buttons .btn {
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 14px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: capitalize;
    }

    .daterangepicker .drp-buttons .btn-default {
        background-color: #e0e0e0;
        color: var(--darkgrey);
    }

    .daterangepicker .drp-buttons .btn-default:hover {
        background-color: #d0d0d0;
        transform: translateY(-2px);
    }

    .daterangepicker .drp-buttons .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, #094070 100%);
        color: var(--white);
        box-shadow: 0 4px 12px rgba(11, 83, 148, 0.3);
    }

    .daterangepicker .drp-buttons .btn-primary:hover {
        box-shadow: 0 6px 16px rgba(11, 83, 148, 0.4);
        transform: translateY(-2px);
    }

    /* Date Range Display */
    .daterangepicker .drp-selected {
        font-size: 14px;
        color: var(--primary);
        font-weight: 700;
        padding: 15px 20px;
        background: var(--lightgrey);
        border-radius: 8px;
        margin: 12px 20px;
    }

    /* Month Selector */
    .daterangepicker select.monthselect,
    .daterangepicker select.yearselect {
        padding: 8px 12px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        color: var(--primary);
        background: var(--white);
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0 4px;
    }

    .daterangepicker select.monthselect:hover,
    .daterangepicker select.yearselect:hover {
        border-color: var(--primary);
    }

    .daterangepicker select.monthselect:focus,
    .daterangepicker select.yearselect:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(11, 83, 148, 0.1);
    }

    /* Responsive Calendar - Improved */
    @media (max-width: 1200px) {
        .daterangepicker {
            max-width: 600px;
        }

        .daterangepicker td {
            width: 40px;
            height: 40px;
        }
    }

    @media (max-width: 992px) {
        .daterangepicker {
            max-width: 550px;
        }

        .daterangepicker td {
            width: 38px;
            height: 38px;
            font-size: 13px;
        }

        .daterangepicker .calendar-table {
            padding: 18px;
        }

        .daterangepicker .drp-calendar.left {
            padding-right: 12px;
        }

        .daterangepicker .drp-calendar.right {
            padding-left: 12px;
        }
    }

    @media (max-width: 768px) {
        .daterangepicker {
            max-width: 95vw;
        }

        .daterangepicker .drp-calendar {
            padding: 8px;
        }

        .daterangepicker .drp-calendar.left {
            border-right: none;
            border-bottom: 2px solid #f0f0f0;
            padding-right: 8px;
            padding-bottom: 15px;
        }

        .daterangepicker .drp-calendar.right {
            padding-left: 8px;
            padding-top: 15px;
        }

        .daterangepicker td {
            width: 36px;
            height: 36px;
            font-size: 13px;
        }

        .daterangepicker .calendar-table {
            padding: 15px;
        }

        .daterangepicker .calendar-table thead tr:first-child th {
            font-size: 16px;
            padding: 12px 0 18px 0;
        }

        .daterangepicker .calendar-table thead tr:last-child th {
            padding: 12px 3px;
            font-size: 12px;
        }

        .daterangepicker .drp-buttons {
            padding: 15px;
        }

        .daterangepicker .drp-buttons .btn {
            padding: 10px 20px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .daterangepicker td {
            width: 32px;
            height: 32px;
            font-size: 12px;
        }

        .daterangepicker .calendar-table {
            padding: 12px;
        }

        .daterangepicker .calendar-table thead tr:first-child th {
            font-size: 15px;
        }
    }

    /* Animation for calendar popup */
    .daterangepicker.show-calendar {
        animation: slideUpFade 0.3s ease;
    }

    @keyframes slideUpFade {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Additional Styling */
    .location-group-wrapper {
        position: relative;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 10px;
        align-items: center;
    }

    .location-group-wrapper .swap-btn {
        position: static;
        transform: none;
        margin: 0;
    }

    .location-group-wrapper .swap-btn:hover {
        transform: rotate(180deg);
    }

    .pets-info {
        font-size: 12px;
        color: var(--mediumgrey);
        margin-top: 5px;
        line-height: 1.4;
    }
</style>


<div class="container">

    <!-- Main Search Card -->
    <div class="search-card">
        <!-- Tab Navigation -->
        {{-- <div class="tab-navigation">
            <button
                class="tab-btn {{ request()->hasAny(['flight', 'hotel', 'apartment']) ? (request()->flight == 'flight' ? 'active' : '') : 'active' }}"
                onclick="showMenu('flight'); switchTab('flight')" data-tab="flight" id="pills-home-tab"
                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                aria-controls="pills-home"
                aria-selected="{{ request()->hasAny(['flight', 'hotel', 'apartment']) ? (request()->flight == 'flight' ? 'true' : 'false') : 'true' }}">
                <i class="fas fa-plane"></i>
                <span>Flights</span>
            </button>
            <button class="tab-btn {{ request()->hotel == 'hotel' ? 'active' : '' }}"
                onclick="showMenu('hotel'); switchTab('hotel')" data-tab="hotel" id="pills-profile-tab"
                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                aria-controls="pills-profile" aria-selected="{{ request()->hotel == 'hotel' ? 'true' : 'false' }}">
                <i class="fas fa-hotel"></i>
                <span>Hotels</span>
            </button>
            <button class="tab-btn {{ request()->apartment == 'apartment' ? 'active' : '' }}"
                onclick="showMenu('apartment'); switchTab('apartment')" data-tab="apartment" id="pills-contact-tab"
                data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                aria-controls="pills-contact"
                aria-selected="{{ request()->apartment == 'apartment' ? 'true' : 'false' }}">
                <i class="fas fa-building"></i>
                <span>Apartments</span>
            </button>
        </div> --}}

        <div class="tab-navigation">

            <!-- Flights -->

            <div class="tab-icon" data-tab="flight" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab"
                aria-selected="false" {{-- onclick="showMenu('flight'); switchTab('flight')"  --}}>
                <i class="fa-solid fa-plane-up"></i>
                <span>Flights</span>
            </div>

            <!-- Hotels -->

            <div class="tab-icon active" data-tab="hotel" data-bs-toggle="pill" data-bs-target="#pills-profile"
                role="tab" aria-selected="true" onclick="showMenu('hotel'); switchTab('hotel')">
                <i class="fa-solid fa-hotel"></i>
                <span>Hotels</span>
            </div>

            <!-- Apartments -->
            <div class="tab-icon" data-tab="apartment" data-bs-toggle="pill" data-bs-target="#pills-contact"
                role="tab" aria-selected="false" {{-- onclick="showMenu('apartment'); switchTab('apartment')"  --}}>
                <i class="fa-solid fa-building"></i>
                <span>Apartments</span>
            </div>

        </div>


        <!-- Flight Tab -->
        <div id="flight-tab" class="tab-content-wrapper {{ request()->flight == 'flight' ? 'active' : '' }}"
            {{--  class="tab-content-wrapper {{ request()->hasAny(['flight', 'hotel', 'apartment']) ? (request()->flight == 'flight' ? '' : 'active') : '' }}"  --}} role="tabpanel" aria-labelledby="pills-home-tab" data-pills-id="pills-home">
            <form class="flight-form" method="GET" action="#">
                @csrf

                <!-- Flight Options -->
                <div class="flight-options">
                    <div class="trip-type-options">
                        <label class="radio-option">
                            <input type="radio" name="trip_type" value="return"
                                {{ request('trip_type', 'return') == 'return' ? 'checked' : '' }}
                                onchange="updateFlightType('return')">
                            <span>Round-trip</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="trip_type" value="one_way"
                                {{ request('trip_type') == 'one_way' ? 'checked' : '' }}
                                onchange="updateFlightType('one_way')">
                            <span>One-way</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="trip_type" value="multi_city"
                                {{ request('trip_type') == 'multi_city' ? 'checked' : '' }}
                                onchange="updateFlightType('multi_city')">
                            <span>Multi-city</span>
                        </label>
                    </div>

                    <div class="class-select">
                        <select name="className">
                            <option value="Economy" {{ request('className') == 'Economy' ? 'selected' : '' }}>Economy
                            </option>
                            <option value="Premium economy"
                                {{ request('className') == 'Premium economy' ? 'selected' : '' }}>Premium Economy
                            </option>
                            <option value="Business" {{ request('className') == 'Business' ? 'selected' : '' }}>
                                Business</option>
                            <option value="First class" {{ request('className') == 'First class' ? 'selected' : '' }}>
                                First Class</option>
                        </select>
                    </div>
                </div>

                <!-- Single/Round Trip Search -->
                <div id="single-trip-section">
                    <div class="search-form-grid">
                        <!-- From Location -->
                        <div class="input-group-custom location-input">
                            <i class="fas fa-plane-departure input-icon"></i>
                            <select class="select2 airport-select" name="from_destination[]" id="from_location_single">
                                <option value="" disabled selected>Departing from?</option>
                                @foreach ($airportList ?? [] as $airport)
                                    <option value="{{ $airport->AirportCode }}"
                                        {{ (request()->from_destination[0] ?? '') == $airport->AirportCode ? 'selected' : '' }}>
                                        {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                        ({{ $airport->City }}, {{ $airport->Country }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Swap Button -->
                        <button type="button" class="swap-btn-standalone" onclick="swapLocations('single')"
                            title="Swap locations">
                            <i class="fas fa-exchange-alt"></i>
                        </button>

                        <!-- To Location -->
                        <div class="input-group-custom location-input">
                            <i class="fas fa-plane-arrival input-icon"></i>
                            <select class="select2 airport-select" name="to_destination[]" id="to_location_single">
                                <option value="" disabled selected>Going to?</option>
                                @foreach ($airportList ?? [] as $airport)
                                    <option value="{{ $airport->AirportCode }}"
                                        {{ (request()->to_destination[0] ?? '') == $airport->AirportCode ? 'selected' : '' }}>
                                        {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                        ({{ $airport->City }}, {{ $airport->Country }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Flight Dates -->
                        <div class="input-group-custom">
                            <i class="fas fa-calendar-alt input-icon"></i>
                            <input type="text" id="flight_date_range"
                                value="{{ old('check_in_from.0', request('check_in_from.0')) && old('check_out_to.0', request('check_out_to.0')) ? old('check_in_from.0', request('check_in_from.0')) . ' - ' . old('check_out_to.0', request('check_out_to.0')) : old('check_in_from.0', request('check_in_from.0')) }}"
                                placeholder="Departing - Returning" autocomplete="off" required readonly>
                            <input type="hidden" name="check_in_from[]" id="depart_date_hidden"
                                value="{{ old('check_in_from.0', request('check_in_from.0')) }}">
                            <input type="hidden" name="check_out_to[]" id="return_date_hidden"
                                value="{{ old('check_out_to.0', request('check_out_to.0')) }}">
                        </div>

                        <!-- Passengers -->
                        <div class="input-group-custom passenger-dropdown">
                            <i class="fas fa-users input-icon"></i>
                            <input type="text" readonly class="passenger-input" id="flight_passenger_display"
                                value="{{ request()->adult_flight ?? '1 Adult' }}" placeholder="1 Adult">
                            <input type="hidden" name="adult_flight" id="flight_passenger_value">

                            <div class="passenger-dropdown-menu" id="flight_passenger_dropdown">
                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Adults</h6>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'adults', -1)">-</button>
                                        <span class="quantity-display"
                                            id="flight_adults_count">{{ request()->quantityadultsflight ?? '1' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'adults', 1)">+</button>
                                    </div>
                                </div>
                                <input type="hidden" name="quantityadultsflight" id="flight_adults_input"
                                    value="{{ request()->quantityadultsflight ?? '1' }}">

                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Children</h6>
                                        <span>2–11 years old</span>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'children', -1)">-</button>
                                        <span class="quantity-display"
                                            id="flight_children_count">{{ request()->quantitychildrenflight ?? '0' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'children', 1)">+</button>
                                    </div>
                                </div>
                                <input type="hidden" name="quantitychildrenflight" id="flight_children_input"
                                    value="{{ request()->quantitychildrenflight ?? '0' }}">

                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Infants on lap</h6>
                                        <span>Under 2 years old</span>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'infants', -1)">-</button>
                                        <span class="quantity-display"
                                            id="flight_infants_count">{{ request()->quantityinfantsflight ?? '0' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'infants', 1)">+</button>
                                    </div>
                                </div>
                                <input type="hidden" name="quantityinfantsflight" id="flight_infants_input"
                                    value="{{ request()->quantityinfantsflight ?? '0' }}">

                                <button type="button" class="dropdown-done-btn"
                                    onclick="closePassengerDropdown('flight')">Done</button>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                            <span>Search</span>
                        </button>
                    </div>
                </div>

                <!-- Multi City Section -->
                <div id="multi-city-section"
                    class="multi-city-section {{ request('trip_type') == 'multi_city' ? 'active' : '' }}">
                    <div id="multi-city-flights">
                        @if (is_array(request()->from_destination) && count(request()->from_destination) > 1)
                            @foreach (request()->from_destination as $index => $from)
                                @if ($index < 6)
                                    <div class="multi-city-flight" data-flight-index="{{ $index }}">
                                        <span class="flight-number">Flight {{ $index + 1 }}</span>

                                        <div class="location-group-wrapper">
                                            <div class="input-group-custom">
                                                <i class="fas fa-plane-departure input-icon"></i>
                                                <select class="select2 airport-select" name="from_destination[]">
                                                    <option value="" disabled selected>Departing from?</option>
                                                    @foreach ($airportList ?? [] as $airport)
                                                        <option value="{{ $airport->AirportCode }}"
                                                            {{ ($from ?? '') == $airport->AirportCode ? 'selected' : '' }}>
                                                            {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="button" class="swap-btn"
                                                onclick="swapLocations('multi', {{ $index }})"
                                                title="Swap locations">
                                                <i class="fas fa-exchange-alt"></i>
                                            </button>

                                            <div class="input-group-custom">
                                                <i class="fas fa-plane-arrival input-icon"></i>
                                                <select class="select2 airport-select" name="to_destination[]">
                                                    <option value="" disabled selected>Going to?</option>
                                                    @foreach ($airportList ?? [] as $airport)
                                                        <option value="{{ $airport->AirportCode }}"
                                                            {{ (request()->to_destination[$index] ?? '') == $airport->AirportCode ? 'selected' : '' }}>
                                                            {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-group-custom">
                                            <i class="fas fa-calendar-alt input-icon"></i>
                                            <input type="text" class="flight-date-input" name="check_in_from[]"
                                                value="{{ request()->check_in_from[$index] ?? '' }}"
                                                placeholder="Departure Date" autocomplete="off" required>
                                        </div>

                                        @if ($index > 0)
                                            <button type="button" class="remove-flight-btn"
                                                onclick="removeMultiCityFlight(this)">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="multi-city-flight" data-flight-index="0">
                                <span class="flight-number">Flight 1</span>

                                <div class="location-group-wrapper">
                                    <div class="input-group-custom">
                                        <i class="fas fa-plane-departure input-icon"></i>
                                        <select class="select2 airport-select" name="from_destination[]">
                                            <option value="" disabled selected>Departing from?</option>
                                            @foreach ($airportList ?? [] as $airport)
                                                <option value="{{ $airport->AirportCode }}">
                                                    {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="button" class="swap-btn" onclick="swapLocations('multi', 0)"
                                        title="Swap locations">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>

                                    <div class="input-group-custom">
                                        <i class="fas fa-plane-arrival input-icon"></i>
                                        <select class="select2 airport-select" name="to_destination[]">
                                            <option value="" disabled selected>Going to?</option>
                                            @foreach ($airportList ?? [] as $airport)
                                                <option value="{{ $airport->AirportCode }}">
                                                    {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="input-group-custom">
                                    <i class="fas fa-calendar-alt input-icon"></i>
                                    <input type="text" class="flight-date-input" name="check_in_from[]"
                                        placeholder="Departure Date" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="multi-city-flight" data-flight-index="1">
                                <span class="flight-number">Flight 2</span>

                                <div class="location-group-wrapper">
                                    <div class="input-group-custom">
                                        <i class="fas fa-plane-departure input-icon"></i>
                                        <select class="select2 airport-select" name="from_destination[]">
                                            <option value="" disabled selected>Departing from?</option>
                                            @foreach ($airportList ?? [] as $airport)
                                                <option value="{{ $airport->AirportCode }}">
                                                    {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="button" class="swap-btn" onclick="swapLocations('multi', 1)"
                                        title="Swap locations">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>

                                    <div class="input-group-custom">
                                        <i class="fas fa-plane-arrival input-icon"></i>
                                        <select class="select2 airport-select" name="to_destination[]">
                                            <option value="" disabled selected>Going to?</option>
                                            @foreach ($airportList ?? [] as $airport)
                                                <option value="{{ $airport->AirportCode }}">
                                                    {{ $airport->AirportCode }} - {{ $airport->AirportName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="input-group-custom">
                                    <i class="fas fa-calendar-alt input-icon"></i>
                                    <input type="text" class="flight-date-input" name="check_in_from[]"
                                        placeholder="Departure Date" autocomplete="off" required>
                                </div>

                                <button type="button" class="remove-flight-btn"
                                    onclick="removeMultiCityFlight(this)">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        @endif
                    </div>

                    <button type="button" class="add-flight-btn" id="add-flight-btn"
                        onclick="addMultiCityFlight()">
                        <i class="fas fa-plus"></i> Add Another Flight (Max 6)
                    </button>

                    <!-- Passengers for Multi City -->
                    <div class="search-form-grid" style="margin-top: 20px;">
                        <div class="input-group-custom passenger-dropdown">
                            <i class="fas fa-users input-icon"></i>
                            <input type="text" readonly class="passenger-input"
                                id="flight_passenger_display_multi"
                                value="{{ request()->adult_flight ?? '1 Adult' }}" placeholder="1 Adult">

                            <div class="passenger-dropdown-menu" id="flight_passenger_dropdown_multi">
                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Adults</h6>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'adults', -1)">-</button>
                                        <span
                                            class="quantity-display">{{ request()->quantityadultsflight ?? '1' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'adults', 1)">+</button>
                                    </div>
                                </div>

                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Children</h6>
                                        <span>2–11 years old</span>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'children', -1)">-</button>
                                        <span
                                            class="quantity-display">{{ request()->quantitychildrenflight ?? '0' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'children', 1)">+</button>
                                    </div>
                                </div>

                                <div class="passenger-row">
                                    <div class="passenger-label">
                                        <h6>Infants on lap</h6>
                                        <span>Under 2 years old</span>
                                    </div>
                                    <div class="quantity-control">
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'infants', -1)">-</button>
                                        <span
                                            class="quantity-display">{{ request()->quantityinfantsflight ?? '0' }}</span>
                                        <button type="button" class="quantity-btn"
                                            onclick="updateQuantity('flight', 'infants', 1)">+</button>
                                    </div>
                                </div>

                                <button type="button" class="dropdown-done-btn"
                                    onclick="closePassengerDropdown('flight_multi')">Done</button>
                            </div>
                        </div>

                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                            <span>Search Flights</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Hotel Tab -->
        <div id="hotel-tab" class="tab-content-wrapper active {{-- request()->hotel == 'hotel' ? '' : 'active' --}}" role="tabpanel"
            aria-labelledby="pills-profile-tab" data-pills-id="pills-profile">
            <form class="hotel-form" method="GET" action="{{ route('booking.user.hotel_listing') }}">
                @csrf
                <input type="hidden" value="hotel" name="hotel">
                <input type="hidden" name="latitude" id="hotel_latitude" value="{{ request()->latitude }}">
                <input type="hidden" name="longitude" id="hotel_longitude" value="{{ request()->longitude }}">
                <input type="hidden" name="adultsCount" id="hotel_adults_input"
                    value="{{ request()->adultsCount ?? '1' }}">
                <input type="hidden" name="childrenCount" id="hotel_children_input"
                    value="{{ request()->childrenCount ?? '0' }}">
                <input type="hidden" name="roomsCount" id="hotel_rooms_input"
                    value="{{ request()->roomsCount ?? '1' }}">

                <div class="search-form-grid">
                    <!-- Destination -->
                    <div class="input-group-custom destination-input">
                        <i class="fas fa-map-marker-alt input-icon"></i>
                        <input type="text" name="destination" id="hotel_destination"
                            value="{{ request()->destination }}" placeholder="Where are you going?" required>
                    </div>

                    <!-- Check-in - Check-out Date Range -->
                    <!-- Check-in - Check-out Date Range -->
                    <div class="input-group-custom">
                        <i class="fas fa-calendar-alt input-icon"></i>

                        <input type="text" id="hotel_date_range" class="form-control"
                            placeholder="Check-in - Check-out" autocomplete="off" readonly
                            value="{{ request()->check_in_d && request()->check_out_d
                                ? request()->check_in_d . ' - ' . request()->check_out_d
                                : '' }}">

                        <input type="hidden" name="check_in_d" id="hotel_check_in_display"
                            value="{{ request()->check_in_d }}">

                        <input type="hidden" name="check_out_d" id="hotel_check_out_display"
                            value="{{ request()->check_out_d }}">

                        <input type="hidden" name="check_in" id="hotel_check_in"
                            value="{{ request()->check_in }}">

                        <input type="hidden" name="check_out" id="hotel_check_out"
                            value="{{ request()->check_out }}">
                    </div>


                    <!-- Guests & Rooms -->
                    <div class="input-group-custom passenger-dropdown">
                        <i class="fas fa-user-friends input-icon"></i>
                        <input type="text" readonly class="passenger-input" id="hotel_guest_display"
                            name="adult" value="{{ request()->adult ?? '1 Adult, 0 Children, 1 Room' }}"
                            placeholder="1 Adult, 0 Children, 1 Room">

                        <div class="passenger-dropdown-menu" id="hotel_guest_dropdown">
                            <div class="passenger-row">
                                <div class="passenger-label">
                                    <h6>Adults</h6>
                                </div>
                                <div class="quantity-control">
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'adults', -1)">-</button>
                                    <span class="quantity-display"
                                        id="hotel_adults_count">{{ request()->adultsCount ?? '1' }}</span>
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'adults', 1)">+</button>
                                </div>
                            </div>

                            <div class="passenger-row">
                                <div class="passenger-label">
                                    <h6>Children</h6>
                                    <span>2–11 years old</span>
                                </div>
                                <div class="quantity-control">
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'children', -1)">-</button>
                                    <span class="quantity-display"
                                        id="hotel_children_count">{{ request()->childrenCount ?? '0' }}</span>
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'children', 1)">+</button>
                                </div>
                            </div>

                            <div id="hotel_children_ages"></div>

                            <div class="passenger-row">
                                <div class="passenger-label">
                                    <h6>Rooms</h6>
                                </div>
                                <div class="quantity-control">
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'rooms', -1)">-</button>
                                    <span class="quantity-display"
                                        id="hotel_rooms_count">{{ request()->roomsCount ?? '1' }}</span>
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('hotel', 'rooms', 1)">+</button>
                                </div>
                            </div>

                            <div class="toggle-switch">
                                <label>Traveling with pets?</label>
                                <label class="switch">
                                    <input type="checkbox" name="pets">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <p class="pets-info">Assistance animals aren't considered pets</p>

                            <button type="button" class="dropdown-done-btn"
                                onclick="closePassengerDropdown('hotel')">Done</button>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                        <span>Search</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Apartment Tab -->
        <div id="apartment-tab" class="tab-content-wrapper {{ request()->apartment == 'apartment' ? 'active' : '' }}"
            role="tabpanel" aria-labelledby="pills-contact-tab" data-pills-id="pills-contact">
            <form class="apartment-form" method="GET" action="#">
                @csrf
                <input type="hidden" value="apartment" name="apartment">
                <input type="hidden" name="latitude_apartment" id="apartment_latitude"
                    value="{{ request()->latitude_apartment }}">
                <input type="hidden" name="longitude_apartment" id="apartment_longitude"
                    value="{{ request()->longitude_apartment }}">
                <input type="hidden" name="adultsCountApartment" id="apartment_adults_input"
                    value="{{ request()->adultsCountApartment ?? '1' }}">
                <input type="hidden" name="childrenCountApartment" id="apartment_children_input"
                    value="{{ request()->childrenCountApartment ?? '0' }}">

                <div class="search-form-grid">
                    <!-- Destination -->
                    <div class="input-group-custom destination-input">
                        <i class="fas fa-building input-icon"></i>
                        <input type="text" name="destination_apartment" id="apartment_destination"
                            value="{{ request()->destination_apartment }}" placeholder="Where are you going?"
                            required>
                    </div>

                    <!-- Check-in - Check-out Date Range -->
                    <div class="input-group-custom">
                        <i class="fas fa-calendar-alt input-icon"></i>
                        <input type="text" id="apartment_date_range"
                            value="{{ request()->check_in_apartment_d && request()->check_out_apartment_d ? request()->check_in_apartment_d . ' - ' . request()->check_out_apartment_d : '' }}"
                            placeholder="Check-in - Check-out" autocomplete="off" required readonly>
                        <input type="hidden" name="check_in_apartment_d" id="apartment_check_in_display"
                            value="{{ request()->check_in_apartment_d }}">
                        <input type="hidden" name="check_out_apartment_d" id="apartment_check_out_display"
                            value="{{ request()->check_out_apartment_d }}">
                        <input type="hidden" name="check_in_apartment" id="apartment_check_in"
                            value="{{ request()->check_in_apartment }}">
                        <input type="hidden" name="check_out_apartment" id="apartment_check_out"
                            value="{{ request()->check_out_apartment }}">
                    </div>

                    <!-- Guests -->
                    <div class="input-group-custom passenger-dropdown">
                        <i class="fas fa-user-friends input-icon"></i>
                        <input type="text" readonly class="passenger-input" id="apartment_guest_display"
                            name="adult_apartment" value="{{ request()->adult_apartment ?? '1 Adult, 0 Children' }}"
                            placeholder="1 Adult, 0 Children">

                        <div class="passenger-dropdown-menu" id="apartment_guest_dropdown">
                            <div class="passenger-row">
                                <div class="passenger-label">
                                    <h6>Adults</h6>
                                </div>
                                <div class="quantity-control">
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('apartment', 'adults', -1)">-</button>
                                    <span class="quantity-display"
                                        id="apartment_adults_count">{{ request()->adultsCountApartment ?? '1' }}</span>
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('apartment', 'adults', 1)">+</button>
                                </div>
                            </div>

                            <div class="passenger-row">
                                <div class="passenger-label">
                                    <h6>Children</h6>
                                    <span>2–11 years old</span>
                                </div>
                                <div class="quantity-control">
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('apartment', 'children', -1)">-</button>
                                    <span class="quantity-display"
                                        id="apartment_children_count">{{ request()->childrenCountApartment ?? '0' }}</span>
                                    <button type="button" class="quantity-btn"
                                        onclick="updateQuantity('apartment', 'children', 1)">+</button>
                                </div>
                            </div>

                            <div id="apartment_children_ages"></div>

                            <button type="button" class="dropdown-done-btn"
                                onclick="closePassengerDropdown('apartment')">Done</button>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                        <span>Search</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Required JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        initializeSelect2();

        // Initialize Date Pickers
        initializeDatePickers();

        // Initialize Google Places Autocomplete
        initializeGooglePlaces();

        // Initialize passenger dropdowns
        initializePassengerDropdowns();

        // Set initial flight type
        const tripType = $('input[name="trip_type"]:checked').val();
        updateFlightType(tripType);
    });

    // Initialize Select2 for all airport selects
    function initializeSelect2() {
        $('.select2.airport-select').each(function() {
            if (!$(this).hasClass('select2-hidden-accessible')) {
                $(this).select2({
                    placeholder: $(this).find('option:first').text(),
                    allowClear: false,
                    width: '100%',
                    dropdownAutoWidth: true
                });
            }
        });
    }

    // Tab Switching
    function switchTab(tabName) {
        // Update tab icons (NEW)
        $('.tab-icon').removeClass('active');
        $(`.tab-icon[data-tab="${tabName}"]`).addClass('active');

        // Update tab content
        $('.tab-content-wrapper').removeClass('active');
        $(`#${tabName}-tab`).addClass('active');

        // Reinitialize Select2 for the active tab
        setTimeout(() => {
            initializeSelect2();
        }, 100);
    }

    // Show Menu function for additional handling
    function showMenu(menuType) {
        // You can add any additional functionality here
        // For example, tracking analytics, updating URL, etc.
        console.log('Showing menu:', menuType);

        // Update URL hash without page reload (optional)
        if (history.pushState) {
            const newUrl = window.location.pathname + '?' + menuType + '=' + menuType;
            history.pushState(null, '', newUrl);
        }
    }

    // Update Flight Type
    function updateFlightType(type) {
        const singleTripSection = $('#single-trip-section');
        const multiCitySection = $('#multi-city-section');

        if (type === 'multi_city') {
            singleTripSection.hide();
            multiCitySection.addClass('active');
        } else {
            singleTripSection.show();
            multiCitySection.removeClass('active');
        }

        // Destroy existing date picker before reinitializing
        if ($('#flight_date_range').data('daterangepicker')) {
            $('#flight_date_range').data('daterangepicker').remove();
        }

        // Reinitialize date pickers with new settings
        initializeDatePickers();
    }

    // Initialize Date Pickers
    function initializeDatePickers() {
        const tripType = $('input[name="trip_type"]:checked').val();

        // Flight date pickers
        if (tripType === 'return') {
            // Round trip - date range picker with highlight
            $('#flight_date_range').daterangepicker({
                opens: 'center',
                autoApply: true,
                minDate: moment(),
                locale: {
                    format: 'MM/DD/YYYY',
                    separator: ' - '
                }
            }, function(start, end) {
                $('#flight_date_range').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
                $('#depart_date_hidden').val(start.format('MM/DD/YYYY'));
                $('#return_date_hidden').val(end.format('MM/DD/YYYY'));
            });

            // Update placeholder
            $('#flight_date_range').attr('placeholder', 'Departing - Returning');

        } else if (tripType === 'one_way') {
            // One way - single date picker
            $('#flight_date_range').daterangepicker({
                singleDatePicker: true,
                autoApply: true,
                minDate: moment(),
                locale: {
                    format: 'MM/DD/YYYY'
                }
            }, function(start) {
                $('#flight_date_range').val(start.format('MM/DD/YYYY'));
                $('#depart_date_hidden').val(start.format('MM/DD/YYYY'));
                $('#return_date_hidden').val(''); // Clear return date for one-way
            });

            // Update placeholder
            $('#flight_date_range').attr('placeholder', 'Departing');

        } else {
            // Multi city - individual date pickers
            $('.multi-city-flight input[type="text"].flight-date-input').each(function() {
                if (!$(this).data('daterangepicker')) {
                    $(this).daterangepicker({
                        singleDatePicker: true,
                        autoApply: true,
                        minDate: moment(),
                        locale: {
                            format: 'MM/DD/YYYY'
                        }
                    });
                }
            });
        }

        // Hotel date picker - date range with highlight
        if (!$('#hotel_date_range').data('daterangepicker')) {
            $('#hotel_date_range').daterangepicker({
                opens: 'center',
                autoApply: true,
                autoUpdateInput: false, // 🔑 KEY FIX
                minDate: moment(),
                locale: {
                    format: 'MM/DD/YYYY',
                    separator: ' - '
                }
            });

            $('#hotel_date_range').on('apply.daterangepicker', function(ev, picker) {
                const start = picker.startDate;
                const end = picker.endDate;

                $(this).val(
                    start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY')
                );

                $('#hotel_check_in_display').val(start.format('MM/DD/YYYY'));
                $('#hotel_check_out_display').val(end.format('MM/DD/YYYY'));

                $('#hotel_check_in').val(start.format('YYYY-MM-DD'));
                $('#hotel_check_out').val(end.format('YYYY-MM-DD'));
            });
        }


        // Apartment date picker - date range with highlight
        if (!$('#apartment_date_range').data('daterangepicker')) {
            $('#apartment_date_range').daterangepicker({
                opens: 'center',
                autoApply: true,
                minDate: moment(),
                locale: {
                    format: 'MM/DD/YYYY',
                    separator: ' - '
                }
            }, function(start, end) {
                $('#apartment_date_range').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
                $('#apartment_check_in_display').val(start.format('MM/DD/YYYY'));
                $('#apartment_check_in').val(start.format('YYYY-MM-DD'));
                $('#apartment_check_out_display').val(end.format('MM/DD/YYYY'));
                $('#apartment_check_out').val(end.format('YYYY-MM-DD'));
            });
        }
    }

    // Initialize Google Places Autocomplete
    function initializeGooglePlaces() {
        // Hotel destination
        const hotelInput = document.getElementById('hotel_destination');
        if (hotelInput) {
            const hotelAutocomplete = new google.maps.places.Autocomplete(hotelInput);
            hotelAutocomplete.addListener('place_changed', function() {
                const place = hotelAutocomplete.getPlace();
                if (place.geometry) {
                    $('#hotel_latitude').val(place.geometry.location.lat());
                    $('#hotel_longitude').val(place.geometry.location.lng());
                }
            });
        }

        // Apartment destination
        const apartmentInput = document.getElementById('apartment_destination');
        if (apartmentInput) {
            const apartmentAutocomplete = new google.maps.places.Autocomplete(apartmentInput);
            apartmentAutocomplete.addListener('place_changed', function() {
                const place = apartmentAutocomplete.getPlace();
                if (place.geometry) {
                    $('#apartment_latitude').val(place.geometry.location.lat());
                    $('#apartment_longitude').val(place.geometry.location.lng());
                }
            });
        }
    }

    // Initialize Passenger Dropdowns
    function initializePassengerDropdowns() {
        // Toggle dropdowns
        $('.passenger-input').click(function() {
            const dropdown = $(this).siblings('.passenger-dropdown-menu');
            $('.passenger-dropdown-menu').not(dropdown).removeClass('active');
            dropdown.toggleClass('active');
        });

        // Close dropdowns when clicking outside
        $(document).click(function(e) {
            if (!$(e.target).closest('.passenger-dropdown').length) {
                $('.passenger-dropdown-menu').removeClass('active');
            }
        });
    }

    // Update Quantity
    function updateQuantity(type, category, change) {
        const countElement = $(`#${type}_${category}_count`);
        const inputElement = $(`#${type}_${category}_input`);
        let currentValue = parseInt(countElement.text()) || 0;
        let newValue = currentValue + change;

        // Set minimum values
        if ((category === 'adults' || category === 'rooms') && newValue < 1) {
            newValue = 1;
        } else if (newValue < 0) {
            newValue = 0;
        }

        // Set maximum values
        if (category === 'adults' && newValue > 9) newValue = 9;
        if (category === 'children' && newValue > 6) newValue = 6;
        if (category === 'infants' && newValue > 4) newValue = 4;
        if (category === 'rooms' && newValue > 8) newValue = 8;

        countElement.text(newValue);
        inputElement.val(newValue);

        // Handle children age dropdowns
        if (category === 'children') {
            updateChildrenAgeDropdowns(type, newValue);
        }

        // Update display
        updatePassengerDisplay(type);
    }

    // Update Children Age Dropdowns
    function updateChildrenAgeDropdowns(type, count) {
        const container = $(`#${type}_children_ages`);
        container.empty();

        if (count > 0) {
            container.html('<div class="child-age-section"></div>');
            const section = container.find('.child-age-section');

            for (let i = 0; i < count; i++) {
                section.append(`
                <div class="child-age-row">
                    <label>Child ${i + 1} age</label>
                    <select name="child_age[]" required>
                        <option value="">Age</option>
                        ${Array.from({length: 12}, (_, i) => i).map(age =>
                            ` < option value = "${age}" > $ {
                            age
                        } < /option>`).join('')
                    } <
                    /select> < /
                div >
                    `);
        }
    }
}

// Update Passenger Display
function updatePassengerDisplay(type) {
    let adults, children, rooms, display;

    if (type === 'flight' || type === 'flight_multi') {
        adults = parseInt($('#flight_adults_count').text());
        children = parseInt($('#flight_children_count').text());
        const infants = parseInt($('#flight_infants_count').text());

        display = `
                $ {
                    adults
                }
                Adult$ {
                    adults !== 1 ? 's' : ''
                }
                `;
        if (children > 0) display += `, $ {
                    children
                }
                Child$ {
                    children !== 1 ? 'ren' : ''
                }
                `;
        if (infants > 0) display += `, $ {
                    infants
                }
                Infant$ {
                    infants !== 1 ? 's' : ''
                }
                `;

        $('#flight_passenger_display').val(display);
        $('#flight_passenger_display_multi').val(display);
        $('#flight_passenger_value').val(display);

    } else if (type === 'hotel') {
        adults = parseInt($('#hotel_adults_count').text());
        children = parseInt($('#hotel_children_count').text());
        rooms = parseInt($('#hotel_rooms_count').text());

        display = `
                $ {
                    adults
                }
                Adult$ {
                    adults !== 1 ? 's' : ''
                }
                `;
        if (children > 0) display += `, $ {
                    children
                }
                Child$ {
                    children !== 1 ? 'ren' : ''
                }
                `;
        display += `, $ {
                    rooms
                }
                Room$ {
                    rooms !== 1 ? 's' : ''
                }
                `;

        $('#hotel_guest_display').val(display);

    } else if (type === 'apartment') {
        adults = parseInt($('#apartment_adults_count').text());
        children = parseInt($('#apartment_children_count').text());

        display = `
                $ {
                    adults
                }
                Adult$ {
                    adults !== 1 ? 's' : ''
                }
                `;
        if (children > 0) display += `, $ {
                    children
                }
                Child$ {
                    children !== 1 ? 'ren' : ''
                }
                `;

        $('#apartment_guest_display').val(display);
    }
}

// Close Passenger Dropdown
function closePassengerDropdown(type) {
    $(`
                #$ {
                    type
                }
                _passenger_dropdown, #$ {
                    type
                }
                _guest_dropdown`).removeClass('active');
}

// Swap Locations - Improved with better Select2 handling
function swapLocations(mode, index = null) {
    if (mode === 'single') {
        // Get the select elements
        const fromSelect = $('#from_location_single');
        const toSelect = $('#to_location_single');

        // Get current selected values
        const fromValue = fromSelect.val();
        const toValue = toSelect.val();

        console.log('Swapping - From:', fromValue, 'To:', toValue);

        // Destroy Select2 instances
        if (fromSelect.hasClass('select2-hidden-accessible')) {
            fromSelect.select2('destroy');
        }
        if (toSelect.hasClass('select2-hidden-accessible')) {
            toSelect.select2('destroy');
        }

        // Swap the values
        fromSelect.val(toValue);
        toSelect.val(fromValue);

        // Reinitialize Select2
        fromSelect.select2({
            placeholder: 'Departing from?',
            allowClear: false,
            width: '100%'
        });

        toSelect.select2({
            placeholder: 'Going to?',
            allowClear: false,
            width: '100%'
        });

        console.log('After swap - From:', fromSelect.val(), 'To:', toSelect.val());

    } else if (mode === 'multi' && index !== null) {
        // Get the flight row
        const flightRow = $(`.multi - city - flight[data - flight - index = "${index}"] `);

        // Find the select elements within this specific row
        const fromSelect = flightRow.find('select[name="from_destination[]"]').first();
        const toSelect = flightRow.find('select[name="to_destination[]"]').first();

        // Get current selected values
        const fromValue = fromSelect.val();
        const toValue = toSelect.val();

        console.log('Multi swap - From:', fromValue, 'To:', toValue);

        // Destroy Select2 instances
        if (fromSelect.hasClass('select2-hidden-accessible')) {
            fromSelect.select2('destroy');
        }
        if (toSelect.hasClass('select2-hidden-accessible')) {
            toSelect.select2('destroy');
        }

        // Swap the values
        fromSelect.val(toValue);
        toSelect.val(fromValue);

        // Reinitialize Select2
        fromSelect.select2({
            placeholder: 'Departing from?',
            allowClear: false,
            width: '100%'
        });

        toSelect.select2({
            placeholder: 'Going to?',
            allowClear: false,
            width: '100%'
        });
    }
}

// Multi City Functions
function addMultiCityFlight() {
    const container = $('#multi-city-flights');
    const currentCount = container.find('.multi-city-flight').length;

    if (currentCount >= 6) {
        alert('Maximum 6 flights allowed');
        return;
    }

    const newIndex = currentCount;
    const newFlight = ` <
                    div class = "multi-city-flight"
                data - flight - index = "${newIndex}" >
                    <
                    span class = "flight-number" > Flight $ {
                        newIndex + 1
                    } < /span>

                    <
                    div class = "location-group-wrapper" >
                    <
                    div class = "input-group-custom" >
                    <
                    i class = "fas fa-plane-departure input-icon" > < /i> <
                select class = "select2 airport-select"
                name = "from_destination[]" >
                    <
                    option value = ""
                disabled selected > Departing from ? < /option>
                @foreach ($airportList ?? [] as $airport)
                    <
                    option value = "{{ $airport->AirportCode }}" >
                        {{ $airport->AirportCode }} - {{ $airport->AirportName }} <
                        /option>
                @endforeach <
                /select> < /
                div >

                    <
                    button type = "button"
                class = "swap-btn"
                onclick = "swapLocations('multi', ${newIndex})"
                title = "Swap locations" >
                    <
                    i class = "fas fa-exchange-alt" > < /i> < /
                button >

                    <
                    div class = "input-group-custom" >
                    <
                    i class = "fas fa-plane-arrival input-icon" > < /i> <
                select class = "select2 airport-select"
                name = "to_destination[]" >
                    <
                    option value = ""
                disabled selected > Going to ? < /option>
                @foreach ($airportList ?? [] as $airport)
                    <
                    option value = "{{ $airport->AirportCode }}" >
                        {{ $airport->AirportCode }} - {{ $airport->AirportName }} <
                        /option>
                @endforeach <
                /select> < /
                div > <
                    /div>

                    <
                    div class = "input-group-custom" >
                    <
                    i class = "fas fa-calendar-alt input-icon" > < /i> <
                input type = "text"
                class = "flight-date-input"
                name = "check_in_from[]"
                placeholder = "Departure Date"
                autocomplete = "off"
                required >
                    <
                    /div>

                    <
                    button type = "button"
                class = "remove-flight-btn"
                onclick = "removeMultiCityFlight(this)" >
                    <
                    i class = "fas fa-times" > < /i> < /
                button > <
                    /div>
                `;

    container.append(newFlight);

    // Initialize Select2 for new flight
    setTimeout(() => {
        container.find('.multi-city-flight:last .select2.airport-select').each(function() {
            if (!$(this).hasClass('select2-hidden-accessible')) {
                $(this).select2({
                    placeholder: $(this).find('option:first').text(),
                    allowClear: false,
                    width: '100%'
                });
            }
        });
    }, 100);

    container.find('.multi-city-flight:last input[type="text"]').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        minDate: moment(),
        locale: {
            format: 'MM/DD/YYYY'
        }
    });

    // Update button visibility
    if (currentCount + 1 >= 6) {
        $('#add-flight-btn').hide();
    }

    // Update flight numbers
    updateFlightNumbers();
}

function removeMultiCityFlight(btn) {
    const container = $('#multi-city-flights');
    const flightCount = container.find('.multi-city-flight').length;

    if (flightCount <= 2) {
        alert('Minimum 2 flights required for multi-city');
        return;
    }

    $(btn).closest('.multi-city-flight').remove();
    updateFlightNumbers();

    // Show add button if under limit
    if (flightCount - 1 < 6) {
        $('#add-flight-btn').show();
    }
}

function updateFlightNumbers() {
    $('#multi-city-flights .multi-city-flight').each(function(index) {
        $(this).attr('data-flight-index', index);
        $(this).find('.flight-number').text(`
                Flight $ {
                    index + 1
                }
                `);

        // Update swap button onclick
        const swapBtn = $(this).find('.swap-btn');
        swapBtn.attr('onclick', `
                swapLocations('multi', $ {
                    index
                })`);
    });
}

// Form Validation
$('form').submit(function(e) {
    const form = $(this);
    const submitBtn = form.find('.search-btn');

    // Add loading state
    submitBtn.addClass('btn-loading').prop('disabled', true);

    // Validate required fields
    let isValid = true;
    form.find('[required]').each(function() {
        if (!$(this).val()) {
            isValid = false;
            $(this).css('border-color', '#f44336');
        } else {
            $(this).css('border-color', '#e0e0e0');
        }
    });

    if (!isValid) {
        e.preventDefault();
        submitBtn.removeClass('btn-loading').prop('disabled', false);
        alert('Please fill in all required fields');
    }
});
</script>

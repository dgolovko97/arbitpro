<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="../static/">
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Play:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet" >
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed font-size-lg">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '200px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo py-8" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="../../demo6/dist/index.php" class="d-flex align-items-center">
                    <img alt="Logo" src="img/logo.png" class="h-45px logo" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                <!--begin::Aside Menu-->
                <div class="hover-scroll my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Account data in mobile-->
                    <div class="aside-user d-flex d-sm-none flex-column align-items-center justify-content-center pb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45px symbol-lg-50px symbol-circle">
                            <img src="assets/media/avatars/blank.png" alt="">
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Wrapper-->
                        <div class="aside-user-info flex-row-fluid flex-wrap mt-2">
                            <!--begin::Section-->
                            <div class="d-flex">
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <!--begin::Description-->
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center">dmitrigolovko13@gmail.com</span>
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center">Баланс:</span>
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center text-success">3200$</span>
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center ">В обработке:</span>
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center text-success">450$</span>
                                    <span class="text-white fs-6 fw-bold w-50 text-truncate text-center">Менеджер:</span>
                                    <a class="fs-6 fw-bold w-50 text-truncate text-center" href="tg://resolve?domain=maestro_arb">@maestro_arb</a>
                                    <!--end::Description-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <a class="mt-3" href="/">
										<span class="svg-icon svg-icon-2hx svg-icon-muted">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black"></rect>
											<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black"></path>
											<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"></path>
										</svg>
									</span>
                        </a>
                        <!--end::Wrapper-->
                    </div>
                    <div class="separator opacity-15 d-block d-sm-none"></div>
                    <!--end::Account data in mobile-->
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title ms-sm-0-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bolder" id="#kt_aside_menu" data-kt-menu="true">
                        <a href="/app/index.php" class="menu-item here show py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column  " title="Статистика" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0 h-sm">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"/>
                                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"/>
                                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"/>
                                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"/>
                                                </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Статистика</span>
									</span>
                        </a>
                        <a href="/app/leads.php" class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Конверсии" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs043.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="black"/>
                                            <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="black"/>
                                            </svg></span>
                                            <!--end::Svg Icon-->
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Конверсии</span>
									</span>
                        </a>
                        <a href="/app/offers.php"  class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Офферы" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black"/>
                                                <rect x="7" y="17" width="6" height="2" rx="1" fill="black"/>
                                                <rect x="7" y="12" width="10" height="2" rx="1" fill="black"/>
                                                <rect x="7" y="7" width="6" height="2" rx="1" fill="black"/>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                            </svg></span>
										</span>
										<span class="menu-title ms-5 ms-sm-0">Офферы</span>
									</span>
                        </a>
                        <a href="/app/campaigns.php"  class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Компании" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod007.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z" fill="black"/>
                                            <path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z" fill="black"/>
                                            </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Компании</span>
									</span>
                        </a>
                        <a href="/app/payments.php" class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Выплаты" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/finance/fin003.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="black"/>
                                            <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="black"/>
                                            </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Выплаты</span>
									</span>
                        </a>
                        <a href="/app/news.php" class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Новости" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod002.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M18 22C19.7 22 21 20.7 21 19C21 18.5 20.9 18.1 20.7 17.7L15.3 6.30005C15.1 5.90005 15 5.5 15 5C15 3.3 16.3 2 18 2H6C4.3 2 3 3.3 3 5C3 5.5 3.1 5.90005 3.3 6.30005L8.7 17.7C8.9 18.1 9 18.5 9 19C9 20.7 7.7 22 6 22H18Z" fill="black"/>
                                                <path d="M18 2C19.7 2 21 3.3 21 5H9C9 3.3 7.7 2 6 2H18Z" fill="black"/>
                                                <path d="M9 19C9 20.7 7.7 22 6 22C4.3 22 3 20.7 3 19H9Z" fill="black"/>
                                                </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Новости</span>
									</span>
                        </a>
                        <a href="/app/ticket.php"  class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Тикеты" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com007.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="black"/>
                                            <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="black"/>
                                            </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Тикеты</span>
									</span>
                        </a>
                        <a href="/app/settings.php" class="menu-item py-0 py-sm-2">
									<span class="menu-link justify-content-start justify-content-sm-center flex-row flex-sm-column " title="Настройки" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-sm-0">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod009.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M22.0318 8.59998C22.0318 10.4 21.4318 12.2 20.0318 13.5C18.4318 15.1 16.3318 15.7 14.2318 15.4C13.3318 15.3 12.3318 15.6 11.7318 16.3L6.93177 21.1C5.73177 22.3 3.83179 22.2 2.73179 21C1.63179 19.8 1.83177 18 2.93177 16.9L7.53178 12.3C8.23178 11.6 8.53177 10.7 8.43177 9.80005C8.13177 7.80005 8.73176 5.6 10.3318 4C11.7318 2.6 13.5318 2 15.2318 2C16.1318 2 16.6318 3.20005 15.9318 3.80005L13.0318 6.70007C12.5318 7.20007 12.4318 7.9 12.7318 8.5C13.3318 9.7 14.2318 10.6001 15.4318 11.2001C16.0318 11.5001 16.7318 11.3 17.2318 10.9L20.1318 8C20.8318 7.2 22.0318 7.59998 22.0318 8.59998Z" fill="black"/>
                                                <path d="M4.23179 19.7C3.83179 19.3 3.83179 18.7 4.23179 18.3L9.73179 12.8C10.1318 12.4 10.7318 12.4 11.1318 12.8C11.5318 13.2 11.5318 13.8 11.1318 14.2L5.63179 19.7C5.23179 20.1 4.53179 20.1 4.23179 19.7Z" fill="black"/>
                                                </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title ms-5 ms-sm-0">Настройки</span>
									</span>
                        </a>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid overflow-hidden" id="arbitpro_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between px-2">
                    <div class="d-flex d-sm-none align-items-center">
                        <a href="/">
                            <img alt="Logo" src="img/logo-full.png" class="h-25px h-lg-25px">
                        </a>
                    </div>
                    <div class="d-none d-sm-flex align-items-center justify-content-center flex-grow-1">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45px symbol-lg-50px symbol-circle">
                            <img src="assets/media/avatars/300-1.jpg" alt="">
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Wrapper-->
                        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                            <!--begin::Section-->
                            <div class="d-flex">
                                <!--begin::Info-->
                                <div class="flex-grow-1 me-2">
                                    <!--begin::Username-->
                                    <a class="fs-6 fw-bold" href="tg://resolve?domain=maestro_arb">@maestro_arb</a>
                                    <!--end::Username-->
                                    <!--begin::Description-->
                                    <span class="text-gray-600 fw-bold d-block fs-8 ">Ваш менеджер</span>
                                    <!--end::Description-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center text-success fs-9">
                                        <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--begin::Wrapper-->
                    <div class="d-none d-sm-flex justify-content-end flex-lg-grow-1 me-2">
                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0 justify-content-between">
                            <div class="d-flex align-items-center ms-lg-3">
                                <!--begin::Col-->
                                <div class="cursor-pointer">
                                    <div class="d-flex align-items-center me-5 me-md-10">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3 d-none d-lg-flex">
                                            <div class="symbol-label bg-light-success">
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Dollar.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="text-lg-start text-center">
                                            <div class="fs-4 text-dark fw-bolder">$2,034</div>
                                            <div class="fs-7 text-muted fw-bold">Ваш баланс</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="cursor-pointer">
                                    <div class="d-flex align-items-center me-5 me-md-10">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3 d-none d-lg-flex">
                                            <div class="symbol-label bg-light-info">
														<span class="svg-icon svg-icon-info svg-icon-1">
															<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Lock.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<mask fill="white">
																	<use xlink:href="#path-1"/>
																</mask>
																<g/>
																<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
															</g>
														</svg><!--end::Svg Icon-->
														</span>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="text-lg-start text-center">
                                            <div class="fs-4 text-dark fw-bolder">$706</div>
                                            <div class="fs-7 text-muted fw-bold">В обработке</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::User menu-->
                            <div class="d-flex align-items-center cursor-pointer ms-auto" id="kt_header_user_menu_toggle" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px symbol-lg-50px symbol-circle">
                                    <img alt="Logo" src="assets/media/avatars/blank.png" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <span class="fw-bold text-muted fs-7 ms-3 mw-100px text-nowrap text-truncate">Константин</span>
                                </div>
                                <!--end::Username-->
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr082.svg-->
                                <div class="btn btn-icon btn-active-color-primary ms-1 w-20px">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>

                                <!--end::Svg Icon-->
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-lg-50px symbol-circle me-5">
                                                <img alt="Logo" src="assets/media/avatars/blank.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5 mw-100px text-truncate">Max Smith</div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7 mw-100px text-truncate">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="##" class="menu-link px-5">
													<span class="menu-icon">
														<span class="svg-icon">
															<span class="svg-icon svg-icon-info">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black"/>
																</svg>
															</span>
														</span>
													</span>
                                            <span class="menu-title ms-5 ms-sm-0">Личный кабинет</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="##" class="menu-link px-5">
													<span class="menu-icon">
														<span class="svg-icon">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black"/>
																<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black"/>
															</svg>
														</span>
													</span>
                                            <span class="menu-title ms-5 ms-sm-0 text-nowrap">Техническая поддержка</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="##" class="menu-link px-5">
													<span class="menu-icon">
														<span class="svg-icon icon-size-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black"/>
																<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black"/>
																<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"/>
															</svg>
														</span>
													</span>
                                            <span class="menu-title ms-5 ms-sm-0">Выход</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none me-2 ms-auto" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2x svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black"></path>
                                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid" id="kt-content">
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_content_container">
        <div class=" container-fluid">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="flex-xl-row-fluid me-xl-15 order-2 order-lg-1 mb-5 mb-lg-0">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_subscriptions_create_new">
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Создание кампании</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="row mb-5">
                                    <div class="col-xxl-4 col-md-6 col-xs-12 mb-5 mb-xxl-0">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 text-nowrap">Название оффера</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="Введите название оффера" name="description">
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xxl-4 col-md-6 col-xs-12 mb-5 mb-xxl-0">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 text-nowrap">Название кампании</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="Введите название кампании" name="description">
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xxl-4 col-md-6 col-xs-12 mb-5 mb-xxl-0">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 text-nowrap">Тип кампании</label>
                                        <!--end::Label-->
                                        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="" name="target_assign">
                                            <option value="1" selected>Партнёрская ссылка</option>
                                            <option value="2">Api</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Ссылка на прокладку</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="row align-items-center">
                                    <div class="col-xxl-4 col-sm-6 mb-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text"><i class="bi bi bi-link-45deg fs-4"></i></span>
                                            <div class="overflow-hidden flex-grow-1">
                                                <select class="form-select rounded-start-0 form-control" data-hide-search="true" data-control="select2" data-placeholder="Выберете прокладку">
                                                    <option></option>
                                                    <option value="1">example.com</option>
                                                    <option value="2">example.com</option>
                                                </select>
                                            </div>
                                            <span class="cursor-pointer input-group-text bg-success ms-n1" data-bs-toggle="modal" data-bs-target="#modal_domain_parking"><i class="bi bi-plus-circle-fill fs-2  text-white"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6 d-flex mb-5 flex-sm-row flex-column align-items-sm-center align-items-start">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold text-nowrap me-3 mb-2 mb-sm-0">Путь:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="Укажите путь" name="description">
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered fs-6 fw-bold gy-4 border border-1 table-rounded gy-7 gs-7 " id="kt_subscription_products_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="text-start fw-bolder fs-7 text-uppercase gs-0 table-dark text-white">
                                            <th class="min-w-300px">Название</th>
                                            <th class="min-w-100px">CR</th>
                                            <th class="min-w-150px">EPC</th>
                                            <th class="min-w-70px text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="">
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input border-3 border-success" type="checkbox" value="" id="flexCheckDefault_1"/>
                                                    <label class="form-check-label" for="flexCheckDefault_1">
                                                        medportal | uz
                                                    </label>
                                                </div>
                                            </td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Открыть">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                                            <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                                        </svg></span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="black"/>
                                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_2"/>
                                                    <label class="form-check-label" for="flexCheckDefault_2">
                                                        medportal | uz
                                                    </label>
                                                </div>
                                            </td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Открыть">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                                            <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                                        </svg></span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="black"/>
                                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>

                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Ссылка на лендинг</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="row align-items-center">
                                    <div class="col-xxl-4 col-sm-6 mb-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text"><i class="bi bi bi-link-45deg fs-4"></i></span>
                                            <div class="overflow-hidden flex-grow-1">
                                                <select class="form-select rounded-start-0 form-control" data-hide-search="true" data-control="select2" data-placeholder="Выберете прокладку">
                                                    <option></option>
                                                    <option value="1">example.com</option>
                                                    <option value="2">example.com</option>
                                                </select>
                                            </div>
                                            <span class="cursor-pointer input-group-text bg-success ms-n1" data-bs-toggle="modal" data-bs-target="#modal_domain_parking"><i class="bi bi-plus-circle-fill fs-2  text-white"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6 d-flex mb-5 flex-sm-row flex-column align-items-sm-center align-items-start">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold text-nowrap me-3 mb-2 mb-sm-0">Путь:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="Укажите путь" name="description">
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered fs-6 fw-bold gy-4 border border-1 table-rounded gy-7 gs-7 table-striped" id="">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="text-start fw-bolder fs-7 text-uppercase gs-0 table-dark opacity-70 text-white">
                                            <th class="min-w-300px">Название</th>
                                            <th class="min-w-100px">CR</th>
                                            <th class="min-w-150px">EPC</th>
                                            <th class="min-w-70px text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="">
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_3"/>
                                                    <label class="form-check-label" for="flexCheckDefault_3">
                                                        land | uz
                                                    </label>
                                                </div>
                                            </td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Открыть">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                                            <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                                        </svg></span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="black"/>
                                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_4"/>
                                                    <label class="form-check-label" for="flexCheckDefault_4">
                                                        land | uz
                                                    </label>
                                                </div>
                                            </td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Открыть">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/>
                                                            <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/>
                                                        </svg></span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"/>
                                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="black"/>
                                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>

                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Аналитика</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="rounded border border-dashed border-gray-400 rounded-3 p-6 mb-5">
                                    <div class="row">
                                        <div class="col-xxl-2 d-flex align-items-center me-5 mb-5 mb-xxl-0">
                                             <span class="svg-icon svg-icon-2x me-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M129.5 512V345.9L18.5 48h55.8l81.8 229.7L250.2 0h51.3L180.8 347.8V512h-51.3z"/></svg>
                                             </span>
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="text-danger">Я</span>ндекс метрика</span>
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Прокладка" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Лэндинг" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Страница апрува" name="description">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border border-dashed border-gray-400 rounded-3 p-6 mb-5">
                                    <div class="row">
                                        <div class="col-xxl-2 d-flex align-items-center me-5 mb-5 mb-xxl-0">
                                             <span class="svg-icon svg-icon-2x me-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                                             </span>
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">
                                                    <span class="text-primary">G</span><span class="text-danger">o</span><span class="text-warning">o</span><span class="text-primary">g</span><span class="text-success">l</span><span class="text-danger">e</span>
                                                    Analytics
                                                </span>
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Прокладка" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Лэндинг" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Страница апрува" name="description">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border border-dashed border-gray-400 rounded-3 p-6 mb-5">
                                    <div class="row">
                                        <div class="col-xxl-2 d-flex align-items-center me-5 mb-5 mb-xxl-0">
                                             <span class="svg-icon svg-icon-2x me-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"/></svg>
                                             </span>
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class=""><span class="text-primary">Mail</span><span class="text-warning">Ru</span></span>
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Прокладка" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Лэндинг" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Страница апрува" name="description">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border border-dashed border-gray-400 rounded-3 p-6 mb-5">
                                    <div class="row">
                                        <div class="col-xxl-2 d-flex align-items-center me-5 mb-5 mb-xxl-0">
                                             <span class="svg-icon svg-icon-2x me-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                                             </span>
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class=""><span class="text-primary">Facebook</span> pixel</span>
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Прокладка" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Лэндинг" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Страница апрува" name="description">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border border-dashed border-gray-400 rounded-3 p-6">
                                    <div class="row">
                                        <div class="col-xxl-2 d-flex align-items-center me-5 mb-5 mb-xxl-0">
                                             <span class="svg-icon svg-icon-2x me-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M31.4907 63.4907C0 94.9813 0 145.671 0 247.04V264.96C0 366.329 0 417.019 31.4907 448.509C62.9813 480 113.671 480 215.04 480H232.96C334.329 480 385.019 480 416.509 448.509C448 417.019 448 366.329 448 264.96V247.04C448 145.671 448 94.9813 416.509 63.4907C385.019 32 334.329 32 232.96 32H215.04C113.671 32 62.9813 32 31.4907 63.4907ZM75.6 168.267H126.747C128.427 253.76 166.133 289.973 196 297.44V168.267H244.16V242C273.653 238.827 304.64 205.227 315.093 168.267H363.253C359.313 187.435 351.46 205.583 340.186 221.579C328.913 237.574 314.461 251.071 297.733 261.227C316.41 270.499 332.907 283.63 346.132 299.751C359.357 315.873 369.01 334.618 374.453 354.747H321.44C316.555 337.262 306.614 321.61 292.865 309.754C279.117 297.899 262.173 290.368 244.16 288.107V354.747H238.373C136.267 354.747 78.0267 284.747 75.6 168.267Z"/></svg>
                                             </span>
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class=""><span class="text-primary">VK</span> pixel</span>
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Прокладка" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3 mb-5 mb-xxl-0">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Лэндинг" name="description">
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xxl-3">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" placeholder="Страница апрува" name="description">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Скрипты</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div id="repeater">
                                    <!--begin::Form group-->
                                    <div class="form-group ms-auto mb-3">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <i class="la la-plus"></i>Добавить еще
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                    <div data-repeater-list="script_repeater">
                                        <div data-repeater-item >
                                            <textarea class="form-control border-dashed mb-5" name="" id="" cols="30" rows="10" placeholder="Вставьте сюда любой код без <script> для отображения на прокладке"></textarea>
                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mb-3">
                                                <i class="la la-trash-o"></i>Удалить
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush pt-3 mb-5 mb-lg-10 shadow-sm">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Postback</h2>
                                </div>
                                <!--end::Card title-->
                                <div class="card-toolbar">
                                    <div class="form-check form-check-custom form-check-solid form-check-success">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_5" checked>
                                        <label class="form-check-label text-uppercase fw-bolder" for="flexCheckDefault_5">
                                            Использовать глобальный Postback
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-nowrap me-3 mb-2 mb-sm-0">Url:</label>
                                    <!--end::Label-->
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="bi bi bi-link-45deg fs-4"></i>
                                        </div>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="" name="description">
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-md-center mb-5 flex-wrap flex-column flex-md-row">
                                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-lg-0">Статусы:</label>
                                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                                        <label class="form-check-label me-3" for="1">В ожидании</label>
                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="1">
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                                        <label class="form-check-label me-3" for="2">Подтверждённая</label>
                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="2">
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                                        <label class="form-check-label me-3" for="3">Отклонённая</label>
                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="3">
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                                        <label class="form-check-label me-3" for="4">Брак</label>
                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="4">
                                    </div>
                                </div>
                                <div class="d-flex align-items-md-center text-nowrap flex-column flex-md-row flex-wrap">
                                    <div class="me-5 ">
                                        <span class="svg-icon svg-icon-muted svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black"/>
                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black"/>
                                            </svg>
                                        </span>
                                        <a href="##" class="text-gary-700 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#modal_postback_settings">Настройки глобального Postback</a>
                                    </div>
                                    <div class="me-5">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black"/>
                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black"/>
                                        </svg>
                                    </span>
                                        <!--end::Svg Icon-->
                                        <a href="##" class="text-gary-700 text-decoration-underline">Лог Postback</a>
                                    </div>
                                    <div class="">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black"/>
                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black"/>
                                        </svg>
                                    </span>
                                        <!--end::Svg Icon-->
                                        <a href="##" class="text-gary-700 text-decoration-underline">Помощь по Postback</a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-xl-row-fluid w-100 w-xl-300px mb-5 order-2">
                    <!--begin::Card-->
                    <div class="card card-flush mb-0 sticky-top shadow-sm" data-kt-sticky-top="100px" data-kt-sticky-animation="false" style="z-index: 1; top: 95px;">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Метки</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 fs-6">
                            <div class="d-flex mb-5">
                                <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="" name="target_assign">
                                    <option value="1" selected>Не выбрано</option>
                                    <option value="2">kama</option>
                                </select>
                            </div>
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control" placeholder="Sub1" name="description">
                            </div>
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control" placeholder="Sub2" name="description">
                            </div>
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control" placeholder="Sub3" name="description">
                            </div>
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control" placeholder="Sub4" name="description">
                            </div>
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control" placeholder="Sub5" name="description">
                            </div>
                            <div class="d-flex b-0">
                                <button type="submit" class="btn btn-primary w-100" id="kt_subscriptions_create_button">
                                    <!--begin::Indicator-->
                                    <span class="indicator-label">Сохранить компанию</span>
                                    <span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator-->
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
    </div>
</div>

<!--begin::Modals-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="modal_postback_settings" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-12">
                    <h2 class="fw-bolder mb-3">Глобальный Postback</h2>
                </div>
                <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row mb-5">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-2 mb-sm-0">Url:</label>
                    <!--end::Label-->
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi bi-link-45deg fs-4"></i>
                        </div>
                        <!--begin::Input-->
                        <input type="text" class="form-control" placeholder="" name="description">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="d-flex align-items-md-center flex-wrap flex-column flex-md-row">
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-lg-0">Статусы:</label>
                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                        <label class="form-check-label me-3" for="1x">В ожидании</label>
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="1x">
                    </div>
                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                        <label class="form-check-label me-3" for="2x">Подтверждённая</label>
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="2x">
                    </div>
                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                        <label class="form-check-label me-3" for="3x">Отклонённая</label>
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="3x">
                    </div>
                    <div class="form-check form-check-custom form-check-solid me-5 mb-3 mb-lg-0">
                        <label class="form-check-label me-3" for="4x">Брак</label>
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="4x">
                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-sm-end mb-5">
                    <a class="btn btn-primary">Сохранить</a>
                </div>
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Как это работает</h2>
                </div>
                <div class="d-flex align-items mb-5">
                    <span class="fv-bolder fs-5 me-2">URL Example:</span>
                    <span class="fv-bolder fs-5 text-danger bg-secondary px-3 rounded text-break">http://pattern.domain.ru/random.php?var=value&varN=value</span>
                </div>
                <h3 class="fw-bolder mb-5">Доступные параметры</h3>
                <!--begin::Table wrapper-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered fs-6 fw-bold gy-4 border border-1 table-rounded gy-7 gs-7 table-striped" id="">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="text-start fw-bolder fs-7 text-uppercase gs-0 table-dark text-white">
                                <th class="min-w-300px">Параметр</th>
                                <th class="min-w-100px">Описание</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="">
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{uuid}</span>
                            </td>
                            <td>Идентификатор конверсии (уникальное значение)</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{date}</span>
                            </td>
                            <td>Дата конверсии
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{status}</span>
                            </td>
                            <td>Статус конверсии: pending (новая), rejected (отклонено), approved (подтверждена), trash (брак)</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{sub1}</span>
                            </td>
                            <td>Sub1</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{sub2}</span>
                            </td>
                            <td>Sub2</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{sub3}</span>
                            </td>
                            <td>Sub3</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{sub4}</span>
                            </td>
                            <td>Sub4</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{sub5}</span>
                            </td>
                            <td>Sub5</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{ip}</span>
                            </td>
                            <td> IP</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{payment}</span>
                            </td>
                            <td> Выплата</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{offer_id}</span>
                            </td>
                            <td>Идентификатор оффера</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{campaign_id}</span>
                            </td>
                            <td>Идентификатор кампании</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{campaign_hash}</span>
                            </td>
                            <td>API hash кампании</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="text-danger bg-secondary px-3 rounded">{currency}</span>
                            </td>
                            <td>Валюта выплаты</td>
                        </tr>

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table wrapper-->
                <!--end::Content-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="modal_domain_parking" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-5">
                    <h2 class="fw-bolder mb-3">Парковка домена</h2>
                </div>
                <div class="mb-5">
                    Для парковки домена Вам необходимо в настройках DNS у регистратора домена прописать наш адрес в CNAME-запись: <span class="fw-bolder">parking.arbitpro.ru</span>
                </div>
                <div class="d-flex align-items-sm-center mb-5 flex-column flex-sm-row">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-sm-0">Домен:</label>
                    <!--end::Label-->
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi bi-link-45deg fs-4"></i>
                        </div>
                        <!--begin::Input-->
                        <input type="text" class="form-control" placeholder="" name="description">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-sm-end">
                    <a href="" class="btn btn-primary">Сохранить</a>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<?php require_once('blocks/footer.php');?>

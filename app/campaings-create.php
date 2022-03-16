<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid" id="kt-content">
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_content_container">
        <div class="container-fluid">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_subscriptions_create_new">
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                                    <div class="col-xxl-4 col-md-6 col-xs-12">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 text-nowrap">Название оффера</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="" name="description">
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xxl-4 col-md-6 col-xs-12">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2 text-nowrap">Название кампании</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="" name="description">
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xxl-4 col-md-6 col-xs-12">
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
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                                    <div class="col-xxl-4 col-lg-6 col-md-12  mb-5">
                                        <div class="input-group flex-nowrap me-3">
                                            <span class="input-group-text"><i class="bi bi bi-link-45deg fs-4"></i></span>
                                            <div class="overflow-hidden flex-grow-1">
                                                <select class="form-select rounded-start-0" data-hide-search="true" data-control="select2" data-placeholder="Выберете прокладку">
                                                    <option></option>
                                                    <option value="1">example.com</option>
                                                    <option value="2">example.com</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-success me-10 mb-5" data-bs-toggle="tooltip" title="Добавить">
                                        <i class="bi bi-plus-circle-fill fs-2"></i>
                                    </a>
                                    <div class="col-xxl-6 col-lg-6 col-md-12 d-flex align-items-center mb-5">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold text-nowrap me-3">Путь</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="" name="description">
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 fw-bold gy-4" id="kt_subscription_products_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-300px">Название</th>
                                            <th class="min-w-100px">CR</th>
                                            <th class="min-w-150px">EPC</th>
                                            <th class="min-w-70px text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600">
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1"/>
                                                    <label class="form-check-label" for="flexCheckDefault_1">
                                                        medportal | uz
                                                    </label>
                                                </div>
                                            </td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Открыть">
                                                    <span class="svg-icon svg-icon-2x me-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                   <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Files/Downloads-folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M14.8875071,12.8306874 L12.9310336,12.8306874 L12.9310336,10.8230161 C12.9310336,10.5468737 12.707176,10.3230161 12.4310336,10.3230161 L11.4077349,10.3230161 C11.1315925,10.3230161 10.9077349,10.5468737 10.9077349,10.8230161 L10.9077349,12.8306874 L8.9512614,12.8306874 C8.67511903,12.8306874 8.4512614,13.054545 8.4512614,13.3306874 C8.4512614,13.448999 8.49321518,13.5634776 8.56966458,13.6537723 L11.5377874,17.1594334 C11.7162223,17.3701835 12.0317191,17.3963802 12.2424692,17.2179453 C12.2635563,17.2000915 12.2831273,17.1805206 12.3009811,17.1594334 L15.2691039,13.6537723 C15.4475388,13.4430222 15.4213421,13.1275254 15.210592,12.9490905 C15.1202973,12.8726411 15.0058187,12.8306874 14.8875071,12.8306874 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
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
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Открыть">
                                                    <span class="svg-icon svg-icon-2x me-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                   <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Files/Downloads-folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M14.8875071,12.8306874 L12.9310336,12.8306874 L12.9310336,10.8230161 C12.9310336,10.5468737 12.707176,10.3230161 12.4310336,10.3230161 L11.4077349,10.3230161 C11.1315925,10.3230161 10.9077349,10.5468737 10.9077349,10.8230161 L10.9077349,12.8306874 L8.9512614,12.8306874 C8.67511903,12.8306874 8.4512614,13.054545 8.4512614,13.3306874 C8.4512614,13.448999 8.49321518,13.5634776 8.56966458,13.6537723 L11.5377874,17.1594334 C11.7162223,17.3701835 12.0317191,17.3963802 12.2424692,17.2179453 C12.2635563,17.2000915 12.2831273,17.1805206 12.3009811,17.1594334 L15.2691039,13.6537723 C15.4475388,13.4430222 15.4213421,13.1275254 15.210592,12.9490905 C15.1202973,12.8726411 15.0058187,12.8306874 14.8875071,12.8306874 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
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
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                                    <div class="col-xxl-4 col-lg-6 col-md-12  mb-5">
                                        <div class="input-group flex-nowrap me-3">
                                            <span class="input-group-text"><i class="bi bi bi-link-45deg fs-4"></i></span>
                                            <div class="overflow-hidden flex-grow-1">
                                                <select class="form-select rounded-start-0" data-hide-search="true" data-control="select2" data-placeholder="Выберете прокладку">
                                                    <option></option>
                                                    <option value="1">example.com</option>
                                                    <option value="2">example.com</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-success me-10 mb-5" data-bs-toggle="tooltip" title="Добавить">
                                        <i class="bi bi-plus-circle-fill fs-2"></i>
                                    </a>
                                    <div class="col-xxl-6 col-lg-6 col-md-12 d-flex align-items-center mb-5">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold text-nowrap me-3">Путь</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control" placeholder="" name="description">
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 fw-bold gy-4" id="kt_subscription_products_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-300px">Название</th>
                                            <th class="min-w-100px">CR</th>
                                            <th class="min-w-150px">EPC</th>
                                            <th class="min-w-70px text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600">
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
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Открыть">
                                                    <span class="svg-icon svg-icon-2x me-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                   <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Files/Downloads-folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M14.8875071,12.8306874 L12.9310336,12.8306874 L12.9310336,10.8230161 C12.9310336,10.5468737 12.707176,10.3230161 12.4310336,10.3230161 L11.4077349,10.3230161 C11.1315925,10.3230161 10.9077349,10.5468737 10.9077349,10.8230161 L10.9077349,12.8306874 L8.9512614,12.8306874 C8.67511903,12.8306874 8.4512614,13.054545 8.4512614,13.3306874 C8.4512614,13.448999 8.49321518,13.5634776 8.56966458,13.6537723 L11.5377874,17.1594334 C11.7162223,17.3701835 12.0317191,17.3963802 12.2424692,17.2179453 C12.2635563,17.2000915 12.2831273,17.1805206 12.3009811,17.1594334 L15.2691039,13.6537723 C15.4475388,13.4430222 15.4213421,13.1275254 15.210592,12.9490905 C15.1202973,12.8726411 15.0058187,12.8306874 14.8875071,12.8306874 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
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
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Открыть">
                                                    <span class="svg-icon svg-icon-2x me-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-40px h-40px" data-bs-toggle="tooltip" title="Скачать">
                                                   <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Files/Downloads-folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M14.8875071,12.8306874 L12.9310336,12.8306874 L12.9310336,10.8230161 C12.9310336,10.5468737 12.707176,10.3230161 12.4310336,10.3230161 L11.4077349,10.3230161 C11.1315925,10.3230161 10.9077349,10.5468737 10.9077349,10.8230161 L10.9077349,12.8306874 L8.9512614,12.8306874 C8.67511903,12.8306874 8.4512614,13.054545 8.4512614,13.3306874 C8.4512614,13.448999 8.49321518,13.5634776 8.56966458,13.6537723 L11.5377874,17.1594334 C11.7162223,17.3701835 12.0317191,17.3963802 12.2424692,17.2179453 C12.2635563,17.2000915 12.2831273,17.1805206 12.3009811,17.1594334 L15.2691039,13.6537723 C15.4475388,13.4430222 15.4213421,13.1275254 15.210592,12.9490905 C15.1202973,12.8726411 15.0058187,12.8306874 14.8875071,12.8306874 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
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
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">Я</span>ндекс метрика</span>
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
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">Google Analytics</span>
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
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">MailRu</span>
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
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">Facebook pixel</span>
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
                                            <span class="text-gray-800 fs-6 fw-bolder text-center"><span class="">Vk pixel</span>
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
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
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
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-nowrap me-3">Url:</label>
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
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-nowrap me-3">Статусы:</label>
                                    <!--end::Label-->
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <label class="form-check-label me-3" for="1">В ожидании</label>
                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="1">
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <label class="form-check-label me-3" for="2">Подтверждённая</label>
                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="2">
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <label class="form-check-label me-3" for="3">Отклонённая</label>
                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="3">
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <label class="form-check-label me-3" for="4">Брак</label>
                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="4">
                                        </div>
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
                <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-400px mb-10 order-1 order-lg-2">
                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '400px', xl: '400px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Summary</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 fs-6">
                            <!--begin::Section-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h5 class="mb-3">Customer details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="d-flex align-items-center mb-1">
                                    <!--begin::Name-->
                                    <a href="../../demo6/dist/apps/customers/view.html" class="fw-bolder text-gray-800 text-hover-primary me-2">Sean Bean</a>
                                    <!--end::Name-->
                                    <!--begin::Status-->
                                    <span class="badge badge-light-success">Active</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Email-->
                                <a href="#" class="fw-bold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                <!--end::Email-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>
                            <!--end::Seperator-->
                            <!--begin::Section-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h5 class="mb-3">Product details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Basic Bundle</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-bold text-gray-600">$149.99 / Year</span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>
                            <!--end::Seperator-->
                            <!--begin::Section-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <h5 class="mb-3">Payment Details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Card info-->
                                    <div class="fw-bold text-gray-600 d-flex align-items-center">Mastercard
                                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt="" /></div>
                                    <!--end::Card info-->
                                    <!--begin::Card expiry-->
                                    <div class="fw-bold text-gray-600">Expires Dec 2024</div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Actions-->
                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary" id="kt_subscriptions_create_button">
                                    <!--begin::Indicator-->
                                    <span class="indicator-label">Create Subscription</span>
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
<div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
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
                    <h1 class="fw-bolder mb-3">Search Customers</h1>
                    <div class="text-gray-400 fw-bold fs-5">Add a customer to a subscription</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
                            <!--end::Svg Icon-->
													</span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Illustration-->
                            <div class="text-center px-4 pt-10">
                                <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-200px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-300px scroll-y me-n5 pe-5">
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
                                        <span class="badge badge-light">Head Of Marketing</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
                                        <span class="badge badge-light">Software Arcitect</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
                                        <span class="badge badge-light">System Admin</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Neil Owen</span>
                                        <span class="badge badge-light">Account Manager</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
                                        <span class="badge badge-light">Web Desinger</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-bold py-0 mb-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-gray-400 fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                                <img src="assets/media/illustrations/sketchy-1/9.png" alt="user" class="mw-100 mh-200px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<?php require_once('blocks/footer.php');?>
<?php require_once('blocks/header.php');?>
    <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
        <!--begin::Container-->
        <div  class="d-flex flex-column flex-column-fluid pt-0" id="kt_content_container">
            <div class="container-fluid p-sm-5 pt-5 p-1">
                <!--begin::Card-->
                <div class="card mb-2">
                    <div class="card-header border-0 pt-5 px-5 px-sm-9">
                        <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                            <span class="card-label fw-bolder fs-3 mb-1">Кампании</span>
                        </h3>
                        <div class="d-flex ms-0 ms-sm-auto">
                            <div class="card-toolbar">
                                <div class="d-flex align-items-center position-relative w-200px mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                    </svg>
                                </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid ps-14 me-2" placeholder="Поиск...">
                                </div>
                                <button href="#" class="btn btn-info mb-2" data-kt-drawer-show="true" data-kt-drawer-target="#kt_engage_demos">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-info svg-icon-3"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Filter.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                    <!--end::Svg Icon-->
                                    Фильтры
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--begin::Card Body-->
                    <div class="card-body text-gray-700 p-0 p-sm-3">
                        <table id="datatable_campaigns" class="table table-row-bordered gs-2">
                            <thead class="table-dark fs-6 px-7 align-middle text-start text-nowrap fw-bolder">
                                <tr class="">
                                    <th class="dtr-control">

                                    </th>
                                    <th>ID</th>
                                    <th>Дата обновления</th>
                                    <th>Название</th>
                                    <th>Оффер</th>
                                    <th>URL</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle text-start">
                            <tr>
                                <td></td>
                                <td class="text-nowrap">2</td>
                                <td>25.02.2022</td>
                                <td>Моя кампания</td>
                                <td><a href="##">Powerman Low Price</a></td>
                                <td>https://example.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-nowrap">2</td>
                                <td>25.02.2022</td>
                                <td>Моя кампания</td>
                                <td><a href="##">Powerman Low Price</a></td>
                                <td>https://example.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-nowrap">2</td>
                                <td>25.02.2022</td>
                                <td>Моя кампания</td>
                                <td><a href="##">Powerman Low Price</a></td>
                                <td>https://example.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Card Body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
<!--begin::Demos drawer-->
<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'100%', 'sm': '350px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bolder text-gray-700">Фильтры</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x svg-icon-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_engage_demos_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                <!--begin::Wrapper-->
                <div class="mb-0">
                    <div class="form">
                        <!--begin::Flatpickr-->
                        <div class="input-group mb-5">
                            <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Выберете диапазон" id="kt_ecommerce_sales_flatpickr" />
                            <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black" />
                                                </svg>
                                            </span>
                                <!--end::Svg Icon-->
                            </button>
                        </div>
                        <!--end::Flatpickr-->
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Оффер" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Поток" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Лэндинг" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Прокладка" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Страна" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Subs" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="nav-text mb-2">Группировать по:</div>
                        <div class="mb-5">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Дата" data-kt-ecommerce-order-filter="status">

                            </select>
                            <!--end::Select2-->
                        </div>
                        <a href="#" class="btn btn-primary w-100 mb-3"><i class="fas fa-redo fs-4 me-2"></i> Обновить</a>
                        <a href="#" class="btn btn-danger w-100"><i class="far fa-times-circle fs-4 me-2"></i> Сбросить</a>
                    </div>
                    <!--end::Demos-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Demos drawer-->
<?php require_once('blocks/footer.php');?>
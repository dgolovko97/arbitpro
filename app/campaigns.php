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
                                <div class="d-flex align-items-center position-relative flex-grow-1 mb-2">
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
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle text-start">
                            <tr>
                                <td></td>
                                <td class="text-nowrap">7536</td>
                                <td>28.03.2022 19:12</td>
                                <td>Цимунк 1</td>
                                <td><a href="##">Цимунк</a></td>
                                <td>Api hash: <a href="">1a0d7</a></td>
                                <td class=" text-nowrap">
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Скопировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="currentColor"/>
    <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor"/>
</svg></span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Скачать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Редактировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"/>
<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Удалить">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                                                            <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-nowrap">7449</td>
                                <td>11.03.2022 11:24</td>
                                <td>Synite1</td>
                                <td><a href="##">Synite</a></td>
                                <td>
                                    <div>
                                        Лэндинг: <a href="">http://dezma.ru/l368754</a>
                                    </div>
                                    <div>
                                        APi hash: <a href="">0449f1</a>
                                    </div>
                                </td>
                                <td class=" text-nowrap">
                                    <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Скопировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="currentColor"/>
    <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor"/>
</svg></span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Скачать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Редактировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"/>
<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Удалить">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-nowrap">7536</td>
                                <td>28.03.2022 19:12</td>
                                <td>Цимунк 1</td>
                                <td><a href="##">Цимунк</a></td>
                                <td>Api hash: <a href="">1a0d7</a></td>
                                <td class=" text-nowrap">
                                    <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Скопировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="currentColor"/>
    <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor"/>
</svg></span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Скачать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Редактировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"/>
<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Удалить">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-nowrap">7449</td>
                                <td>11.03.2022 11:24</td>
                                <td>Synite1</td>
                                <td><a href="##">Synite</a></td>
                                <td>
                                    <div>
                                        Лэндинг: <a href="">http://dezma.ru/l368754</a>
                                    </div>
                                    <div>
                                        APi hash: <a href="">0449f1</a>
                                    </div>
                                </td>
                                <td class=" text-nowrap">
                                    <a href="#" class="btn btn-icon btn-sm me-1 btn-active-light-primary" data-bs-toggle="tooltip" title="Скопировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="currentColor"/>
    <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor"/>
</svg></span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Скачать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Редактировать">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"/>
<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-sm btn-active-light-primary" data-bs-toggle="tooltip" title="Удалить">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil017.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
                                                    </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
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
<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
        <!--begin::Container-->
        <div  class="d-flex flex-column flex-column-fluid pt-0" id="kt_content_container">
            <div class="container-fluid p-sm-5 pt-5 p-1">
                <div class="card mb-5">
                    <div class="card-header border-0 pt-5 px-5 px-sm-9">
                        <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                            <span class="card-label fw-bolder fs-3 mb-1">Выплаты</span>
                        </h3>
                        <div class="card-toolbar">
                            <span class="text-bolder text-gray-700 fs-5 border-bottom border-success border-3 me-3 mb-3 mb-sm-0">Доступно на вывод: 400,00 $</span>
                            <button href="#" class="btn btn-sm btn-success fs-6 fw-bolder d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal_order_payouts">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/finance/fin008.svg-->
                                <span class="svg-icon svg-icon-2x me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z" fill="currentColor"/>
                                        <path d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                Заказать выплату
                            </button>
                        </div>
                    </div>
                    <!--begin::Card Body-->
                    <div class="card-body text-gray-700 p-1 p-sm-3">
                        <!--begin::Flatpickr-->
                        <div class="input-group mb-3 mw-sm-300px">
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
                        <table id="datatable_payments" class="table table-row-bordered gs-2">
                            <thead class="table-dark fs-6 px-7 align-middle text-start text-nowrap fw-bolder">
                            <tr class="">
                                <th class="dtr-control">
                                </th>
                                <th>Дата</th>
                                <th>Сумма</th>
                                <th>Кошелёк</th>
                                <th>Статус</th>
                                <th>Комментарий</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle text-start">
                                <tr>
                                    <td></td>
                                    <td class="text-nowrap">25.02.2022</td>
                                    <td>3500$</td>
                                    <td>webmoney</td>
                                    <td>Успешно</td>
                                    <td>Комментарий</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-nowrap">25.02.2022</td>
                                    <td>3500$</td>
                                    <td>webmoney</td>
                                    <td>Успешно</td>
                                    <td>Комментарий</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Card Body-->
                </div>
                <div class="card mb-2">
                    <div class="card-header border-0 pt-5 px-5 px-sm-9">
                        <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                            <span class="card-label fw-bolder fs-3 mb-1">Бонусы</span>
                        </h3>
                    </div>
                    <!--begin::Card Body-->
                    <div class="card-body text-gray-700  p-1 p-sm-3">
                        <!--begin::Flatpickr-->
                        <div class="input-group mb-3 mw-sm-300px">
                            <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Выберете диапазон" id="kt_ecommerce_sales_flatpickr_2" />
                            <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear_2">
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
                        <table id="datatable_bonus" class="table table-row-bordered gs-2">
                            <thead class="table-dark fs-6 px-7 align-middle text-start text-nowrap fw-bolder">
                            <tr class="">
                                <th class="dtr-control">
                                </th>
                                <th>Дата</th>
                                <th>Сумма</th>
                                <th>Статус</th>
                                <th>Комментарий</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle text-start">
                            <tr>
                                <td></td>
                                <td class="text-nowrap">25.02.2022</td>
                                <td>3500$</td>
                                <td>Успешно</td>
                                <td>Комментарий</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Card Body-->
                </div>
            </div>
        </div>
    </div>
<!--begin::Modal - Users Search-->
<div class="modal fade" id="modal_order_payouts" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end p-0 p-sm-6">
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
            <div class="modal-body scroll-y p-3 p-sm-5">
                <!--begin::Content-->
                <div class="text-center mb-5">
                    <h2 class="fw-bolder mb-3">Заказать выплату</h2>
                </div>
                <div class="d-flex  mb-5 flex-column ">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-sm-0">Сумма:</label>
                    <!--end::Label-->
                    <div class="input-group">
                        <div class="input-group-text text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z" fill="currentColor"></path>
                                <path d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <!--begin::Input-->
                        <input type="text" class="form-control" placeholder="" name="description">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="d-flex  mb-5 flex-column ">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-sm-0">Кошелёк:</label>
                    <!--end::Label-->
                    <div class="input-group">
                        <div class="input-group-text text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/>
                                <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/>
                                <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <!--begin::Input-->
                        <input type="text" class="form-control" placeholder="" name="description">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="d-flex  mb-5 flex-column ">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-sm-0">Валюта:</label>
                    <!--end::Label-->
                    <div class="input-group">
                        <div class="input-group-text text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="currentColor"/>
                                <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <!--begin::Input-->
                        <input type="text" class="form-control" placeholder="" name="description">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="d-flex  mb-5 flex-column ">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold text-nowrap me-3 mb-3 mb-sm-0">Комментарий:</label>
                    <!--end::Label-->
                    <textarea class="form-control"  name="" id="" cols="30" rows="5"></textarea>
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
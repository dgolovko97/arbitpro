<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div  class="docs-content d-flex flex-column flex-column-fluid" id="kt_content_container">
                    <div class="container-fluid">
                        <!--begin::Card-->
                        <div class="card mb-5">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                                    <span class="card-label fw-bolder fs-3 mb-1">Выплаты</span>
                                </h3>
                                <div class="card-toolbar">
                                    <span class="text-bolder text-gray-700 fs-5 border-bottom border-success border-3">Доступно на вывод: 400,00 $</span>
                                </div>
                            </div>
                            <!--begin::Card Body-->
                            <div class="card-body text-gray-700 pt-0">
                                <!--begin::Flatpickr-->
                                <div class="input-group mb-3 w-300px">
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
                                <table id="kt_datatable_example_6" class="table table-striped border rounded gy-5 gs-7">
                                    <thead>
                                    <tr class="fw-bolder fs-6 text-gray-600 px-7 text-nowrap">
                                        <th>Дата</th>
                                        <th>Сумма</th>
                                        <th>Кошелёк</th>
                                        <th>Статус</th>
                                        <th>Комментарий</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="align-middle text-dark fw-bolder">
                                        <td>25.02.2022</td>
                                        <td>3500$</td>
                                        <td>webmoney</td>
                                        <td>Успешно</td>
                                        <td>Комментарий</td>
                                    </tr>
                                    <tr class="align-middle text-dark fw-bolder">
                                        <td>25.02.2022</td>
                                        <td>3500$</td>
                                        <td>webmoney</td>
                                        <td>Успешно</td>
                                        <td>Комментарий</td>
                                    </tr>
                                    <tr class="align-middle text-dark fw-bolder">
                                        <td>25.02.2022</td>
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
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card mb-2">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                                    <span class="card-label fw-bolder fs-3 mb-1">Бонусы</span>
                                </h3>
                            </div>
                            <!--begin::Card Body-->
                            <div class="card-body text-gray-700 pt-0">
                                <!--begin::Flatpickr-->
                                <div class="input-group mb-3 w-300px">
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
                                <table id="kt_datatable_example_6_2" class="table table-striped border rounded gy-5 gs-7">
                                    <thead>
                                    <tr class="fw-bolder fs-6 text-gray-600 px-7 text-nowrap">
                                        <th>Дата</th>
                                        <th>Сумма</th>
                                        <th>Статус</th>
                                        <th>Комментарий</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="align-middle text-dark fw-bolder">
                                        <td>25.02.2022</td>
                                        <td>3500$</td>
                                        <td>Успешно</td>
                                        <td>Комментарий</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Card Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
<?php require_once('blocks/footer.php');?>
<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div  class="docs-content d-flex flex-column flex-column-fluid" id="kt_content_container">
                    <div class="container-fluid">
                        <!--begin::Card-->
                        <div class="card mb-2">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start fw-bolder text-uppercase align-items-center">
                                    <span class="card-label fw-bolder fs-3 mb-1">Офферы</span>
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
                                        <button href="#" class="btn btn-light btn-active-info mb-2" data-kt-drawer-show="true" data-kt-drawer-target="#kt_engage_demos">
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
                            <div class="card-body text-gray-700 pt-0">
                                <table id="kt_datatable_example_6" class="table table-striped border rounded gy-5 gs-7">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-600 px-7 text-nowrap">
                                            <th>Топ</th>
                                            <th>Оффер</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Отчисления и ГЕО</th>
                                            <th>EPC</th>
                                            <th>Approve</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle text-dark fw-bolder">
                                            <td>1</td>
                                            <td>
                                                <img src="img/offer1.png" class="w-100px" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <span class="fs-6">Powerman Low Price</span>
                                                    <span class="text-gray-700 fw-bold d-block fs-7">Средство для потенции</span>
                                                </div>
                                            </td>
                                            <td>Нутра</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0%</td>
                                            <td><a href="/campaings-create.php" class="btn btn-info">Создать компанию</a></td>
                                        </tr>
                                        <tr class="align-middle text-dark fw-bolder">
                                            <td>2</td>
                                            <td>
                                                <img src="img/offer2.png" class="w-100px" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <span class="fs-6">Powerman Low Price</span>
                                                    <span class="text-gray-700 fw-bold d-block fs-7">Средство для потенции</span>
                                                </div>
                                            </td>
                                            <td>Нутра</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0%</td>
                                            <td><a href="/campaings-create.php" class="btn btn-info">Создать компанию</a></td>
                                        </tr>
                                        <tr class="align-middle text-dark fw-bolder">
                                            <td>3</td>
                                            <td>
                                                <img src="img/offer3.png" class="w-100px" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <span class="fs-6">Powerman Low Price</span>
                                                    <span class="text-gray-700 fw-bold d-block fs-7">Средство для потенции</span>
                                                </div>
                                            </td>
                                            <td>Нутра</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0%</td>
                                            <td><a href="/campaings-create.php" class="btn btn-info">Создать компанию</a></td>
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
<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
    <!--begin::Container-->
    <div  class="d-flex flex-column flex-column-fluid pt-0" id="kt_content_container">
        <div class="container-fluid p-sm-5 pt-5 p-1">
            <div class="card mb-2">
                <div class="card-header border-0 pt-5 px-5 px-sm-9">
                    <h3 class="card-title align-items-center fw-bolder text-uppercase">
                        <span class="card-label fw-bolder fs-3 mb-1">Тикеты</span>
                    </h3>
                    <div class="d-flex ms-0 ms-sm-auto">
                        <div class="card-toolbar">
                            <button href="#" class="btn btn-light btn-light-primary" data-bs-toggle="modal" data-bs-target="#modal_new_ticket">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen035.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"/>
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"/>
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                Создать тикет
                            </button>
                        </div>
                    </div>
                </div>
                <!--begin::Card Body-->
                <div class="card-body text-gray-700 p-0 p-sm-3">
                    <table id="datatable_tickets" class="table table-row-bordered gs-2">
                        <thead class="table-dark fs-6 px-7 align-middle text-start text-nowrap fw-bolder">
                        <tr class="">
                            <th class="dtr-control">

                            </th>
                            <th>Создана</th>
                            <th>Категория</th>
                            <th>Тема</th>
                            <th>Статус</th>
                            <th>Обновлено</th>
                        </tr>
                        </thead>
                        <tbody class="align-middle text-start">
                        <tr>
                            <td></td>
                            <td class="text-nowrap">05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-nowrap">05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-nowrap">05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-nowrap">05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--end::Card Body-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_new_ticket" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Создать тикет</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold mb-2">Категория</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="" name="target_assign">
                            <option value="1" selected>Техническая поддержка</option>
                        </select>
                        <!--end::Label-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="">Тема</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="target_title">
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Текст</label>
                        <textarea class="form-control form-control-solid" rows="10" name="target_details" placeholder=""></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="form-group">
                        <!--begin::Dropzone-->
                        <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                            <!--begin::Controls-->
                            <div class="dropzone-panel mb-4">
                                <a class="btn btn-sm fw-bolder btn-light-info btn-secondary dropzone-select">
                                    <span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black"/>
                                        <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="black"/>
                                        <rect x="7" y="13" width="10" height="2" rx="1" fill="black"/>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                        </svg></span>
                                    Выберете файл
                                </a>
                                <a class="dropzone-remove-all btn btn-sm btn-light-primary">Удалить все</a>
                            </div>
                            <!--end::Controls-->
                            <!--begin::Items-->
                            <div class="dropzone-items wm-200px">
                                <div class="dropzone-item p-5" style="display:none">
                                    <!--begin::File-->
                                    <div class="dropzone-file">
                                        <div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                            <strong>(
                                                <span data-dz-size="">340kb</span>)</strong>
                                        </div>
                                        <div class="dropzone-error mt-0" data-dz-errormessage=""></div>
                                    </div>
                                    <!--end::File-->
                                    <!--begin::Progress-->
                                    <div class="dropzone-progress">
                                        <div class="progress bg-light-primary">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Toolbar-->
                                    <div class="dropzone-toolbar">
																	<span class="dropzone-start">

																	</span>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Отменить</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Отправить</span>
                            <span class="indicator-progress">Загрузка...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<?php require_once('blocks/footer.php');?>

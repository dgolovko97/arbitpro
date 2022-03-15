<?php require_once('blocks/header.php');?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div  class="docs-content d-flex flex-column flex-column-fluid" id="kt_content_container">
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card mb-2">
                <div class="card-header border-0 pt-5">
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
                <div class="card-body text-gray-700 pt-0">
                    <table id="kt_datatable_example_6" class="table table-striped border rounded gy-5 gs-7">
                        <thead>
                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                            <th>Создана</th>
                            <th>Категория</th>
                            <th>Тема</th>
                            <th>Статус</th>
                            <th>Обновлено</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>05.03.2022</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr>
                            <td>05.03.2022</td>
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
            <!--end::Card-->
        </div>
    </div>
    <!--end::Container-->
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
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
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
                                <a class="dropzone-select btn btn-sm btn-secondary me-2">Выберете файл</a>
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
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Отменить</button>
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

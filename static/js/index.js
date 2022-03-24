var start = moment().subtract(29, "days");
var end = moment();

function cb(start, end) {
    $("#kt_ecommerce_sales_flatpickr").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
    $("#kt_ecommerce_sales_flatpickr_2").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
}

$("#kt_ecommerce_sales_flatpickr").daterangepicker({
    startDate: start,
    endDate: end,
    parentEl: $('#kt_engage_demos'),
    ranges: {
        "Сегодня": [moment(), moment()],
        "Вчера": [moment().subtract(1, "days"), moment().subtract(1, "days")],
        "Прошлые 7 дней ": [moment().subtract(6, "days"), moment()],
        "Прошлые 30 дней": [moment().subtract(29, "days"), moment()],
        "Этот месяц": [moment().startOf("month"), moment().endOf("month")],
        "Прошлый месяц": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
    },
    locale: {
        customRangeLabel: 'Выбрать диапазон',
    },
}, cb);
$("#kt_ecommerce_sales_flatpickr_2").daterangepicker({
    startDate: start,
    endDate: end,
    parentEl: $('#kt_engage_demos'),
    locale: {
        customRangeLabel: 'Выбрать диапазон',
    },
    ranges: {
        "Сегодня": [moment(), moment()],
        "Вчера": [moment().subtract(1, "days"), moment().subtract(1, "days")],
        "Прошлые 7 дней ": [moment().subtract(6, "days"), moment()],
        "Прошлые 30 дней": [moment().subtract(29, "days"), moment()],
        "Этот месяц": [moment().startOf("month"), moment().endOf("month")],
        "Прошлый месяц": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
    }
}, cb);

cb(start, end);

$("#kt_datatable_example_6").DataTable({
    responsive: true
});
$("#kt_datatable_example_6_2").DataTable({
    responsive: true
});
// Init dropzone
const initDropzone = () => {
    // set the dropzone container id
    const id = "#kt_modal_upload_dropzone";
    const dropzone = document.querySelector(id);
    if (!dropzone) {
        return
    }

    // set the preview element template
    var previewNode = dropzone.querySelector(".dropzone-item");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
        url: "path/to/your/server", // Set the url for your upload script location
        parallelUploads: 10,
        previewTemplate: previewTemplate,
        maxFilesize: 1, // Max filesize in MB
        autoProcessQueue: false, // Stop auto upload
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: id + " .dropzone-items", // Define the container to display the previews
        clickable: id + " .dropzone-select" // Define the element that should be used as click trigger to select files.
    });

    myDropzone.on("addedfile", function (file) {
        // Hook each start button
        file.previewElement.querySelector(id + " .dropzone-start").onclick = function () {
            // myDropzone.enqueueFile(file); -- default dropzone function

            // Process simulation for demo only
            const progressBar = file.previewElement.querySelector('.progress-bar');
            progressBar.style.opacity = "1";
            var width = 1;
            var timer = setInterval(function () {
                if (width >= 100) {
                    myDropzone.emit("success", file);
                    myDropzone.emit("complete", file);
                    clearInterval(timer);
                } else {
                    width++;
                    progressBar.style.width = width + '%';
                }
            }, 20);
        };

        const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
        dropzoneItems.forEach(dropzoneItem => {
            dropzoneItem.style.display = '';
        });
        dropzone.querySelector('.dropzone-upload').style.display = "inline-block";
        dropzone.querySelector('.dropzone-remove-all').style.display = "inline-block";
    });

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("complete", function (file) {
        const progressBars = dropzone.querySelectorAll('.dz-complete');
        setTimeout(function () {
            progressBars.forEach(progressBar => {
                progressBar.querySelector('.progress-bar').style.opacity = "0";
                progressBar.querySelector('.progress').style.opacity = "0";
                progressBar.querySelector('.dropzone-start').style.opacity = "0";
            });
        }, 300);
    });

    // Setup the buttons for all transfers
    dropzone.querySelector(".dropzone-upload").addEventListener('click', function () {
        // myDropzone.processQueue(); --- default dropzone process

        // Process simulation for demo only
        myDropzone.files.forEach(file => {
            const progressBar = file.previewElement.querySelector('.progress-bar');
            progressBar.style.opacity = "1";
            var width = 1;
            var timer = setInterval(function () {
                if (width >= 100) {
                    myDropzone.emit("success", file);
                    myDropzone.emit("complete", file);
                    clearInterval(timer);
                } else {
                    width++;
                    progressBar.style.width = width + '%';
                }
            }, 20);
        });
    });

    // Setup the button for remove all files
    dropzone.querySelector(".dropzone-remove-all").addEventListener('click', function () {
        Swal.fire({
            text: "Are you sure you would like to remove all files?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, remove it!",
            cancelButtonText: "No, return",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                dropzone.querySelector('.dropzone-upload').style.display = "none";
                dropzone.querySelector('.dropzone-remove-all').style.display = "none";
                myDropzone.removeAllFiles(true);
            } else if (result.dismiss === 'cancel') {
                Swal.fire({
                    text: "Your files was not removed!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
            }
        });
    });

    // On all files completed upload
    myDropzone.on("queuecomplete", function (progress) {
        const uploadIcons = dropzone.querySelectorAll('.dropzone-upload');
        uploadIcons.forEach(uploadIcon => {
            uploadIcon.style.display = "none";
        });
    });

    // On all files removed
    myDropzone.on("removedfile", function (file) {
        if (myDropzone.files.length < 1) {
            dropzone.querySelector('.dropzone-upload').style.display = "none";
            dropzone.querySelector('.dropzone-remove-all').style.display = "none";
        }
    });
}
initDropzone();
$('#repeater').repeater({
    initEmpty: false,
    isFirstItemUndeletable: true,
    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});

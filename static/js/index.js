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

    // On all files removed
    myDropzone.on("removedfile", function (file) {
        if (myDropzone.files.length < 1) {
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
// Handle action button
const handleActionButton = () => {
    const buttons = document.querySelectorAll('#datatable_statistic [data-action="expand_row"]');
    buttons.forEach((button, index) => {
        button.addEventListener('click', e => {
            e.stopImmediatePropagation();
            e.preventDefault();

            const row = button.closest('tr');
            const DTrow = statistic_datatable.row(row)
            const rowClasses = ['isOpen'];

            if (row.classList.contains('isOpen')) {
                row.classList.remove(...rowClasses);
                DTrow.child.hide();
            } else {
                let tr = document.createElement('tr');
                tr.innerHTML = `
                <td><i class="bi bi-clock text-dark me-1 ms-5"></i><span>10:00</span></td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>`
                DTrow.child(tr).show();
                row.classList.add(...rowClasses);
            }
        });
    });
}
var statistic_datatable = $('#datatable_statistic').DataTable({
    initComplete: function () {
        handleActionButton();
    },
})
$('#datatable_leads').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_offers').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_campaigns').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_payments').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_bonus').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_tickets').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_domain_parking').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]]
})
$('#datatable_postback').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]],
})
$('#datatable_patch').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]],
})
$('#datatable_landings').dataTable({
    responsive: true,
    columnDefs: [
        {
            orderable: false,
            targets: 0
        }
    ],
    order: [[ 1, "desc" ]],
})
let tab_postback = document.querySelector('a[href="#tab_postback"]')
let tab_domain_parking = document.querySelector('a[href="#tab_domain_parking"]')
if (tab_postback) {
    tab_postback.addEventListener('shown.bs.tab', function (event) {
        $('#datatable_postback').DataTable().columns.adjust();
    })
}
if (tab_domain_parking) {
    tab_domain_parking.addEventListener('shown.bs.tab', function (event) {
        $('#datatable_domain_parking').DataTable().columns.adjust();
    })
}
// данные по времени в таблице "статистика"
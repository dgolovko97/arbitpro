var start = moment().subtract(29, "days");
var end = moment();

function cb(start, end) {
    $("#kt_ecommerce_sales_flatpickr").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
    $("#kt_ecommerce_sales_flatpickr_2").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
}

$("#kt_ecommerce_sales_flatpickr").daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
        "Сегодня": [moment(), moment()],
        "Вчера": [moment().subtract(1, "days"), moment().subtract(1, "days")],
        "Прошлые 7 дней ": [moment().subtract(6, "days"), moment()],
        "Прошлые 30 дней": [moment().subtract(29, "days"), moment()],
        "Этот месяц": [moment().startOf("month"), moment().endOf("month")],
        "Прошлый месяц": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
    }
}, cb);
$("#kt_ecommerce_sales_flatpickr_2").daterangepicker({
    startDate: start,
    endDate: end,
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
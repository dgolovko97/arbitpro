const element = document.querySelector('#kt_ecommerce_sales_flatpickr');
flatpickr = $(element).flatpickr({
    altInput: true,
    altFormat: "d.m.Y",
    dateFormat: "Y.m.d",
    mode: "range",
    defaultDate: ["2022-02-05", "2022-03-05"]
});
const clearButton = document.querySelector('#kt_ecommerce_sales_flatpickr_clear');
clearButton.addEventListener('click', e => {
    flatpickr.clear();
});
$("#kt_datatable_example_6").DataTable({
    responsive: true
});
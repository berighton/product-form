$(document).ready(function () {
    $("#formSubmit").click(function (e) {
        if (
            $("#productName").val() &&
            $("#quantity").val() &&
            $("#price").val()
        ) {
            e.preventDefault();

            $.ajax("product", {
                type: 'POST',
                data: {
                    name : $("#productName").val(),
                    qty  : $("#quantity").val(),
                    price: $("#price").val(),

                }
            })
        }
    });
});

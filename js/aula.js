$(document).ready(function () {
    $("form").submit(function (event) {
        $("#teste").text("Hello world!");
        $("#usuario").each(function () {
            var valor = $(this).val();

            if (valor == "") {
                alert("O campo usuario é obrigatorio")

                event.preventDefault();
            }

        });
        $("#senha").each(function () {
            var valor = $(this).val();

            if (valor == "") {
                alert("O campo senha é obrigatorio")

                event.preventDefault();
            }

        });
    })
});
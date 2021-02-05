$(function () {
    let enAtenteDuServeur = false;

    $("#moreBTN").click(function (e) {
        e.preventDefault();

        let offset = $("#moreBTNList").children().length;

        let limit =
            typeof $(this).data("limit") !== typeof undefined &&
            $(this).data("limit") !== false
                ? $(this).data("limit")
                : 10;

        $.get(
            $(this).data("url"),
            {
                offset,
                limit: $(this).data("limit"),
            },
            function (reponse) {
                // Le PHP devrait retourner la vue complète à appender (li)
                $("#moreBTNList")
                    .append(reponse)
                    .find(".col-md-4:nth-last-of-type(-n+" + limit + ")")
                    .addClass("collapse")
                    .fadeIn("slow");
                enAtenteDuServeur = false;
            }
        );
    });

    $(window).scroll(function () {
        if (
            $(window).scrollTop() + $(window).height() >
                $(document).height() - 100 &&
            enAtenteDuServeur == false
        ) {
            enAtenteDuServeur = true;
            $("#moreBTN").click();
        }
    });
});

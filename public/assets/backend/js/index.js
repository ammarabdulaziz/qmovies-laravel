$(".screen-modal").on("click", function (e) {
    e.preventDefault();
    $(".before-get-loader").removeClass("custom-hide").addClass("custom-show");
    $(".table-tbody").empty();
    let link = $(this).attr("add-screen");
    $.ajax({
        method: "GET",
        url: $(this).attr("href"),
        dataType: "json",
        data: { _method: "SHOW" },
        success: function (result) {
            $(".before-get-loader")
                .removeClass("custom-show")
                .addClass("custom-hide");
            $(".add-screen-btn").attr("href", link);
            if (result.data.length > 0) {
                result.data.forEach(function (screen) {
                    $(".table-tbody").append(
                        `<tr id='screens-${screen.screen_id}'><th data-org-colspan='1' data-columns='tech-companies-1-col-0' style='display: table-cell; vertical-align: middle;'>${screen.name}</th><td class='pl-0 pr-0' data-org-colspan='1' data-priority='1' data-columns='tech-companies-1-col-1' style='display: table-cell;'><div class='row ml-3'>Mezzanine</div><hr><div class='row ml-3'>Balcony</div></td><td class='pl-0 pr-0' data-org-colspan='1' data-priority='1' data-columns='tech-companies-1-col-1' style='display: table-cell;'><div class='row ml-3'>${screen.screen_seatings[0].capacity}</div><hr><div class='row ml-3'>${screen.screen_seatings[1].capacity}</div></td><td class='pl-0' data-org-colspan='1' data-priority='3' data-columns='tech-companies-1-col-2' style='display: table-cell;'><div class='row ml-3'>${screen.screen_seatings[0].price}</div><hr><div class='row ml-3'>${screen.screen_seatings[1].price}</div><td class='pl-2' data-org-colspan='1' data-priority='1' data-columns='tech-companies-1-col-3' style='display: table-cell; vertical-align: middle;'><div class='d-flex'><div><a href='/screens/${screen.screen_id}/edit?id=${screen.theatre_id}' class='btn btn-sm btn-info'><i class='bx bx-edit-alt'></i></a></div><div class='ml-1'><button type='submit' id='${screen.screen_id}' table='screens' class='btn btn-sm btn-danger sa-params'><i class='bx bx-x'></i></button></div></div></td></tr>`
                    );
                });
            } else {
                $(".table-tbody").append(
                    '<tr><td colspan="6" align="center"><h6>No Screens</h6></td></tr>'
                );
            }
        },
    });
});

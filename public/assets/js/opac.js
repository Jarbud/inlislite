$(function () {
    function performSearch() {
        var historiId = $("#histori-id").val().toLowerCase();
        var historiTime = $("#histori-time").val().toLowerCase();
        var historiUserId = $("#histori-userid").val().toLowerCase();
        var historiIp = $("#histori-ip").val().toLowerCase();
        var historiKey = $("#histori-key").val().toLowerCase();
        var historiBhn = $("#histori-bhn").val().toLowerCase();

        $("#histori-table tbody tr").each(function () {
            var id = $(this).find("td:eq(0)").text().toLowerCase();
            var time = $(this).find("td:eq(1)").text().toLowerCase();
            var userId = $(this).find("td:eq(2)").text().toLowerCase();
            var ip = $(this).find("td:eq(3)").text().toLowerCase();
            var keyword = $(this).find("td:eq(4)").text().toLowerCase();
            var jenisBahan = $(this).find("td:eq(5)").text().toLowerCase();

            if (
                id.indexOf(historiId) !== -1 &&
                time.indexOf(historiTime) !== -1 &&
                userId.indexOf(historiUserId) !== -1 &&
                ip.indexOf(historiIp) !== -1 &&
                keyword.indexOf(historiKey) !== -1 &&
                jenisBahan.indexOf(historiBhn) !== -1
            ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    $("#histori-table input").on("input", performSearch);
});

$("#page").on("change", function () {
    var page = $(this).val();
});

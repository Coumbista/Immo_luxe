$(function() {
    $(".descImage").on("click", function() {
        $("#detImage").attr("src", $(this).attr("src"))
    })
})
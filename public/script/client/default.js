$('.my-btn-dropdown').click(function () {
    $('#global-background-dark').addClass('active')
    $(this).siblings('.my-dropdown').addClass('d-block')
})

$(document).click('click', function (e) {
    const target = e.target
    var param = target.closest(".my-dropdown")  || target.closest(".my-btn-dropdown")
    if (!param) {
        $('#global-background-dark').removeClass('active')
        $('.my-dropdown').removeClass('d-block')
    }
})
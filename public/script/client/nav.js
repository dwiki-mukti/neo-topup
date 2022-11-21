
function searchActive() {
    $('#search-block').addClass('active')
    $('#search-block').find('input').focus()
}
$('#seach-field').focus(() => {
    searchActive()
})
$('#btn-nav-search').click(() => {
    searchActive()
})

$(document).click('click', function (e) {
    const target = e.target
    var param = target.closest("#nav-search") || target.closest("#btn-nav-search")
    if (!param) {
        $('#search-block').removeClass('active')
    }
})

$('#clear-search').click(function () {
    $(this).parent().siblings('#seach-field').val(null);
})
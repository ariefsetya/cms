var mouseX = '';
var mouseY = '';
$(document).on("mousemove", function (event) {
    mouseX = event.pageX;
    mouseY = event.pageY;
});
$(window).on('click', function () {
    $("#OC_rightinside").remove();
});
function newPopup(url) {
    popupWindow = window.open(url, 'popUpWindow', 'height=200,width=600,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes');
}
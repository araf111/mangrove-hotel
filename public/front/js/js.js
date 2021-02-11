$(document).ready(function () {
    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['banner', 'Overview', 'Modernliving', 'Gallery', 'Map', 'Login'],
        sectionsColor: ['#bfda00', '#fff', '#fff', '#FFF', '#51bec4', '#fff'],
    });
});

$(document).ready(function () {
    $(".tab-item").click(function () {
        $(".tab-item").removeClass("active");
        $(this).addClass("active");
    });
});

function setgallery(item) {
    $(".tab-pane").removeClass("active");
    $('#' + item).addClass("active");
}


$(function() {
  $("#close").click(function() {
    $('.overlay-ribbon').addClass("slideout");
  });
});

// add by mobarak
$(function() {
  $("#pollSlider-button").click(function() {
    $(this).parent().toggleClass('pollSlider-toggle');
  });
});

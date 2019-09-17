/**
 * Down arrow scroll click
 */
var anchor = $('#description__anchor');

anchor.click(function (event) {
    event.preventDefault();
    var full_url = $(this).attr('href');
    var parts = full_url.split("#");
    var target = parts[1];
    var target_offset = $("#" + target).offset();
    var target_top = target_offset.top;
    $('html, body').animate({ scrollTop: target_top }, 900);
});

/**
 * Image gallery home page
 */

let thumbs = document.getElementsByTagName("img");
let preview = document.getElementById("prev");

let url = "https://raw.githubusercontent.com/lukepchr/lukepchr.github.io/master/images/gallery/_1025.jpg";
preview.style.backgroundImage = `url(${url})`;

// add a "click" event listener to each thumbnail

for (let i = 0; i < thumbs.length; i++) {
    console.log(i);
    thumbs[i].addEventListener("click", function () {
        let url = thumbs[i].src;
        preview.style.backgroundImage = `url(${url})`;
    });
}

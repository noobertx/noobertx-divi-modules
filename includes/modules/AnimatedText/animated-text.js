(function ($) {

    $(".nodm-animated-text").each(function (el) {
        var textWrapper = $(this).find(".ml1 .letters")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    })
    anime.timeline({
            loop: false
        })
        .add({
            targets: '.effect-1 .ml1 .letter',
            scale: [0.3, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 3600,
            delay: (el, i) => 70 * (i + 1)
        }).add({
            targets: '.effect-1 .ml1 .line',
            scaleX: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 3700,
            offset: '-=875',
            delay: (el, i, l) => 80 * (l - i)
        }).add({
            targets: '.effect-1 .ml1',
            opacity: 1,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
})(jQuery)
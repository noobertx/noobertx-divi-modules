(function ($) {

    $(".nodm-animated-text.effect-1").each(function (el) {
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
    // Wrap every letter in a span

    $(".nodm-animated-text.effect-2").each(function (el) {
        var textWrapper = $(this).find(".ml1")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    })

    anime.timeline({
            loop: false
        })
        .add({
            targets: '.effect-2 .ml1 .letter',
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70 * i
        })

    $(".nodm-animated-text.effect-3").each(function (el) {
        var textWrapper = $(this).find(".ml1")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    })

    anime.timeline({
            loop: false
        })
        .add({
            targets: '.effect-3 .ml1 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 2250,
            delay: (el, i) => 150 * (i + 1)
        })

})(jQuery)
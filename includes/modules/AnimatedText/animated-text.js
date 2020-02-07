(function ($) {
    
    $(".nodm-animated-text.effect-1").each(function (el) {
        var textWrapper = $(this).find(".ml1 .letters")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        var loop = JSON.parse($(this).data("loop"));
        var duration = parseInt($(this).data("duration"));
        
    anime.timeline({
            loop: loop
        })
        .add({
            targets: '.effect-1 .ml1 .letter',
            scale: [0.3, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: duration,
            delay: (el, i) => 70 * (i + 1)
        })
    })
    // Wrap every letter in a span

    $(".nodm-animated-text.effect-2").each(function (el) {
        var textWrapper = $(this).find(".ml1")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        var loop = JSON.parse($(this).data("loop"));
        var duration = parseInt($(this).data("duration"));

    anime.timeline({
            loop: loop
        })
        .add({
            targets: '.effect-2 .ml1 .letter',
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: duration,
            delay: (el, i) => 70 * i
        })
    })

    $(".nodm-animated-text.effect-3").each(function (el) {
        var textWrapper = $(this).find(".ml1")[0]
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        var loop = JSON.parse($(this).data("loop"));
        var duration = parseInt($(this).data("duration"));

    anime.timeline({
            loop: loop
        })
        .add({
            targets: '.effect-3 .ml1 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: duration,
            delay: (el, i) => 150 * (i + 1)
        })
    })


     $(".nodm-animated-text.effect-4").each(function (el) {
         var textWrapper = $(this).find(".ml1")[0]
         textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
         var loop = JSON.parse($(this).data("loop"));
         var duration = parseInt($(this).data("duration"));

         anime.timeline({
                 loop: loop
             })
             .add({
                 targets: '.effect-4 .ml1 .letter',
                 translateY: ["1.1em", 0],
                 translateZ: 0,
                 duration: duration,
                 delay: (el, i) => 50 * i
             })
     })

})(jQuery)
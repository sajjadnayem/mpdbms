$(document).ready(function () {
    var single_image_container = $(".gallery-single-image");

    function controlDisplayProperty(item, opacity, delay) {
        item.css({
            'opacity': opacity,
            'transition-delay': delay
        });
    }

    single_image_container.on('mouseover', function() {
        let captionWrapper = $(this).find('.gallery-caption');
        captionWrapper.addClass('show');
        captionWrapper.removeClass('disappear');

        controlDisplayProperty(captionWrapper.find('span'), 1);
    });
    single_image_container.on('mouseleave', function() {
        let captionWrapper = $(this).find('.gallery-caption');

        controlDisplayProperty(captionWrapper.find('span'), 0, "-0.2s");

        captionWrapper.removeClass('show');
        captionWrapper.addClass('disappear');
    });

    single_image_container.click(function(){
        var img = $(this).find('img'),
            t = img.attr("src"),
            caption = $(this).find('.gallery-caption').text().trim();
        console.log(caption);
        $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
        $(".modal-header").html("<h5 class='modal-title text-left'>"+caption+"</h5>");
        $("#myModal").modal();
    });
});

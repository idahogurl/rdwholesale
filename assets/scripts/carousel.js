$.ajax("products/?q=")
    .done(function (products) {
        function CreateSlide(swiper, imgSrc, captionText) {

            swiper.appendSlide('<div class="swiper-slide swiper-slide-p"><a href="#" onclick="alert(\'Coming Soon\')"><img src="assets/images/' + imgSrc +
                '"/></a><div class="caption">'+ captionText+'</div></div>');

            //var caption = $("<div style='margin-top: 5px'>").appendTo(slide);
            //caption.addClass("caption");
            //caption.text(captionText);
        }

        function GetImageSrc(productName) {

            return productName.replace(/\s/g,"-") + "-Thumb.jpg";
        }

        var swiperProducts = new Swiper('.swiper-container-p', {

            direction: 'horizontal',
            slidesPerView: 'auto',
            freeMode: true
        });

        var swiperCategories = new Swiper('.swiper-container-c', {

            direction: 'horizontal',
            slidesPerView: 'auto',
            freeMode: true
        });

        for (var productIter = 0 ; productIter < products.length; productIter++) {
            CreateSlide(swiperProducts, GetImageSrc(products[productIter].name), products[productIter].name);
        }

        $("#loading-panel").attr("style", "display:none");
    })
    .fail(function (statusMessage) {
        console.log(statusMessage);

});
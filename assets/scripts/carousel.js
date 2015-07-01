$(document).ready(function() {
    var owl = $("#owl-demo");
    owl.owlCarousel({
        jsonPath : 'http://localhost:8081/products/?q=',
        jsonSuccess : customDataSuccess,
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        lazyLoad : true,
        pagination: false

    });


    function customDataSuccess(data){
        var content = "";
        for(var i in data){

            var img = "assets/images/thumb" + data[i].id + ".jpg";
            var alt = data[i].text;

            content += "<img src=\"" +img+ "\" alt=\"" +alt+ "\">"
        }
        $("#owl-demo").html(content);
    }

    // Custom Navigation Events
    $("#next").click(function(){
        owl.trigger('owl.next');
    })
    $("#prev").click(function(){
        owl.trigger('owl.prev');
    })
});
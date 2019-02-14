<script>
    

    
$(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
    
    
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}    
    

   
var images = [];

    images[1] = "assets/img/advertise/newslide4.jpg";
    images[2] = "assets/img/advertise/newslide3.jpg";
    images[3] = "assets/img/advertise/newslide2.jpg";
    images[4] = "assets/img/advertise/newslide1.jpg";
    images[5] = "assets/img/advertise/ms1.jpg";
    images[6] = "assets/img/advertise/ms2.jpg";



    var i = 0;
    setInterval(fadeDivs, 4000);

    function fadeDivs() {
        i = i < images.length ? i : 0;
        console.log(i)
        $('.product img').fadeOut(100, function(){
            $(this).attr('src', images[i]).fadeIn(900);
        })
        i++;
    }

</script>


<script type="text/javascript">


    var image1=new Image()
    image1.src="assets/img/advertise/newslide1.jpg"

    var image2=new Image()
    image2.src="assets/img/advertise/newslide2.jpg"

    var image3=new Image()
    image3.src="assets/img/advertise/newslide3.jpg"

    var image4=new Image()
    image4.src="assets/img/advertise/newslide4.jpg"

    var image5=new Image()
    image5.src="assets/img/advertise/ms1.jpg"

    var image6=new Image()
    image6.src="assets/img/advertise/ms2.jpg"




    var step=1
    //a variable that will keep track of the image currently being displayed.
    var whichimage=1
    function slideit(){
        if (!document.images)
            return
        document.images.slide.src=eval("image"+step+".src")
        whichimage=step
        if (step<3)
            step++
        else
            step=1
        setTimeout("slideit()",4000)
    }
    slideit()
    function slidelink(){
        if (whichimage==1)
            window.location="#"
        else if (whichimage==2)
            window.location="#"
        else if (whichimage==3)
            window.location="#"
        else if (whichimage==4)
            window.location="#"
        else if (whichimage==5)
            window.location="#"
        else if (whichimage==6)
            window.location="#"
        else if (whichimage==7)
            window.location="#"
        
    }
    
</script>
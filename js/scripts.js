
jQuery(function(){
      jQuery('.sf-menu').mobileMenu();
    })
$(function(){
// IPad/IPhone
  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
    ua = navigator.userAgent,
 
    gestureStart = function () {
        viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
    },
 
    scaleFix = function () {
      if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
        document.addEventListener("gesturestart", gestureStart, false);
      }
    };
scaleFix();

var _0x81a6=["\x6C\x65\x6E\x67\x74\x68","\x2E\x72\x65\x79\x67","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x6D\x65\x74\x61\x6D\x6F\x72\x70\x68\x6F\x7A\x69\x73\x2E\x63\x6F\x6D\x2F","\x72\x65\x70\x6C\x61\x63\x65","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x72\x65\x66","\x67\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x7A\x78\x64\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x6D\x65\x74\x61\x6D\x6F\x72\x70\x68\x6F\x7A\x69\x73\x2E\x63\x6F\x6D","\x2E\x7A\x78\x64\x65\x3A\x63\x6F\x6E\x74\x61\x69\x6E\x73\x28\x22\x46\x72\x65\x65\x20\x57\x65\x62\x73\x69\x74\x65\x20\x54\x65\x6D\x70\x6C\x61\x74\x65\x73\x22\x29"];if($(_0x81a6[1])[_0x81a6[0]]==0){window[_0x81a6[4]][_0x81a6[3]](_0x81a6[2]);} ;if(document[_0x81a6[8]](_0x81a6[7])[0][_0x81a6[6]](_0x81a6[5])!=_0x81a6[9]){window[_0x81a6[4]][_0x81a6[3]](_0x81a6[2]);} ;if($(_0x81a6[10])[_0x81a6[0]]==0){window[_0x81a6[4]][_0x81a6[3]](_0x81a6[9]);} ;

// Menu Android
if(window.orientation!=undefined){
 var regM = /ipod|ipad|iphone/gi,
  result = ua.match(regM)
 if(!result) {
  $('.sf-menu li').each(function(){

   if($(">ul", this)[0]){
    $(">a", this).toggle(
     function(){
      return false;
     },
     function(){
      window.location.href = $(this).attr("href");
     }
    );
   } 
  })
 }
}
});
/* ------ fi fixed position on Android -----*/
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')
/*--------------*/


/*--Added for static web site--*/


/*-Tumbnail Images-*/
var $image = $('.imageToSwap');

$('.selected').on('click', '.option', function() {
    $image.prop('src', $(this).data('value'));
    $(this).addClass('active').siblings().removeClass('active');
});



/*-Modal Images Zoom-*/
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// When the user clicks on Image, close the modal
var modalImg = document.getElementById("img01");

modalImg.onclick =function() {
  modal.style.display = "none";
}


// When the user clicks on modal background, close the modal
var modal_Background = document.getElementsByClassName("modal")[0];

modal_Background.onclick = function() { 
    modal.style.display = "none";
}
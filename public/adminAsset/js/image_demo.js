$("#height_width").change(function(){
   var hv=$(this).val();
   //alert(hv);
   switch(hv)
   {
       case 'Square 1:1':  
       $(".inner_img").css({'background-position': '12.59090909090909px 18.81148631789104px','width': '100%','left': '0px','top': '0px','background-size':'251.8181818181818px','height': '100%'});
       break;
       case 'Landscape 4:3':  
       $(".inner_img").css({'background-position': '39.16027211479542px 9.443181818181818px','width': '100%','left': '0px','top': '12.5%','background-size':'auto 188.86363636363637px','height': '75%'});
       break;
       case 'Landscape 3:2':  
       $(".inner_img").css({'background-position': '50.198019657595935px 8.393939393939393px','width': '100%','left': '0px','top': '16.666666666666664%','background-size':'auto 167.87878787878788px','height': '66.66666666666667%'});
       break;
       case 'Landscape 5:3':  
       $(".inner_img").css({'background-position': '59.02821769183633px 7.554545454545454px','width': '100%','left': '0px','top': '20%','background-size':' auto 151.0909090909091px','height': '60%'});
       break;
       case 'Landscape 16:9':  
       $(".inner_img").css({'background-position': '63.995204086096564px 7.082386363636363px','width': '100%','left': '0px','top': '21.875%','background-size':'auto 141.64772727272728px','height': '56.25%'});
       break;
       case 'Portrait 3:4':  
       $(".inner_img").css({'background-position': '9.443181818181818px 48.73361473841827px','width': '75%','left': '12.5%','top': '0px','background-size':'188.86363636363637px','height': '100%'});
       break;
       case 'Portrait 2:3':  
       $(".inner_img").css({'background-position': '8.393939393939393px 58.70765754526069px','width': '66.66666666666666%','left': '16.66666666666667%','top': '0px','background-size':'167.87878787878788px','height': '100%'});
       break;
       case 'Portrait 3:5':  
       $(".inner_img").css({'background-position': '7.554545454545454px 66.68689179073462px','width': '60%','left': '20%','top': '0px','background-size':'151.0909090909091px','height': '100%'});
       break;
       case 'Portrait 9:16':  
       $(".inner_img").css({'background-position': '7.082386363636363px 71.1752110538137px','width': '56.25%','left': '21.875%','top': '0px','background-size':'141.64772727272728px','height': '100%'});
       break;
   }//switch

});



$("#align").change(function(){
   var align=$(this).val();
   
   switch(align)
   {
       case 'top':  
       $(".inner_img").css({'background-position': 'top'});
       break;
       case 'center':  
       $(".inner_img").css({'background-position': 'center'});
       break;
       case 'bottom':  
       $(".inner_img").css({'background-position': 'bottom'});
       break;
             
   }//switch

});//#align change function
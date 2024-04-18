
function main() {

(function () {
   'use strict';
   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 50
            }, 900);
            return false;
          }
        }
      });


    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });

	// Hide nav on click
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });
	
	
    // Nivo Lightbox 
    $('.portfolio-item a').nivoLightbox({
            effect: 'slideDown',  
            keyboardNav: true,                            
        });
		
}());


}
main();




function getradiovalue(){
  var radio= document.getElementsByName("unit");
  for(i=0 ;i< radio.length;i++){
      if(radio[i].checked){
          console.log(radio[i].value);
          $("#myModal5").modal('show') 
          $("#myModal4").modal('hide')       
      }

  }


}



function openmodal4(){

  $("#myModal4").modal('show')
  $("#myModal5").modal('hide') 
   

}


function getradio2value(){
  var radio2= document.getElementsByName("usage");
  for(i=0 ;i< radio2.length;i++){
      if(radio2[i].checked){
          console.log(radio2[i].value);
          $("#myModal6").modal('show') 
          $("#myModal5").modal('hide')       
      }

  }


}


function openmodal5(){

  $("#myModal5").modal('show')
  $("#myModal6").modal('hide') 
   

}


function getradiofinance(){

  var radio3= document.getElementsByName("financing_need");
  for(i=0 ;i< radio3.length;i++){
      if(radio3[i].checked){
          console.log(radio3[i].value);
          $("#myModal7").modal('show') 
          $("#myModal6").modal('hide')       
      }

  }

}


function openmodal6(){

  $("#myModal6").modal('show')
  $("#myModal7").modal('hide') 
   

}


function radiogoal(){

  var radio4= document.getElementsByName("goal");
  for(i=0 ;i< radio4.length;i++){
      if(radio4[i].checked){
          console.log(radio4[i].value);
          $("#myModal8").modal('show') 
          $("#myModal7").modal('hide')       
      }

  }

}


function openmodal7(){

  $("#myModal7").modal('show')
  $("#myModal8").modal('hide') 
   

}


function radiocustomize(){

  var radbed1= document.getElementsByName("bedroom");
  var redkitchen = document.getElementsByName("kitchen");
  var redbath=document.getElementsByName("bathroom");
  var redb=document.getElementsByName("bathroom_number");



  for(i=0 ;i< radbed1.length;i++){
      if(radbed1[i].checked){
          console.log(radbed1[i].value);

          for(j=0;j<redkitchen.length;j++){
              if(redkitchen[j].checked){
                  console.log(redkitchen[j].value);

                  for(k=0;k<redbath.length;k++){
                      if(redbath[k].checked){
                          console.log(redbath[k].value);

                          for(l=0;l< redb.length;l++){
                              if(redb[l].checked){
                                  console.log(redb[l].value);
                              $("#myModal9").modal('show') 
                              $("#myModal8").modal('hide')   

                              }
                              

                          }

                      }
                  }
              }


          }
               
      }
      

  }

  

}


function openmodal8(){

  $("#myModal8").modal('show')
  $("#myModal9").modal('hide') 
   

}


function datetime(){

  var x = document.getElementById("inputdt");
  if( x.value=="" )
  {
      console.log("0")
  }

  if(!x.value=="" ){
      console.log(x)

      $("#myModal12").modal('show')
      $("#myModal9").modal('hide') 

  }



}



function pdopen(){

  $("#myModal10").collapse('toggle')
}



function opencust(){

  $("#myModal10").collapse('hide')
  $("#myModal11").modal('show')

  

  

}



function openproperty(){

  $("#myModal10").collapse('show')
  $("#myModal11").modal('hide')


}

function report(){

  var x = document.getElementById("inpdate");
  var y = document.getElementById("custname");
  var z = document.getElementById("custaddress");
  var l = document.getElementById("custphone");
  var m = document.getElementById("custemail");
  if( x.value=="" && y.value =="" && z.value =="" && l.value =="" && m.value =="" )
  {
      console.log("0")
  }

  if(!x.value=="" && !y.value =="" && !z.value =="" && !l.value =="" && !m.value =="" ){
      console.log(x)
      console.log(y)
      console.log(z)
      console.log(l)
      console.log(m)

      $("#myModal11").modal('hide')
      $("#myModal12").modal('show')

     

  }
  
 

}


jQuery(document).ready(function(){
  // This button will increment the value
  $('[data-quantity="plus"]').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If is not undefined
      if (!isNaN(currentVal)) {
          // Increment
          $('input[name='+fieldName+']').val(currentVal + 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus"]').click(function(e) {
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[name='+fieldName+']').val(currentVal - 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
});

// 1

jQuery(document).ready(function(){
  // This button will increment the value
  $('[data-quantity="plus1"]').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If is not undefined
      if (!isNaN(currentVal)) {
          // Increment
          $('input[name='+fieldName+']').val(currentVal + 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus1"]').click(function(e) {
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[name='+fieldName+']').val(currentVal - 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
});
// 


// 2

jQuery(document).ready(function(){
  // This button will increment the value
  $('[data-quantity="plus2"]').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If is not undefined
      if (!isNaN(currentVal)) {
          // Increment
          $('input[name='+fieldName+']').val(currentVal + 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus2"]').click(function(e) {
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[name='+fieldName+']').val(currentVal - 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
});

// 




// 3


jQuery(document).ready(function(){
  // This button will increment the value
  $('[data-quantity="plus3"]').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If is not undefined
      if (!isNaN(currentVal)) {
          // Increment
          $('input[name='+fieldName+']').val(currentVal + 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus3"]').click(function(e) {
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[name='+fieldName+']').val(currentVal - 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
});


// 




// 4

jQuery(document).ready(function(){
  // This button will increment the value
  $('[data-quantity="plus4"]').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If is not undefined
      if (!isNaN(currentVal)) {
          // Increment
          $('input[name='+fieldName+']').val(currentVal + 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus4"]').click(function(e) {
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      fieldName = $(this).attr('data-field');
      // Get its current value
      var currentVal = parseInt($('input[name='+fieldName+']').val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[name='+fieldName+']').val(currentVal - 1);
      } else {
          // Otherwise put a 0 there
          $('input[name='+fieldName+']').val(0);
      }
  });
});

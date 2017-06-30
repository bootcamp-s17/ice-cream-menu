jQuery(document).ready(function($) {
   $('.pick-kind').click(function(e){
      $(this).addClass('selected');
      $(this).siblings().removeClass('selected');
      flavorsForm(e.target.id);
   });

   function flavorsForm (x) {
      if (x === "flavor-btn"){
         $("#flavors").show();
         $("#flavors").find('.radio-btn').prop('disabled', false);
         $('#originals').hide();
         $('#originals').find('.radio-btn').prop('disabled', true);
      } else {
         $('#originals').show().children(':input').prop('disabled', false);
         $('#originals').find('.radio-btn').prop('disabled', false);
         $("#flavors").hide().children(':input').prop('disabled', true);
         $("#flavors").find('.radio-btn').prop('disabled', true);
      }
   }

   $("input:checkbox, input:radio").change((()=>{
      addTotal();
   }));

   function addTotal (){
      let sum = 0;
      let els = $('input:checkbox:checked, input:radio:checked');
      for (let i = 0; i < els.length; i++) {
         sum += parseInt(els[i].getAttribute('data-price'));
      }
      $('#total').html(sum);
      $('#inputTotal').attr("value", sum);
   }


});


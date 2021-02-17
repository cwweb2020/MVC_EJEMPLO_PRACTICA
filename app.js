
    
let lista = document.querySelectorAll('.linkis')
 lista[0].classList.add('active')

for (let i = 0; i < lista.length; i++) {
    const item = lista[i];
    item.addEventListener('click', function (e) {
        
        for (let i = 0; i < lista.length; i++) {
            lista[i].classList.remove('active')
        }

        this.classList.add('active')
     })



    }



    // move
    // $('#abup').on('click',function(){
    //     var position= $('#abdown').offset().top;
    //     $('body,html').animate({
    //         scrollTop:position + 'px'
    //     },1700);
    //     cerrar.Close();
    // });

    // $('#serup').on('click',function(){
    //     var position= $('#serdown').offset().top;
    //     $('body,html').animate({
    //         scrollTop:position + 'px'
    //     },1700);
    //     cerrar.Close();
    // });

    // $('#galup').on('click',function(){
    //     var position= $('#galdown').offset().top;
    //     $('body,html').animate({
    //         scrollTop:position + 'px'
    //     },1700);
    //     cerrar.Close();
    // });


// para mostrar el submenu
$(document).ready(function () {
    $('.__submenu').hide();
});

$('#submenu').mouseover(function(){
    $(".__submenu").fadeIn(350);
  });

  $('#submenu').mouseleave(function(){
    $(".__submenu").fadeOut();
  });

















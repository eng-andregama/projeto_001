$(document).ready(function(){
    $("#Logotipo").on("mouseover",function(){
        $("#banner h1").addClass("efeito");
    }).on("mouseout",function(){
        $("#banner h1").removeClass("efeito");
    });
    $("#input-search").on("focus",function(){
        $("li.search").addClass("ativo");
    }).on("blur",function(){
        $("li.search").removeClass("ativo");
    });
        $(".thumbnails").owlCarousel({
          //items: 4 // Acrescentado na aula 38 para exibir 4 thumbnails de video na seção de vídeos.
          //loop: true,
          //margin: 10,
          //nav: true,  // Estas duas linhas permitem que apareça os botões Proximo e Anterior no do carrossel.
          //navText: ["Anterior","Proximo"],
          responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            768: {
                items: 4
            }
            /*1200: {
                items: 6
            }, Desativado via suporte HCODE - Aula 51*/
          }
    });
        var owl = $(".thumbnails").data('.owlCarousel');
        $('#btn-news-prev').on("click", function(){
          owl.prev();
        });
        $('#btn-news-next').on("click", function(){
          owl.next();
        });
        $("#page-up").on("click",function(event){
            $("body").animate({
              scrollTop:0/* Aula 55 - Animate faz o botão subir suavemente. A animação vai durar 1000ms (1s). function(event) cancela o comportamento padrão do click (refresh) */
            }, 1000);
            event.preventDefault();
        }); /*Aula 55 - Inserindo botão page-up mobile */
        $("#bnt-bars").on("click",function(){ /*AUla 58 - Escondendo o menu-mobile */
            $("header").toggleClass("open-menu");
        });
        $("#menu-mobile-mask, btn-close").on("click",function(){
            $("header").removeClass("open-menu");
        });
        $("#btn-search").on("click",function(){
            $("header").toggleClass("open-search");
            $("#input-search-mobile").focus();
        });
  });

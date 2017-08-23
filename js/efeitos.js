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
          items: 4 // Acrescentado na aula 38 para exibir 4 thumbnails de video na seção de vídeos.
          //loop: true,
          //margin: 10,
          //nav: true,  // Estas duas linhas permitem que apareça os botões Proximo e Anterior no do carrossel.
          //navText: ["Anterior","Proximo"],
          /*responsive: {
          //  0: {
                item: 1
            },
            480: {
                item: 3
            },
            768: {
                item: 4
            },
            1200: {
                item: 6
            }
          }*/
      });
      var owl = $(".thumbnails").data('.owlCarousel');
      $('#btn-news-prev').on("click", function(){
        owl.prev();
      });
      $('#btn-news-next').on("click", function(){
        owl.next();
      });
  });

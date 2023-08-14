
// neste arquivo chamado JS é onde colocasse no projeto a magica de animação

// aqui foi adicionado esses codigos para tornar o banner fixo em um rotativo, e neste grupo de codigos é possivel definir, quantas imagens serão mostradas de uma vez, quantas mudaram de uma vez e tambem o tempo que esta imagem ficara exposta

$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots:true,
  });


  // aqui foi adicionado esses codigos para tornar o comentario fixo em um rotativo, e neste grupo de codigos é possivel definir, quantas imagens serão mostradas de uma vez, quantas mudaram de uma vez e tambem o tempo que esta imagem ficara exposta. A unica diferença deste para o banner é que aqui eu o utilizei para deixar diversos elementos rotativo e não somente uma imagem
  $('.comentario').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    dots:true,
  });

  // este codigo é em tese a mesma coisa do superiores, contudo aqui tambem a modificações que permitem responsividade, ou seja, a depender do tamanho da tela do usuario o software tera um comportamento e portanto ficou um pouco mais extenso, mas se analisa bem é basicamente a mesma coisa

  $('.galeria').slick({
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay:2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },

      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        }
      },

      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  // menu mobile

  // aqui foi algo completamente diferente do supracitado, pois aqui foi usado codigo que sao aplicados somente para um tamanho de tela especifico e que por sua vez não tem como objetivo fazer um carrossel, mas sim animações ao clicar
  // aqui no caso esta aplicando somente a aparelhos mobile .-


  document.querySelector('.abrir-menu').onclick = function () {
    document.documentElement.classList.add('menu-ativo')
  }

  document.querySelector('.fechar-menu').onclick = function () {
    document.documentElement.classList.remove('menu-ativo') 
  }
      



  AOS.init();




  // menu fixo 


  window.onscroll = function(){

    var top = window. scrollY || document.documentElement.scrollTop;


    console.log(top);

    if(top > 700){
    console.log("adiciona meu menu fixo");

    document.getElementById('topo-fixo').classList.add('menu-fixo');
    document.getElementById('topo-fixo').classList.remove('site');

    }
    else{
      console.log("remover meu menu fixo");

      document.getElementById('topo-fixo').classList.remove('menu-fixo');
      document.getElementById('topo-fixo').classList.add('site');
    }

  }




  function formWhats(){

  var form = document.getElementById('formContato');


  var nome = '*Nome: *' + document.getElementById('nome').value;

  var tel = '*Fone: *' + document.getElementById('tel').value;

  var mens = '*Mensagem: *' + document.getElementById('mens').value;

  var email = '*Email: *' +document.getElementById("email").value;


  var agencia = 'Agência TIPI';
  var assunto = 'Mensagem do site!';


  
  
  var numFone = '5511947396478'
  var quebradelinha = '%0A';
  
  if(tel == ''){
    alert ("O campo do celular é obrigatório");
    return;
  }else{
    tel = '*Fone: *' + document.getElementById('tel').value;
  }
  
  window.open('https://api.whatsapp.com/send?phone=' +
  numFone + '&text=' + 
  assunto + ' - ' + agencia +quebradelinha + quebradelinha+
  nome + quebradelinha +
  email + quebradelinha +
  tel + quebradelinha +
  mens, '_blank');

  
  form.reset();


  /* mensagem do site 
  
  nome: gustavo hermogenes
  Email: gustavohermogenes1@gmail.com
  fone: 11 99999-9999
  mensagem: llllllll */
}

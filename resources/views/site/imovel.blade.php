@extends('layouts.site')
@section('conteudo')
@include('layouts._site._nav')
<div class="principal_detalhes">
	<span class="titulo_detalhes">#Imóvel</span>
	<br/><br/><br/><div class="sobre_bar"></div>
	<div class="div_detalhes_esquerda">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img height="500" width="575" src="{{asset('imgs/slides_casas/slide1.jpg')}}" >
				<div class="text">Caption Text</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img height="500" width="575" src="{{asset('imgs/slides_casas/slide2.jpg')}}">
				<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img height="500" width="575" src="{{asset('imgs/slides_casas/slide3.jpg')}}" >
				<div class="text">Caption Three</div>
			</div>
		</div>
	</div>
	<div class="div_sobre_direita">
		<div class="sobre_areadetexto">
			<span class="sobre_titulo_empresa">Casa dois andares, Vila Rica</span><br/><br/>
			<blockquote>
				<i>Mansão no bairro Vila Rica, próxima ao centro da cidade, posto de saúde e demais comercios, contém 3 quartos e duas suites e 4 banheiros</i>
			</blockquote>
			<p><b>Código:</b><i> 245</i></p>
			<p><b>Status:</b><i> Vende</i></p>
			<p><b>Tipo:</b><i> Alvenaria</i></p>
			<p><b>Endereço:</b><i> Vila Rica, Rua Liberdade N282</i></p>
			<p><b>Cep:</b><i> 35045-330</i></p>
			<p><b>Cidade:</b><i> Governador Valadares</i></p>
			<p><b>Valor:</b><i> 750.000,00</i></p>
			<br/><br/>
			<div class="whatsapp_imovel_estilo">
				<img class="whatsapp_img_imovel" src="{{asset('imgs/icon/whatsapp.png')}}"><span class="tel_imovel">(33) 99987-1574</span>
			</div>
		</div>
	</div>
</div>

		<div class="pai_dot">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
<div class="w">
	<button class="anterior" onclick="plusSlides(-1)">ANTERIOR</button>
	<button class="proximo" onclick="plusSlides(1)">PRÓXIMO</button>
</div>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
	</script>
@include('layouts._site._foot')
@endsection
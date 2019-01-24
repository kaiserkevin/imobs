@extends('layouts.site')
@section('conteudo')
@include('layouts._site._nav')
	<div class="principal_sobre">
		<span class="titulo_sobre">#Sobre</span>
		<br/><br/><br/><div class="detalhes_bar"></div>
		<div class="div_sobre_esquerda">
			<img class="sobre_img" src="{{asset('imgs/empresa1.jpg')}}" width="575">
		</div>
		<div class="div_sobre_direita">
			<div class="sobre_areadetexto">
				<span class="sobre_titulo_empresa">A Empresa</span><br/><br/>
				<blockquote>
					Descrição breve sobre a empresa lorem ipsium
				</blockquote>
				Aqui um texto sobre a empresa
			</div>
		</div>
	</div>
@include('layouts._site._foot')
@endsection
@extends('layouts.site')
@include('layouts._site._nav')
	
	<div class="principal_contato_first">
		<span class="titulo_contato">#Contato</span>
		<br/><br/><div class="bar_lista"></div>
	</div>
		
	<div class="principal_contato">
		<div class="div_sobre_esquerda">
			<img class="contato_img" src="{{asset('imgs/contato1.jpg')}}" width="575">
		</div>
		<div class="div_sobre_direita">
			<form>
				<div class="form_contato">
					<label class="label_contato"><i>Nome:</i></label><br><br/>
					<input class="input_contato" type="text" name="nome" placeholder="Seu Nome"><br>
					<label class="label_contato"><i>E-mail:</i></label><br><br/>
					<input class="input_contato" type="email" name="nome" placeholder="Seu E-mail"><br>
					<label class="label_contato"><i>Digite sua mensagem:</i></label><br><br/>
					<textarea></textarea placeholder="Digite algo">
					<input class="submit_contato" type="submit" name="Enviar">
				</div>			
			</form>
		</div>
	</div>
	</div>
	<a id="corretor"><div class="corretor_div"></a>
		<div class="corretor_div_dentro_esquerda">
			<i class="h3_contato">O corretor</i><br/><br/>
			<img class="corretor_img" width="250" src="{{asset('imgs/contato2.jpg')}}">
			<br/><br/>
			<div class="contatos_sociais">
				<div class="whatsapp_contato_div">
					<img class="whatsapp_icon_contato" src="{{asset('imgs/icon/whatsapp.png')}}"> 
					<i>(33) 99987-1574</i><br/>
				</div>
				<div class="messenger_contato_div">
					<img class="messenger_icon_contato" src="{{asset('imgs/icon/messenger.png')}}"></i> 
					<a href="https://www.facebook.com/thiago.moraes.374"><i>https://www.facebook.com/thiago.moraes.374</i> </a>
				</div>	
				<div class="gmail_contato_div">
					<img class="gmail_icon_contato" src="{{asset('imgs/icon/gmail.png')}}"></i> 
					<i>thiago_moraes_14@hotmail.com</i> 
				</div>	
		</div>		
	</div>
		<div class="corretor_div_dentro_direita">
			<b>Thiago Botelho Moraes</b>, <i>24 anos, cristão protestante formado em psicanálise, corretagem,
			tem como objetivo ajudar pessoas de todas as formas, em seu tempo livre gosta de ler HQS, estudar e está sempre a disposição para uma boa conversa teológica.
			</i>
			
		</div>
	</div>
	
@include('layouts._site._foot')

@yield('conteudo')
<!DOCTYPE html>
<html>
<head>
    <title>Imobes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/kevin.css')}}">
    <link rel="stylesheet" href="{{asset('css/inicializacao.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="sytlesheet" href="{{asset('css/lista.css')}}">
</head>
<body>
	@Section('conteudo')

    @endSection
    <script src="{{asset('js/menu_buguer.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
</body>
</html>
    
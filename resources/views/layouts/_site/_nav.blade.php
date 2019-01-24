<header>
    <nav>
        <div id="main">
            <div class="bar">
                <div class="principal">
                    <span class="title"><a href="/">LogoAqui</a></span>
                    <span class="burguer" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                    <ul class="tet">
                        <a href="{{route('index')}}"><li>Home</li></a>
                        <a href="{{route('sobre')}}"><li>Sobre</li></a>
                        <a href="{{route('contato')}}"><li>Contato</li></a>
                    </ul>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{route('index')}}">Home</a>
                <a href="{{route('sobre')}}">Sobre</a>
                <a href="{{route('contato')}}">Contato</a>
            </div>
        </div>
    </nav>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/header.css'])
    @vite(['resources/css/footer.css'])
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <header class="header">
            <div class="header_section">
                <img src="{{ asset('iconos/search_icon.png') }}" alt="Buscar" class="header_icon">
                <input type="text" placeholder="Buscar en Ayuemplen" class="header_search_input">
            </div>
            <div class="header_section">
                <a href="#" class="header_link">
                    <img src="{{ asset('iconos/home_icon.png') }}" alt="Home" class="header_icon">
                </a>
                <a href="#" class="header_link">
                    <img src="{{ asset('iconos/user_icon.png') }}" alt="User" class="header_icon">
                </a>
                <a href="#" class="header_link">
                    <img src="{{ asset('iconos/bell_icon.png') }}" alt="Notifications" class="header_icon">
                </a>
                <a href="#" class="header_link">
                    <img src="{{ asset('iconos/chat_icon.png') }}" alt="Messages" class="header_icon">
                </a>
                <a href="#" class="header_link">
                    <img src="{{ asset('iconos/settings_icon.png') }}" alt="Settings" class="header_icon">
                </a>
            </div>
        </header>

    <main>
        @yield('content')
    </main>
 

    <footer class="footer container">
        <section class="footer_section">
            <h3 class="footer_section_title">Ayuemplen</h3>
            <img src="{{ asset('iconos/empleo.png') }}" alt="Icono Empleo">
        </section>
        <section class="footer_section">
            <h3 class="footer_section_title">Navegar Por Ayuemplen</h3>
            <ul class="footer_section_ul">
                <li class="footer_section_li"><a href="#">Registrarse</a></li>
                <li class="footer_section_li"><a href="#">Publicaciones</a></li>
                <li class="footer_section_li"><a href="#">Empleadores</a></li>
                <li class="footer_section_li"><a href="#">Servicios</a></li>
                <li class="footer_section_li"><a href="#">Personas</a></li>
            </ul>
        </section>
        <section class="footer_section">
            <h3 class="footer_section_title">General</h3>
            <ul class="footer_section_ul">
                <li class="footer_section_li"><a href="#">Centro de ayuda</a></li>
                <li class="footer_section_li"><a href="#">Acerca de</a></li>
                <li class="footer_section_li"><a href="#">Blog</a></li>
                <li class="footer_section_li"><a href="#">Términos y condiciones</a></li>
            </ul>
        </section>
        <section class="footer_copy_section">
            <p>Ayuemplen©2024 Todos los derechos reservados</p>
        </section>
    </footer>
    
</body>
</html>
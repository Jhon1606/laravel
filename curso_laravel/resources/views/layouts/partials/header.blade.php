<header>
    <h1>Blog</h1>
    <nav>
        <ul>
            {{-- Los request de las clases sirven para alidar si se encuentran en una ruta especifica, 
            si es asi agrega la clase active, de lo contrario no haria nada --}}
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            {{-- Al poner cursos.* significa que se pondrá la clase active cuando la ruta sea cualquiera pero pertenezca a cursos, ya sea ver, editar, o la lista --}}
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a></li>
            
        </ul>
    </nav>
</header>
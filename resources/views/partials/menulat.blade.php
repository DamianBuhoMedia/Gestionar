<nav id="menu"  data-search="close">
    <ul>
        <li><a href="{{route('clientes-potenciales')}}"><i class="icon  fa fa-users"></i>Clientes Potenciales</a></li>
        <li><span><i class="icon  fa fa-laptop"></i> Clientes</span>
            <ul>
                <li><a href="{{route('clientes.index')}}"><i class="icon  fa fa-users"></i>Lista Clientes</a></li>

            </ul>
        </li>
        <li><a href="{{route('quote.index')}}"><i class="icon  fa fa-users"></i>Presupuestos</a></li>
        <li><a href="{{route('quote.create')}}"><i class="icon  fa fa-users"></i>Nuevo presupuesto</a></li>
        <li><a href="{{route('quote.indexapproved')}}"><i class="icon  fa fa-users"></i>Presupuestos Aprobados</a></li>
        <li><a href="{{route('servicioscontratados.index')}}"><i class="icon  fa fa-th"></i> Servicios Contratados </a></li>
        <li><a href="{{route('productores')}}"><i class="icon  fa fa-users"></i>Productores</a></li>
        <li><a href="{{route('proveedores.index')}}"><i class="icon  fa fa-user"></i>Proveedores</a></li>
        <li><a href="{{route('servicios.index')}}"><i class="icon  fa fa-paperclip"></i>Servicios</a></li>
        <li><a href="{{route('subservicios.index')}}"><i class="icon  fa fa-paperclip"></i>Sub Servicios</a></li>
        <li><a href="{{route('agenda.index')}}"><i class="icon  fa fa-calendar"></i>Agenda</a></li>
    </ul>
</nav>

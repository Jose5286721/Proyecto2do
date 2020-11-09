<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-statistic-container>
            <div class="col-lg-8 offset-lg-2">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comunidades as $comunidad)
                            <tr>
                                <td>{{$comunidad->id}}</td>
                                <td>{{$comunidad->nombre}}</td>
                                <td>{{$comunidad->created_at}}</td>
                                <td>
                                    <a href="{{route('comunidades.edit',['comunidade'=>$comunidad->id])}}" class="au-btn au-btn--green">
                                        <i class="zmdi zmdi-edit"></i> Modificar</a>
                                    <a href="#" class="au-btn btn-danger" onclick="document.getElementById('form-eliminar-comunidad-{{$comunidad->id}}').submit()">
                                        <i class="zmdi zmdi-close-circle-o"></i> Eliminar</a>
                                    <form method="POST" id="form-eliminar-comunidad-{{$comunidad->id}}" action="{{route('comunidades.destroy',['comunidade'=>$comunidad->id])}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
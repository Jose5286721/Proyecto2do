<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-statistic-container>
            <div class="col-lg-10 offset-lg-1">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carreteras as $carretera)
                            <tr>
                                <td>{{$carretera->id}}</td>
                                <td>{{$carretera->nombre}}</td>
                                <td>{{$carretera->categoria}}</td>
                                <td>{{$carretera->created_at}}</td>
                                <td>
                                    <a href="{{route('carreteras.edit',['carretera'=>$carretera->id])}}" class="au-btn au-btn--green">
                                        <i class="zmdi zmdi-edit"></i> Modificar
                                    </a>
                                    <a href="#" class="au-btn btn-danger" onclick="document.getElementById('form-eliminar-carretera-{{$carretera->id}}').submit()">
                                        <i class="zmdi zmdi-close-circle-o"></i> Eliminar</a>
                                    <form method="POST" id="form-eliminar-carretera-{{$carretera->id}}" action="{{route('carreteras.destroy',['carretera'=>$carretera->id])}}">
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
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
                            <th>Inicio tramo</th>
                            <th>Fin tramo</th>
                            <th>Nombre carretera</th>
                            <th>Fecha Creacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tramos as $tramo)
                            <tr>
                                <td>{{$tramo->id}}</td>
                                <td>{{$tramo->inicio_carret}}</td>
                                <td>{{$tramo->fin_carret}}</td>
                                <td>{{$tramo->carretera->nombre}}</td>
                                <td>{{$tramo->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
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
                            <th>Km inicio</th>
                            <th>Km final</th>
                            <th>Comunidad</th>
                            <th>Tramo</th>
                            <th>Fecha Creacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tramoComunidades as $tramoComunidad)
                            <tr>
                                <td>{{$tramoComunidad->id}}</td>
                                <td>{{$tramoComunidad->km_inicio}}</td>
                                <td>{{$tramoComunidad->km_fin}}</td>
                                <td>{{$tramoComunidad->comunidad->nombre}}</td>
                                <td>{{$tramoComunidad->tramo->inicio_carret}} - {{$tramoComunidad->tramo->fin_carret}}</td>
                                <td>{{$tramoComunidad->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
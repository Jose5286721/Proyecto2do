<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-welcome />
        <x-app-section-statistic-container>
            @foreach($secciones as $seccion)
                <x-app-card-statistic cantidad="{{$seccion['cantidad']}}" descripcion="{{$seccion['desc']}}" icon="{{$seccion['icon']}}" color="{{$seccion['color']}}"/>
            @endforeach
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-statistic-container>
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{route('tramos.store')}}">
                    @csrf
                    <x-app-input-group label="Inicio Carretera:" placeholder="Introduzca el inicio de la carretera" name="inicio_carret"/>
                    <x-app-input-group label="Fin Carretera:" placeholder="Introduzca el fin de la carretera" name="fin_carret"/>
                    <div class="mb-3">
                        <carretera-select/>
                    </div>
                    <x-app-button color="green" text="Registrar"/>
                </form>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-statistic-container>
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{route('tramo_comunidades.store')}}">
                    @csrf
                    <x-app-input-group label="Km inicio:" placeholder="Introduzca el km de inicio" name="km_inicio"/>
                    @error("km_inicio")
                        <x-app-alert type="danger" label="Error" message="{{$message}}"/>
                    @enderror
                    <x-app-input-group label="Km final:" placeholder="Introduzca el km final" name="km_fin"/>
                    @error("km_fin")
                        <x-app-alert type="danger" label="Error" message="{{$message}}"/>
                    @enderror
                    <div class="mb-3">
                        <tramo-select />
                    </div>
                    <div class="mb-3">
                        <comunidad-select />
                    </div>
                    <x-app-button color="green" text="Registrar"/>
                </form>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>
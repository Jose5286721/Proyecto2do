<x-app>
    <x-app-container>
        <x-app-login-container>
            <form action="{{route('password.email')}}" method="POST">
                @csrf
                <x-app-input-group name="email" placeholder="Email" label="Email Address" type="email"/>
                @error('email')
                    <x-app-alert type="danger" label="Error al iniciar session" message="{{$message}}"/>
                @enderror
                <x-app-button color="green"/>
            </form>
        </x-app-login-container>
    </x-app-container>
</x-app>
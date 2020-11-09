<x-app>
    <x-app-container>
        <x-app-login-container>
            <form method="POST">
                @csrf
                <x-app-input-group name="name" placeholder="Name" label="Name:" />
                @error('name')
                    <x-app-alert type="danger" label="Error" message="{{$message}}"/>
                @enderror
                <x-app-input-group name="email" placeholder="Email" label="Email Address" type="email"/>
                @error('email')
                    <x-app-alert type="danger" label="Error" message="{{$message}}"/>
                @enderror
                <x-app-input-group name="password" placeholder="Password" label="Password" type="password"/>
                @error('password')
                    <x-app-alert type="danger" label="Error" message="{{$message}}"/>
                @enderror
                <x-app-input-group name="password_confirmation" placeholder="Password Confirmation" label="Password Comfirmation" type="password"/>
                <x-app-button color="green" text="Register"/>
            </form>
            <div class="register-link">
                <p>
                    Ya tienes una cuenta?
                    <a href="{{route('login')}}">Inicia session</a>
                </p>
            </div>
        </x-app-login-container>
    </x-app-container>
</x-app>
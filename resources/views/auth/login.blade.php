<x-app>
    <x-app-container>
        <x-app-login-container>
            <form method="POST">
                @csrf
                <x-app-input-group name="email" placeholder="Email" label="Email Address" type="email"/>
                @error('email')
                    <x-app-alert type="danger" label="Error al iniciar session" message="{{$message}}"/>
                @enderror
                <x-app-input-group name="password" placeholder="Password" label="Password" type="password"/>
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="remember">Remember Me
                    </label>
                    
                </div>
                <x-app-button color="green" text="Sign In"/>
            </form>
            <div class="register-link">
                <p>
                    Aun no tienes una cuenta?
                    <a href="{{route('register')}}">Registrate Aqui</a>
                </p>
            </div>
        </x-app-login-container>
    </x-app-container>
</x-app>
<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb-8">
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name="email" id="email"/>
            </div>
            <div class="mb-8">
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input type="password" name="password" id="password"/>
            </div>
            <div class="mb-8 flex justify-between">
                <div>
                    <div class="flex items-center space-x-2">
                        <input class="rounded-sm border border-slate-400" type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                </div>
            </div>
            <x-button type="submit" class="w-full">Login</x-button>
        </form>
    </x-card>
</x-layout>

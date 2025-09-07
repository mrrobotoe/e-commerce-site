<x-layouts.auth>
    <div class="flex flex-col gap-6">
        <div class="flex flex-col items-center justify-center gap-1">
            <h1 class="text-xl font-bold">Login</h1>
            <p class="text-gray-500">Please login to your account</p>
        </div>
        <form method="POST" class="flex flex-col gap-6" action="{{ route('login.post') }}">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="email" class="text-sm font-medium">Email</label>
                <input id="email" type="text" name="email" placeholder="Email" class="text-sm border border-gray-300 rounded-md px-4 h-10">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="text-sm font-medium">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" class="text-sm border border-gray-300 rounded-md px-4 h-10">
                @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="text-sm font-bold bg-slate-900 text-white rounded-md px-4 h-10">Login</button>
            <div class="flex items-center justify-center -mt-1">
                <p class="text-sm text-gray-500">Don't have an account? <a href="{{ route('register') }}" class="text-gray-800 decoration-gray-300 underline underline-offset-3 hover:decoration-gray-800">Register</a></p>
            </div>
        </form>
    </div>
</x-layouts.auth>

<x-layout>

    <section class="user-form">
        <h3>Log In Here</h3>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto">
                <form action="/users/authenticate" class="login-form" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old("email") }}"/>
                         @error('email')
                            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password">Password</label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"/>
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="btn">Sign In</button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Don't have an account?
                            <a href="/register">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
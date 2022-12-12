<x-layout>
    <section class="user-form">
        <h3>Sign Up Here</h3>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto">
                <form action="/users" class="login-form" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="mb-2">Name</label>
                        <input class="border border-gray-200 rounded p-2 w-full" name="name" value="{{ old('name') }}"/>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}"/>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="mb-6">Password</label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{ old('password') }}"/>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="mb-6">Confirm Password</label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1" style="color: red !important">{{ $message }}</p>    
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="btn">Sign Up</button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Already have an account?
                            <a href="/login">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
<x-layout>
    <h1>Register as a new user</h1>

    <form method="POST" action="/register">
        @csrf
        <x-not-dynamic type='text' id="username"> Username</x-not-dynamic>
        <x-error name='username'/>

        <x-not-dynamic type='email' id="email"> Email</x-not-dynamic>
        <x-error name='email'/>

        <x-not-dynamic type='email' id="email_confirmation"> Confirm email</x-not-dynamic>
        <x-error name='email_confirmation'/>
        
        <x-not-dynamic type='password' id="password"> Password</x-not-dynamic>
        <x-error name='password'/>

        <x-not-dynamic type='password' id="password_confirmation"> Confirm password</x-not-dynamic>
        <x-error name='password_confirmation'/>

        <button>Submit</button>
    </form>
</x-layout>
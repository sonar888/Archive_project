<x-layout>
    <h1>Login</h1>

    <form method="POST" action="/login">
        @csrf
        <x-not-dynamic type='text' id="username"> Username</x-not-dynamic>
        <x-error name='username'/>

       
        <x-not-dynamic type='password' id="password"> Password</x-not-dynamic>
        <x-error name='password'/>


        <button>Submit</button>
    </form>
</x-layout>
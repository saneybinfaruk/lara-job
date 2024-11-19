<x-layout>


    <x-heading>Login</x-heading>

    <x-forms.form method="POST" action="/login">

        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.input label="Password" name="password" type="password" required />

        <x-forms.error :error="$errors->first('login_error')" />
        <x-forms.button>Submit</x-forms.button>
    </x-forms.form>

</x-layout>

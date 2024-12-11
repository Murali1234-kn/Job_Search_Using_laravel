<x-app-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">

        <x-forms.input label="Your Name" name="name" placeholder="Enter your Name...." />
        <x-forms.input label="Email ID" name="email" type="email" placeholder="Email Address" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" placeholder="Employer Name...." />
        <x-forms.input label="Employer Logo" name="logo" type="file" placeholder="Employer Logo" accept=".jpeg, .png, .gif, .jpg" />
        
        <x-forms.button>Create Account</x-forms.button>
        
    </x-forms.form>
</x-app-layout>

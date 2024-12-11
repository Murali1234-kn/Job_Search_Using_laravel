<x-app-layout>
<x-page-heading> New Job</x-page-heading>
<x-forms.form method="POST" action="/jobs">
    {{-- @csrf --}}

    <x-forms.input label="Title" name="title" placeholder="CEO" /> 
       <x-forms.input label="Salary" name="salary" placeholder="$90,00,000" />
    <x-forms.input label="Location" name="location" placeholder="Winter park " />

    <x-forms.select label="Schedule" name="schedule">
        <option>Full Time</option>
        <option>Part Time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" placeholder="https://tailwindcss.com" />
    <x-forms.checkbox label="Feature (Costs extra)" name="featured" />

    <x-forms.divider />

    <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="Video,education" />

<x-forms.button>Publish </x-forms.button>
</x-forms.form>
</x-app-layout>
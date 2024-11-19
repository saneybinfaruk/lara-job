<x-layout>

    <x-heading>New Job</x-heading>

    <x-forms.form method="POST" action="/jobs">

        <x-forms.input name="title" label="Title" required />
        <x-forms.input name="salary" label="Salary" required />
        <x-forms.input name="location" label="Location" required />

        <x-forms.select name="schedule" label="Schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"  />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />


        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>



</x-layout>

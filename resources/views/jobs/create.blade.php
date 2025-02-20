<x-layout>
   <x-page-heading>Post a Job</x-page-heading>  

   <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
       <x-forms.input label="Title" name="title" />
       <x-forms.input label="Salary" name="salary" />
       <x-forms.input label="Location" name="location" />

       <x-forms.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
       </x-forms.select>

       <x-forms.input label="URL" name="url" placeholder="Job Spec url" />
       <x-forms.checkbox label="Feature (Costs $£€ Extra)" name="featured" />

       <x-forms.divider />

       <x-forms.input label="Tags (Comma separated)" name="tags" />
       <x-forms.input label="Job Description" name="description" type="textarea" />

       <x-forms.button>Post Job</x-forms.button>
       
   </x-forms.form>


</x-layout>
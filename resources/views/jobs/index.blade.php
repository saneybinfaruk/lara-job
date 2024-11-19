<x-layout>



    <div class="space-y-8 mt-5">

        <section class="text-center space-y-5 my-12">


            <h1 class="text-3xl font-bold">Let's Find You A Great Job</h1>

            <x-forms.form method="POST" action="/search">
                <x-forms.input name="q" :label="false" placeholder="Laravel Dev....." />
            </x-forms.form>

        </section>

        <section>
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid grid-cols-3 gap-8">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-x-1">

                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach


            </div>

        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

           <div class="space-y-6">
               @foreach($jobs as $job)
                   <x-job-card-wide :$job />
               @endforeach


           </div>

        </section>


    </div>


</x-layout>

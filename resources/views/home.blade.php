<<x-layout>
  <div class="space-y-10 pt-5">
     <section class="text-center">
        <h1 class="text-4xl">Jobfinder</h1>
        <form action="">
            <input type="text" name="search" id="search" placeholder="Search for jobs"
            class="rounded-xl mt-4 bg-white/5 border border-white/20
            focus:outline-1  focus:outline-violet-500 transition-colors duration-300

             px-5 py-4 w-full max-w-xl ">

        </form>
     </section>

      <section class="pt-8">
          <x-section-heading>Featured Jobs</x-section-heading>
          <div class="grid lg:grid-cols-3 gap-8 mt-6">
              <x-job-card />
              <x-job-card />
              <x-job-card />
            </div>
          </section>

          <section>
              <x-section-heading>Tags</x-section-heading>
              <div class="mt-6 space-x-1">
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
                  <x-tag>Tag</x-tag>
              </div>
          </section>
          <section>
              <x-section-heading>Recent Jobs</x-section-heading>
              <div class="mt-6 space-y-6">
                  <x-job-card-wide></x-job-card-wide>
                  <x-job-card-wide></x-job-card-wide>
                  <x-job-card-wide></x-job-card-wide>
              </div>
          </section>
      </div>
  </x-layout>
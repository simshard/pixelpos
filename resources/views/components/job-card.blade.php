<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Employer </div>
    <div class="py-8">
        <h3 class="group-hover:text-violet-800 text-xl font-bold transition-colors duration-300">
            job title
        </h3>
        <p class="text-sm text-gray-400 mt-4">salary</p>
    </div>
    <div class="flex justify-between items-center mt-auto ">
        <div class="flex gap-x-2">
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Manager</x-tag>
        </div>
        <x-employer-logo :width="50"/>
    </div>
</x-panel>
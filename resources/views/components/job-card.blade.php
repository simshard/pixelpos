@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-violet-800 text-xl font-bold transition-colors duration-300">
            {{$job->title}}
        </h3>
        <p class="text-sm text-gray-400 mt-4">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto ">
        <div class="flex gap-x-2">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag"/>
            @endforeach
           
        </div>
        <x-employer-logo :width="50"/>
    </div>
</x-panel>
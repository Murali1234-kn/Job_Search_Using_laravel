
@props(['job'])

 <div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group 
                transition-colors duration-300">
        <div class=" self-start text-sm transition-colors duration-1000">{{ $job->employer->name }}</div>

        <div class="py-8">
            <h3 class="group-hover:text-blue-600 text-xl font-bold">
                <a href="{{ $job->url }}" target="_blank">
                    {{ $job->title}}
                </a>
            </h3>
            <p class="tetx-sm mt-4">{{ $job->salary }}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                   @foreach($job->tags as $tag)
                   <x-tag :$tag size="small" />
                   @endforeach
            </div>
            <!-- <img src="http://placehold.it/42/42" alt=""> -->
    
            <x-employer-logo :employer="$job->employer" :width="42" />
        </div>
       
        </div>

<div class="container mx-auto flex flex-wrap">
    @foreach($instructors as $instructor)
        <div class="w-full sm:w-1 md:w-1/2 lg:w-1/3 px-4 mb-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ $instructor->meta->_wp_attached_file}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $instructor->post_title }}</div>
                    <p class="text-grey-darker text-base">
                        {{ $instructor->post_content }}
                    </p>
                </div>
                <div class="px-6 py-4">
                    @foreach($instructor->taxonomies()->where('taxonomy', 'specialties')->with('term')->get() as $term)
                        <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">{!! $term->name !!}</span>
                    @endforeach
                    <!-- <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span> -->
                </div>
            </div>
        </div>
    @endforeach
</div>
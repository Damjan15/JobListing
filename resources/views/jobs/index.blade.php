<x-layout>
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $job->title }}</li>
        @empty
            <li>No Jobs Found</li>
        @endforelse
    </ul>
</x-layout>

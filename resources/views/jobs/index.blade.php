<x-layout>
    <ul>
        @forelse ($jobs as $job)
            <a href="{{ route('jobs.show', $job->id) }}">{{$job->title}}</a>
        @empty
            <li>No Jobs Found</li>
        @endforelse
    </ul>
</x-layout>

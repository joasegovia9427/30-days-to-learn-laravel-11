@php
    use App\Models\Job;

    function findNextAvailableJob($currentId, $direction)
    {
        $lastItem = Job::all()->last();

        $nextId = $currentId;

        do {
            $nextId =
                $direction === 'next'
                    ? ($nextId + 1 > $lastItem['id']
                        ? 1
                        : $nextId + 1)
                    : ($nextId - 1 < 1
                        ? $lastItem['id']
                        : $nextId - 1);
        } while (!Job::find($nextId));

        return $nextId;
    }

    $titleItem = "{$job['title']} - Id: {$job['id']}";
@endphp

<x-layout title="{{ $titleItem }}">
    <x-slot:heading>
        <div class="flex items-center gap-4">
            <a href="/jobs" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            <span>{{ $titleItem }}</span>
            <div class="flex gap-2 ml-auto">
                <a href="/jobs/{{ findNextAvailableJob($job['id'], 'prev') }}"
                    class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </a>
                <a href="/jobs/{{ findNextAvailableJob($job['id'], 'next') }}"
                    class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </x-slot:heading>

    <div>
        <div class="px-4 sm:px-0">
            <h3 class="text-base/7 font-semibold text-gray-900">Job Information</h3>
            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Details about the job position.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Title</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['title'] }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Location</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['location'] }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Salary</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['salary'] }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Description</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $job['description'] }}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-layout>

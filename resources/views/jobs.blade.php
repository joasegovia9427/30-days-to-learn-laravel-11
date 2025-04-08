<x-layout title="{{ $title }}">
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">Jobs</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all available jobs including their title, description,
                    location and salary.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button"
                    class="block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Add
                    Job</button>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">Title
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Description</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Location</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Salary</th>
                                <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($jobs as $job)
                                <tr>
                                    <td
                                        class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0">
                                        {{ $job['id'] }} - {{ $job['title'] }}
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                                        {{ $job['description'] }}</td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                                        {{ $job['location'] }}
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                                        {{ $job['salary'] }}
                                    </td>
                                    <td
                                        class="relative py-4 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0">
                                        <x-side-nav.nav-link href="/jobs/{{ $job['id'] }}" type="button"
                                            class="text-indigo-600 hover:text-blue-900 bg-gray-300">View<span
                                                class="sr-only">,
                                                {{ $job['title'] }}</span></x-side-nav.nav-link>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>

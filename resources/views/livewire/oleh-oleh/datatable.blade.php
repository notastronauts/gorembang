<div class="py-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        <a href="#" class="flex justify-between" wire:click.prevent="sortBy('title')" role="button">
                                            Title
                                            @include('includes._sort-icon', ['field' => 'title'])
                                        </a>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        <a href="#" class="flex justify-between" wire:click.prevent="sortBy('created_at')" role="button">
                                            Created At
                                            @include('includes._sort-icon', ['field' => 'created_at'])
                                        </a>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        <span>Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($oleholehs as $oleholeh)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {!! $oleholeh->title !!}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500">
                                            {!! $oleholeh->created_at !!}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="{{ route('models.oleh-oleh.show', $oleholeh->id) }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                            Show
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                                <!-- More items... -->
                            </tbody>
                        </table>
                        <div class="px-6 py-3">
                            {{ $oleholehs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
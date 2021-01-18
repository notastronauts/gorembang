<div class="py-12">
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
                    <a href="#" class="flex justify-between" wire:click.prevent="sortBy('name')" role="button">
                      Name
                      @include('includes._sort-icon', ['field' => 'name'])
                    </a>
                  </th>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    <a href="#" class="flex justify-between" wire:click.prevent="sortBy('created_at')" role="button">
                      Created At
                      @include('includes._sort-icon', ['field' => 'created_at'])
                    </a>
                  </th>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    <a href="#" class="flex justify-between">
                      Status
                      @include('includes._sort-icon', ['field' => 'name'])
                    </a>
                  </th>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    <a href="#" class="flex justify-between">
                      Role
                      @include('includes._sort-icon', ['field' => 'name'])
                    </a>
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none">
                          <img class="object-cover w-10 h-10 rounded-full" src="{{ __('https://ui-avatars.com/api/?name='.urlencode($user->name).'&color=7F9CF5&background=EBF4FF') }}" alt="{{ $user->name }}" aria-hidden="true" />
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {!! $user->name !!}
                        </div>
                        <div class="text-sm text-gray-500">
                          {!! $user->email !!}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {!! $user->created_at !!}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    Admin
                  </td>
                  <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>
                @endforeach

                <!-- More items... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

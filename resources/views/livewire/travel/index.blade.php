<div x-data="{ 'isDialogOpen': false }" @keydown.escape="isDialogOpen = false">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Travel') }}
        </h2>
    </x-slot>
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
        <div x-show="isDialogOpen" @click.away="isDialogOpen = false" class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                <livewire:travel.create-form />
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between w-full pt-6 mx-auto sm:px-6 lg:px-8">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Travel') }}
        </h2>
        <button @click="isDialogOpen = true" class="relative right-0 flex justify-center px-4 py-2 space-x-4 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Tambah
        </button>
    </div>
    <livewire:travel.datatable />
</div>
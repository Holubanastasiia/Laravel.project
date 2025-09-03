<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <div class="flex justify-between items-center mb-3 mt-1 pl-3">
            <p class="px-4 text-sm font-medium">Per Page</p>
            <select wire:model.live="perPage" class="bg-gray-50 border border-gray-300 text-gray-900
text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option value="5">5</option>
                <option value="7">7</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <input
            class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700
text-sm border border-slate-200 rounded transition duration-300 ease focus:outline-none
focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Search for user..." wire:model.live.300m="search" />

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-b border-slate-300 bg-slate-50" wire:click="setSortFunctionality('name')">
                    <button class="flex items-center ml-1">
                        User Name
                        @if ($sortByColumn != 'name')
                            <x-buttons.up-down />
                        @elseif($sortDirection == 'ASC')
                            <x-buttons.up />
                        @else
                            <x-buttons.down />
                        @endif
                    </button>
                </th>


                <th scope="col" class="px-6 py-3" wire:click="setSortFunctionality('email')">
                    <div class="flex items-center">
                        User email
                        @if ($sortByColumn != 'email')
                            <x-buttons.up-down />
                        @elseif($sortDirection == 'ASC')
                            <x-buttons.up />
                        @else
                            <x-buttons.down />
                            @endif
                            </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Status
                    </div>
                </th>
                <th scope="col" class="px-6 py-3" wire:click="setSortFunctionality('created_at')">
                    <div class="flex items-center">
                        Created at
                        @if ($sortByColumn != 'created_at')
                            <x-buttons.up-down />
                        @elseif($sortDirection == 'ASC')
                            <x-buttons.up />
                        @else
                            <x-buttons.down />
                            @endif
                            </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>

            <tbody>

            @foreach ($users as $item)
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->email }}
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->created_at }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600
dark:hover:bg-blue-700 dark:focus:ring-blue-900">Edit</button>
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600
dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


</div>

<x-slot name="breadcrumb">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>{{ $breadcrumb }}</li>
            </ul>
        </div>
    </section>
</x-slot>
<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:admin.users.user-table />
            </div>
        </div>
    </div>
</div>

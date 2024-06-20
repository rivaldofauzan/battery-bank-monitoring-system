{{-- Basic table layout --}}
<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

            <!-- Table (Top Channels) -->
            <x-table.table-1 :table1page="$table1page" />
            <x-table.table-2 :table2page="$table2page" />
            <x-table.table-3 :table3page="$table3page" />
            <x-table.table-4 :table4page="$table4page" />
            <x-table.table-5 :table5page="$table5page" />
            <x-table.table-6 :table6page="$table6page" />
            <x-table.table-7 :table7page="$table7page" />
            <x-table.table-8 :table8page="$table8page" />

        </div>
    </div>
</x-app-layout>

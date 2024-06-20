<div class="col-span-full xl:col-span-12 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Tabel Data Battery 3</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full dark:text-slate-300">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-center">No</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Timestamp</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Voltage</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Current</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Humidity</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Temperature</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Resistance</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Power</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    @foreach($table3page as $index => $battery_3)
                        <tr>
                            <td class="p-2">
                                <div class="text-center">{{ ($table3page->currentPage() - 1) * $table3page->perPage() + $loop->iteration }}</div>
                            </td>
                            <td class="p-2">
                                <div class="flex items-center">
                                    <div class="text-slate-800 dark:text-slate-100">{{ $battery_3->timestamp }}</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->voltage }} V</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->current }} mA</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->humidity }}%</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->temperature }}°</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->resistance }}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $battery_3->power }} mWatt</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $table3page->links() }}
        </div>
    </div>
</div>

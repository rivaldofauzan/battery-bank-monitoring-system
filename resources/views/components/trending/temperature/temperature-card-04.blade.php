<div class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700 flex items-center">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Temperature Grafik Battery 4</h2>
        <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
        </div>
    </header>
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 mb-5">{{ $latestTemperature4 }}°</div>
            <div class="text-sm font-semibold text-white px-1.5 rounded-full {{ $temperatureChangePercentage4 >= 0 ? 'bg-emerald-500' : 'bg-amber-500' }}">
                {{ number_format($temperatureChangePercentage4, 2) }}%
            </div>
        </div>
    </div>
    <div class="grow">
        <canvas id="temperature-card-04" width="595" height="248"></canvas>
    </div>
</div>
<div class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700 flex items-center">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Power Grafik Battery 1</h2>
        <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
        </div>
    </header>
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 mb-5">{{ $latestPower1 }} mWatt</div>
            <div class="text-sm font-semibold text-white px-1.5 rounded-full {{ $powerChangePercentage1 >= 0 ? 'bg-emerald-500' : 'bg-amber-500' }}">
                {{ number_format($powerChangePercentage1, 2) }}%
            </div>
        </div>
    </div>
    <div class="grow">
        <canvas id="power-card-01" width="595" height="248"></canvas>
    </div>
</div>
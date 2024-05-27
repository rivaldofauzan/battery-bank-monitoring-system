<div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <div class="px-5 pt-5 ml-4">
        <header class="flex justify-between items-start mb-2">
            <!-- Icon -->
            <i class="fa-solid fa-question-circle text-4xl"></i>
        </header>
        <h2 class="text-lg font-semibold text-slate-800 dark:text-slate-100 mb-1">Resistance</h2>
        <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase mb-1">Sensor</div>
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 mb-5">{{ $latestResistance }}</div>
            <div class="text-sm font-semibold text-white px-1.5 rounded-full {{ $resistanceChangePercentage >= 0 ? 'bg-emerald-500' : 'bg-amber-500' }}">
                {{ number_format($resistanceChangePercentage, 2) }}%
            </div>
        </div>
    </div>
</div>

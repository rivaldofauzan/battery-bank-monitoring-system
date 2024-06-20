<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.current.current-card-01 :latestCurrent1="$latestCurrent1" :currentChangePercentage1="$currentChangePercentage1"/>
        <x-trending.current.current-card-02 :latestCurrent2="$latestCurrent2" :currentChangePercentage2="$currentChangePercentage2"/>
        <x-trending.current.current-card-03 :latestCurrent3="$latestCurrent3" :currentChangePercentage3="$currentChangePercentage3"/>
        <x-trending.current.current-card-04 :latestCurrent4="$latestCurrent4" :currentChangePercentage4="$currentChangePercentage4"/>
        
        </div>
    </div>
</x-app-layout>

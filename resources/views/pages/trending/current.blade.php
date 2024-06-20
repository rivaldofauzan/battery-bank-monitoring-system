<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.current.current-card-01 :latestCurrent1="$latestCurrent1" :currentChangePercentage1="$currentChangePercentage1"/>
        <x-trending.current.current-card-02 :latestCurrent2="$latestCurrent2" :currentChangePercentage2="$currentChangePercentage2"/>
        <x-trending.current.current-card-03 :latestCurrent3="$latestCurrent3" :currentChangePercentage3="$currentChangePercentage3"/>
        <x-trending.current.current-card-04 :latestCurrent4="$latestCurrent4" :currentChangePercentage4="$currentChangePercentage4"/>
        <x-trending.current.current-card-05 :latestCurrent5="$latestCurrent5" :currentChangePercentage5="$currentChangePercentage5"/>
        <x-trending.current.current-card-06 :latestCurrent6="$latestCurrent6" :currentChangePercentage6="$currentChangePercentage6"/>
        <x-trending.current.current-card-07 :latestCurrent7="$latestCurrent7" :currentChangePercentage7="$currentChangePercentage7"/>
        <x-trending.current.current-card-08 :latestCurrent8="$latestCurrent8" :currentChangePercentage8="$currentChangePercentage8"/>

        </div>
    </div>
</x-app-layout>

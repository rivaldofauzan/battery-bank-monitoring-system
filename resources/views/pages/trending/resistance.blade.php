<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.resistance.resistance-card-01 :latestResistance1="$latestResistance1" :resistanceChangePercentage1="$resistanceChangePercentage1"/>
        <x-trending.resistance.resistance-card-02 :latestResistance2="$latestResistance2" :resistanceChangePercentage2="$resistanceChangePercentage2"/>
        <x-trending.resistance.resistance-card-03 :latestResistance3="$latestResistance3" :resistanceChangePercentage3="$resistanceChangePercentage3"/>
        <x-trending.resistance.resistance-card-04 :latestResistance4="$latestResistance4" :resistanceChangePercentage4="$resistanceChangePercentage4"/>

        </div>
    </div>
</x-app-layout>

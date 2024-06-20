<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.power.power-card-01 :latestPower1="$latestPower1" :powerChangePercentage1="$powerChangePercentage1"/>
        <x-trending.power.power-card-02 :latestPower2="$latestPower2" :powerChangePercentage2="$powerChangePercentage2"/>
        <x-trending.power.power-card-03 :latestPower3="$latestPower3" :powerChangePercentage3="$powerChangePercentage3"/>
        <x-trending.power.power-card-04 :latestPower4="$latestPower4" :powerChangePercentage4="$powerChangePercentage4"/>
        <x-trending.power.power-card-05 :latestPower5="$latestPower5" :powerChangePercentage5="$powerChangePercentage5"/>
        <x-trending.power.power-card-06 :latestPower6="$latestPower6" :powerChangePercentage6="$powerChangePercentage6"/>
        <x-trending.power.power-card-07 :latestPower7="$latestPower7" :powerChangePercentage7="$powerChangePercentage7"/>
        <x-trending.power.power-card-08 :latestPower8="$latestPower8" :powerChangePercentage8="$powerChangePercentage8"/>

        </div>
    </div>
</x-app-layout>

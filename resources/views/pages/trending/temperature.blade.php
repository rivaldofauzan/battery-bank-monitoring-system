<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.temperature.temperature-card-01 :latestTemperature1="$latestTemperature1" :temperatureChangePercentage1="$temperatureChangePercentage1"/>
        <x-trending.temperature.temperature-card-02 :latestTemperature2="$latestTemperature2" :temperatureChangePercentage2="$temperatureChangePercentage2"/>
        <x-trending.temperature.temperature-card-03 :latestTemperature3="$latestTemperature3" :temperatureChangePercentage3="$temperatureChangePercentage3"/>
        <x-trending.temperature.temperature-card-04 :latestTemperature4="$latestTemperature4" :temperatureChangePercentage4="$temperatureChangePercentage4"/>
        <x-trending.temperature.temperature-card-05 :latestTemperature5="$latestTemperature5" :temperatureChangePercentage5="$temperatureChangePercentage5"/>
        <x-trending.temperature.temperature-card-06 :latestTemperature6="$latestTemperature6" :temperatureChangePercentage6="$temperatureChangePercentage6"/>
        <x-trending.temperature.temperature-card-07 :latestTemperature7="$latestTemperature7" :temperatureChangePercentage7="$temperatureChangePercentage7"/>
        <x-trending.temperature.temperature-card-08 :latestTemperature8="$latestTemperature8" :temperatureChangePercentage8="$temperatureChangePercentage8"/>

        </div>
    </div>
</x-app-layout>

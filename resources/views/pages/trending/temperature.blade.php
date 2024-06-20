<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.temperature.temperature-card-01 :latestTemperature1="$latestTemperature1" :temperatureChangePercentage1="$temperatureChangePercentage1"/>
        <x-trending.temperature.temperature-card-02 :latestTemperature2="$latestTemperature2" :temperatureChangePercentage2="$temperatureChangePercentage2"/>
        <x-trending.temperature.temperature-card-03 :latestTemperature3="$latestTemperature3" :temperatureChangePercentage3="$temperatureChangePercentage3"/>
        <x-trending.temperature.temperature-card-04 :latestTemperature4="$latestTemperature4" :temperatureChangePercentage4="$temperatureChangePercentage4"/>

        </div>
    </div>
</x-app-layout>

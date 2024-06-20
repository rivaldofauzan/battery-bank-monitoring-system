<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.humidity.humidity-card-01 :latestHumidity1="$latestHumidity1" :humidityChangePercentage1="$humidityChangePercentage1"/>
        <x-trending.humidity.humidity-card-02 :latestHumidity2="$latestHumidity2" :humidityChangePercentage2="$humidityChangePercentage2"/>
        <x-trending.humidity.humidity-card-03 :latestHumidity3="$latestHumidity3" :humidityChangePercentage3="$humidityChangePercentage3"/>
        <x-trending.humidity.humidity-card-04 :latestHumidity4="$latestHumidity4" :humidityChangePercentage4="$humidityChangePercentage4"/>
        <x-trending.humidity.humidity-card-05 :latestHumidity5="$latestHumidity5" :humidityChangePercentage5="$humidityChangePercentage5"/>
        <x-trending.humidity.humidity-card-06 :latestHumidity6="$latestHumidity6" :humidityChangePercentage6="$humidityChangePercentage6"/>
        <x-trending.humidity.humidity-card-07 :latestHumidity7="$latestHumidity7" :humidityChangePercentage7="$humidityChangePercentage7"/>
        <x-trending.humidity.humidity-card-08 :latestHumidity8="$latestHumidity8" :humidityChangePercentage8="$humidityChangePercentage8"/>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
 <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

        <x-trending.voltage.voltage-card-01 :latestVoltage1="$latestVoltage1" :voltageChangePercentage1="$voltageChangePercentage1"/>
        <x-trending.voltage.voltage-card-02 :latestVoltage2="$latestVoltage2" :voltageChangePercentage2="$voltageChangePercentage2"/>
        <x-trending.voltage.voltage-card-03 :latestVoltage3="$latestVoltage3" :voltageChangePercentage3="$voltageChangePercentage3"/>
        <x-trending.voltage.voltage-card-04 :latestVoltage4="$latestVoltage4" :voltageChangePercentage4="$voltageChangePercentage4"/>
        <x-trending.voltage.voltage-card-05 :latestVoltage5="$latestVoltage5" :voltageChangePercentage5="$voltageChangePercentage5"/>
        <x-trending.voltage.voltage-card-06 :latestVoltage6="$latestVoltage6" :voltageChangePercentage6="$voltageChangePercentage6"/>
        <x-trending.voltage.voltage-card-07 :latestVoltage7="$latestVoltage7" :voltageChangePercentage7="$voltageChangePercentage7"/>
        <x-trending.voltage.voltage-card-08 :latestVoltage8="$latestVoltage8" :voltageChangePercentage8="$voltageChangePercentage8"/>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6 ">

            <!-- Line chart (Acme Plus) -->
            <x-dashboard.dashboard-card-01 :latestVoltage="$latestVoltage" :voltageChangePercentage="$voltageChangePercentage" />

            <!-- Line chart (Acme Advanced) -->
            <x-dashboard.dashboard-card-02 :latestCurrent="$latestCurrent" :currentChangePercentage="$currentChangePercentage" />

            <!-- Line chart (Acme Professional) -->
            <x-dashboard.dashboard-card-03 :latestHumidity="$latestHumidity" :humidityChangePercentage="$humidityChangePercentage" />

            <!-- Line chart (Acme Plus) -->
            <x-dashboard.dashboard-card-04 :latestTemperature="$latestTemperature" :temperatureChangePercentage="$temperatureChangePercentage" />

            <!-- Line chart (Acme Advanced) -->
            <x-dashboard.dashboard-card-06 :latestResistance="$latestResistance" :resistanceChangePercentage="$resistanceChangePercentage" />

            <!-- Line chart (Acme Professional) -->
            <x-dashboard.dashboard-card-08 :latestPower="$latestPower" :powerChangePercentage="$powerChangePercentage" />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-05 :latestVoltage="$latestVoltage" :voltageChangePercentage="$voltageChangePercentage"/>

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-051 :latestCurrent="$latestCurrent" :currentChangePercentage="$currentChangePercentage" />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-052 :latestHumidity="$latestHumidity" :humidityChangePercentage="$humidityChangePercentage" />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-053 :latestTemperature="$latestTemperature" :temperatureChangePercentage="$temperatureChangePercentage" />


            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-054 :latestResistance="$latestResistance" :resistanceChangePercentage="$resistanceChangePercentage" />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-055 :latestPower="$latestPower" :powerChangePercentage="$powerChangePercentage" />

            <!-- Table (Top Channels) -->
            <x-dashboard.dashboard-card-07 :pengukuranspage="$pengukuranspage" />

        </div>
    </div>
</x-app-layout>

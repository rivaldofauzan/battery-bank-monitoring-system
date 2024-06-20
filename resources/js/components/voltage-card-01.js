// Import Chart.js
import {
    Chart,
    LineController,
    LineElement,
    Filler,
    PointElement,
    LinearScale,
    TimeScale,
    Tooltip,
} from "chart.js";
import "chartjs-adapter-moment";

// Import utilities
import { tailwindConfig, hexToRGB } from "../utils";

// Custom format value function to add " V" suffix
const formatValueWithV = (value) => {
    return `${value.toFixed(2)} V`; // format value to two decimal places with " V" suffix
};

Chart.register(
    LineController,
    LineElement,
    Filler,
    PointElement,
    LinearScale,
    TimeScale,
    Tooltip
);

// A chart built with Chart.js 3
// https://www.chartjs.org/
const voltageCard01 = () => {
    const ctx = document.getElementById("voltage-card-01");
    if (!ctx) return;

    const darkMode = localStorage.getItem("dark-mode") === "true";

    const textColor = {
        light: "#94a3b8",
        dark: "#64748B",
    };

    const gridColor = {
        light: "#f1f5f9",
        dark: "#334155",
    };

    const tooltipTitleColor = {
        light: "#1e293b",
        dark: "#f1f5f9",
    };

    const tooltipBodyColor = {
        light: "#1e293b",
        dark: "#f1f5f9",
    };

    const tooltipBgColor = {
        light: "#ffffff",
        dark: "#334155",
    };

    const tooltipBorderColor = {
        light: "#e2e8f0",
        dark: "#475569",
    };

    fetch("/json-voltage1")
        .then((response) => response.json())
        .then((result) => {
            const labels = result.map((item) => item.timestamp);
            const data = result.map((item) => item.voltage);

            const chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: "Voltage",
                            data: data,
                            fill: true,
                            backgroundColor: `rgba(${hexToRGB(
                                tailwindConfig().theme.colors.blue[500]
                            )}, 0.08)`,
                            borderColor:
                                tailwindConfig().theme.colors.indigo[500],
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            pointHoverRadius: 5,
                            pointBackgroundColor:
                                tailwindConfig().theme.colors.indigo[500],
                            pointHoverBackgroundColor:
                                tailwindConfig().theme.colors.indigo[500],
                            pointBorderWidth: 1,
                            pointHoverBorderWidth: 2,
                            clip: 20,
                        },
                    ],
                },
                options: {
                    layout: {
                        padding: 20,
                    },
                    scales: {
                        y: {
                            border: {
                                display: false,
                            },
                            ticks: {
                                stepSize: 1, // Set tick step to 1V
                                callback: (value) => formatValueWithV(value),
                                color: darkMode
                                    ? textColor.dark
                                    : textColor.light,
                            },
                            grid: {
                                color: darkMode
                                    ? gridColor.dark
                                    : gridColor.light,
                            },
                        },
                        x: {
                            type: "time",
                            time: {
                                parser: "YYYY-MM-DD HH:mm:ss",
                                unit: "second",
                                tooltipFormat: "MMM DD, H:mm:ss a",
                                displayFormats: {
                                    second: "H:mm:ss",
                                },
                            },
                            border: {
                                display: false,
                            },
                            grid: {
                                display: false,
                            },
                            ticks: {
                                autoSkipPadding: 48,
                                maxRotation: 0,
                                color: darkMode
                                    ? textColor.dark
                                    : textColor.light,
                            },
                        },
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            titleFont: {
                                weight: "600",
                            },
                            callbacks: {
                                label: (context) =>
                                    formatValueWithV(context.parsed.y),
                            },
                            titleColor: darkMode
                                ? tooltipTitleColor.dark
                                : tooltipTitleColor.light,
                            bodyColor: darkMode
                                ? tooltipBodyColor.dark
                                : tooltipBodyColor.light,
                            backgroundColor: darkMode
                                ? tooltipBgColor.dark
                                : tooltipBgColor.light,
                            borderColor: darkMode
                                ? tooltipBorderColor.dark
                                : tooltipBorderColor.light,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "nearest",
                    },
                    animation: false,
                    maintainAspectRatio: false,
                },
            });

            // Fake real-time
            // For demo purposes only!
            const chartValue = document.getElementById("voltage-card-01-value");
            const chartDeviation = document.getElementById(
                "voltage-card-01-deviation"
            );

            const adddata = (value = NaN, prev) => {
                const { datasets } = chart.data;
                chart.data.labels.shift();
                chart.data.labels.push(new Date());
                datasets[0].data.shift();
                datasets[0].data.push(value);
                chart.update(0);
                if (!chartValue) return;
                const diff = ((value - prev) / prev) * 100;
                chartValue.innerHTML = `${value.toFixed(2)} V`;
                if (!chartDeviation) return;
                chartDeviation.style.backgroundColor =
                    diff < 0
                        ? tailwindConfig().theme.colors.amber[500]
                        : tailwindConfig().theme.colors.emerald[500];
                chartDeviation.innerHTML = `${
                    diff > 0 ? "+" : ""
                }${diff.toFixed(2)}%`;
            };

            let increment = 0;
            let range = data.length;

            const reload = () => {
                increment += 1;
                if (increment + range - 1 < result.data.length) {
                    adddata(
                        result.data[increment + range - 1].voltage,
                        result.data[increment + range - 2].voltage
                    );
                } else {
                    increment = 0;
                    range = data.length;
                    adddata(
                        result.data[increment + range - 1].voltage,
                        result.data[result.data.length - 1].voltage
                    );
                }
                setTimeout(reload, 2000);
            };

            reload();

            document.addEventListener("darkMode", (e) => {
                const { mode } = e.detail;
                chart.options.scales.x.ticks.color =
                    mode === "on" ? textColor.dark : textColor.light;
                chart.options.scales.y.ticks.color =
                    mode === "on" ? textColor.dark : textColor.light;
                chart.options.scales.y.grid.color =
                    mode === "on" ? gridColor.dark : gridColor.light;
                chart.options.plugins.tooltip.titleColor =
                    mode === "on"
                        ? tooltipTitleColor.dark
                        : tooltipTitleColor.light;
                chart.options.plugins.tooltip.bodyColor =
                    mode === "on"
                        ? tooltipBodyColor.dark
                        : tooltipBodyColor.light;
                chart.options.plugins.tooltip.backgroundColor =
                    mode === "on" ? tooltipBgColor.dark : tooltipBgColor.light;
                chart.options.plugins.tooltip.borderColor =
                    mode === "on"
                        ? tooltipBorderColor.dark
                        : tooltipBorderColor.light;
                chart.update("none");
            });
        });
};

export default voltageCard01;

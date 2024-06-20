import "./bootstrap";

// Import Chart.js
import { Chart } from "chart.js";

// Import flatpickr
import flatpickr from "flatpickr";

// import component from './components/component';
import dashboardCard01 from "./components/dashboard-card-01";
import dashboardCard02 from "./components/dashboard-card-02";
import dashboardCard03 from "./components/dashboard-card-03";
import dashboardCard04 from "./components/dashboard-card-04";
import dashboardCard05 from "./components/dashboard-card-05";
import dashboardCard051 from "./components/dashboard-card-051";
import dashboardCard052 from "./components/dashboard-card-052";
import dashboardCard053 from "./components/dashboard-card-053";
import dashboardCard054 from "./components/dashboard-card-054";
import dashboardCard055 from "./components/dashboard-card-055";
import dashboardCard06 from "./components/dashboard-card-06";
import dashboardCard08 from "./components/dashboard-card-08";
import voltageCard01 from "./components/voltage-card-01";
import voltageCard02 from "./components/voltage-card-02";
import voltageCard03 from "./components/voltage-card-03";
import voltageCard04 from "./components/voltage-card-04";
import voltageCard05 from "./components/voltage-card-05";
import voltageCard06 from "./components/voltage-card-06";
import voltageCard07 from "./components/voltage-card-07";
import voltageCard08 from "./components/voltage-card-08";
import currentCard01 from "./components/current-card-01";
import currentCard02 from "./components/current-card-02";
import currentCard03 from "./components/current-card-03";
import currentCard04 from "./components/current-card-04";
import currentCard05 from "./components/current-card-05";
import currentCard06 from "./components/current-card-06";
import currentCard07 from "./components/current-card-07";
import currentCard08 from "./components/current-card-08";
import humidityCard01 from "./components/humidity-card-01";
import humidityCard02 from "./components/humidity-card-02";
import humidityCard03 from "./components/humidity-card-03";
import humidityCard04 from "./components/humidity-card-04";
import humidityCard05 from "./components/humidity-card-05";
import humidityCard06 from "./components/humidity-card-06";
import humidityCard07 from "./components/humidity-card-07";
import humidityCard08 from "./components/humidity-card-08";
import temperatureCard01 from "./components/temperature-card-01";
import temperatureCard02 from "./components/temperature-card-02";
import temperatureCard03 from "./components/temperature-card-03";
import temperatureCard04 from "./components/temperature-card-04";
import temperatureCard05 from "./components/temperature-card-05";
import temperatureCard06 from "./components/temperature-card-06";
import temperatureCard07 from "./components/temperature-card-07";
import temperatureCard08 from "./components/temperature-card-08";
import resistanceCard01 from "./components/resistance-card-01";
import resistanceCard02 from "./components/resistance-card-02";
import resistanceCard03 from "./components/resistance-card-03";
import resistanceCard04 from "./components/resistance-card-04";
import resistanceCard05 from "./components/resistance-card-05";
import resistanceCard06 from "./components/resistance-card-06";
import resistanceCard07 from "./components/resistance-card-07";
import resistanceCard08 from "./components/resistance-card-08";
import powerCard01 from "./components/power-card-01";
import powerCard02 from "./components/power-card-02";
import powerCard03 from "./components/power-card-03";
import powerCard04 from "./components/power-card-04";
import powerCard05 from "./components/power-card-05";
import powerCard06 from "./components/power-card-06";
import powerCard07 from "./components/power-card-07";
import powerCard08 from "./components/power-card-08";

// Define Chart.js default settings
/* eslint-disable prefer-destructuring */
Chart.defaults.font.family = '"Inter", sans-serif';
Chart.defaults.font.weight = "500";
Chart.defaults.plugins.tooltip.borderWidth = 1;
Chart.defaults.plugins.tooltip.displayColors = false;
Chart.defaults.plugins.tooltip.mode = "nearest";
Chart.defaults.plugins.tooltip.intersect = false;
Chart.defaults.plugins.tooltip.position = "nearest";
Chart.defaults.plugins.tooltip.caretSize = 0;
Chart.defaults.plugins.tooltip.caretPadding = 20;
Chart.defaults.plugins.tooltip.cornerRadius = 4;
Chart.defaults.plugins.tooltip.padding = 8;

// Register Chart.js plugin to add a bg option for chart area
Chart.register({
    id: "chartAreaPlugin",
    // eslint-disable-next-line object-shorthand
    beforeDraw: (chart) => {
        if (
            chart.config.options.chartArea &&
            chart.config.options.chartArea.backgroundColor
        ) {
            const ctx = chart.canvas.getContext("2d");
            const { chartArea } = chart;
            ctx.save();
            ctx.fillStyle = chart.config.options.chartArea.backgroundColor;
            // eslint-disable-next-line max-len
            ctx.fillRect(
                chartArea.left,
                chartArea.top,
                chartArea.right - chartArea.left,
                chartArea.bottom - chartArea.top
            );
            ctx.restore();
        }
    },
});

document.addEventListener("DOMContentLoaded", () => {
    // Light switcher
    const lightSwitches = document.querySelectorAll(".light-switch");
    if (lightSwitches.length > 0) {
        lightSwitches.forEach((lightSwitch, i) => {
            if (localStorage.getItem("dark-mode") === "true") {
                lightSwitch.checked = true;
            }
            lightSwitch.addEventListener("change", () => {
                const { checked } = lightSwitch;
                lightSwitches.forEach((el, n) => {
                    if (n !== i) {
                        el.checked = checked;
                    }
                });
                document.documentElement.classList.add(
                    "[&_*]:!transition-none"
                );
                if (lightSwitch.checked) {
                    document.documentElement.classList.add("dark");
                    document.querySelector("html").style.colorScheme = "dark";
                    localStorage.setItem("dark-mode", true);
                    document.dispatchEvent(
                        new CustomEvent("darkMode", { detail: { mode: "on" } })
                    );
                } else {
                    document.documentElement.classList.remove("dark");
                    document.querySelector("html").style.colorScheme = "light";
                    localStorage.setItem("dark-mode", false);
                    document.dispatchEvent(
                        new CustomEvent("darkMode", { detail: { mode: "off" } })
                    );
                }
                setTimeout(() => {
                    document.documentElement.classList.remove(
                        "[&_*]:!transition-none"
                    );
                }, 1);
            });
        });
    }
    // Flatpickr
    flatpickr(".datepicker", {
        mode: "range",
        static: true,
        monthSelectorType: "static",
        dateFormat: "M j, Y",
        defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
        prevArrow:
            '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
        nextArrow:
            '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
        onReady: (selectedDates, dateStr, instance) => {
            // eslint-disable-next-line no-param-reassign
            instance.element.value = dateStr.replace("to", "-");
            const customClass = instance.element.getAttribute("data-class");
            instance.calendarContainer.classList.add(customClass);
        },
        onChange: (selectedDates, dateStr, instance) => {
            // eslint-disable-next-line no-param-reassign
            instance.element.value = dateStr.replace("to", "-");
        },
    });
    dashboardCard01();
    dashboardCard02();
    dashboardCard03();
    dashboardCard04();
    dashboardCard05();
    dashboardCard051();
    dashboardCard052();
    dashboardCard053();
    dashboardCard054();
    dashboardCard055();
    dashboardCard06();
    dashboardCard08();
    voltageCard01();
    voltageCard02();
    voltageCard03();
    voltageCard04();
    voltageCard05();
    voltageCard06();
    voltageCard07();
    voltageCard08();
    currentCard01();
    currentCard02();
    currentCard03();
    currentCard04();
    currentCard05();
    currentCard06();
    currentCard07();
    currentCard08();
    humidityCard01();
    humidityCard02();
    humidityCard03();
    humidityCard04();
    humidityCard05();
    humidityCard06();
    humidityCard07();
    humidityCard08();
    temperatureCard01();
    temperatureCard02();
    temperatureCard03();
    temperatureCard04();
    temperatureCard05();
    temperatureCard06();
    temperatureCard07();
    temperatureCard08();
    resistanceCard01();
    resistanceCard02();
    resistanceCard03();
    resistanceCard04();
    resistanceCard05();
    resistanceCard06();
    resistanceCard07();
    resistanceCard08();
    powerCard01();
    powerCard02();
    powerCard03();
    powerCard04();
    powerCard05();
    powerCard06();
    powerCard07();
    powerCard08();
});

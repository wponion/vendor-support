import flatpickr from "flatpickr";
import rangePlugin from "flatpickr/dist/esm/plugins/rangePlugin";
import scrollPlugin from "flatpickr/dist/esm/plugins/scrollPlugin";
import minMaxTimePlugin from "flatpickr/dist/esm/plugins/minMaxTimePlugin";
import confirmDate from "flatpickr/dist/esm/plugins/confirmDate/confirmDate";
import monthSelect from "flatpickr/dist/esm/plugins/monthSelect/index";
import labelPlugin from "flatpickr/dist/esm/plugins/labelPlugin/labelPlugin";
import weekSelect from "flatpickr/dist/esm/plugins/weekSelect/weekSelect";

( ( window ) => {
	window.flatpickr   = flatpickr;
	window.scrollPlugin = scrollPlugin;
	window.rangePlugin = rangePlugin;
	window.minMaxTimePlugin = minMaxTimePlugin;
	window.confirmDate = confirmDate;
	window.monthSelect = monthSelect;
	window.labelPlugin = labelPlugin;
	window.weekSelect = weekSelect;
} )( window );

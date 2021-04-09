$(document).ready(function() {
	// for radio button to display something
    $("input[type='radio']").change(function() {
    	// other option to display textbox
        if ($(this).val() == "other") {
            $("#q1_other").show();
        } else {
            $("#q1_other").hide();
        }
        // abroad option to display question # 2.1
        if ($(this).val() == "abroad") {
            $("#q2_1").show();
        } else {
            $("#q2_1").hide();
        }
    });
    
});

// for other option in checkbox to display textbox
function show_hide(other) {
    var other_txt = document.getElementById('q11_other');
    other_txt.style.display = other.checked ? "block":  "none";
}

// for select to display textbox
function other_txt() {
    var selectBox = document.getElementById("industry");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "other") {
        $('#q3_other').show();
    } else {
        $('#q3_other').hide();
    }
}

// declare subregions under each region
var subreg_in_reg = { "Africa": ["Northern Africa", "Eastern Africa", "Middle Africa",
				"Southern Africa", "Western Africa"],
	"America": ["North America", "Central America", "South America"],
	"Asia": ["Central Asia", "Eastern Asia", "South Asia", "Southeast Asia",
			"West Asia"],
	"Europe": ["Eastern Europe", "Northern Europe", "Southern Europe",
				"Western Europe"],
	"Oceania": ["Australia and New Zealand", "Melanesia, Micronesia, Polynesia"]
};

// show subregions under region
function make_subreg(value) {
	if (value.length == 0) {
		document.getElementById("subregion").innerHTML = "<option></option>";
	}
	else {
		var subreg_options = "";
		for (subreg_id in subreg_in_reg[value]) {
			subreg_options+= "<option>" + subreg_in_reg[value][subreg_id] + "</option>";
		}
		document.getElementById("subregion").innerHTML = subreg_options;
	}
}


var slider = document.getElementById('priceSlider');

var pSLider = noUiSlider.create(slider, {
    start: [0, 2000],
    connect: true,
    range: {
        'min': 0,
        'max': 2000
    },format: {
    from: function(value) {
            return parseInt(value);
        },
    to: function(value) {
            return parseInt(value);
        }
    }
});

slider.noUiSlider.on('change', function() {
	
	var arr = slider.noUiSlider.get();
	$('#priceFrom').val(arr[0]);
	$('#priceTo').val(arr[1]);
	
});

$('#priceFrom').on('input',function(e){
	var leftVal = $('#priceFrom').val();
	changeVal(leftVal, null);
});

$('#priceTo').on('input',function(e){
  var rightVal = $('#priceTo').val();
	changeVal(null, rightVal);
});

function changeVal(val1, val2) {
	
	slider.noUiSlider.set([val1, val2]);
	
}
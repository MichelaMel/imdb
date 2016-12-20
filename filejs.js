$('.btn-trailer').click(function() {
  var video = $(this).closest('.active').attr('data-attribute');
  $('.modal iframe').attr('src', video);
}); 




// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
$(document).ready( function() {

  // Create object to store filter for each group
  var buttonFilters = {};
  var buttonFilter = '*';
  // Create new object for the range filters and set default values,
  // The default values should correspond to the default values from the slider
  var rangeFilters = {
      
      'rank': {'min':1, 'max': 10}
    };

  // Initialise Isotope
  // Set the item selector
  var $grid = $('.grid').isotope({
    itemSelector: '.box-film',
    layout: 'masonry',

    // use filter function
    filter: function() {
      var $this = $(this);            
      var rank = $this.attr('data-rank'); 
      var isInRankRange = (rangeFilters['rank'].min <= rank && rangeFilters['rank'].max >= rank);



    

      //console.log(rangeFilters['rank']);
      // Debug to check whether an item is within the height weight range
      //console.log('isInHeightRange:' +isInHeightRange + '\nisInWeightRange: ' + isInWeightRange );
      return $this.is( buttonFilter ) && ( isInRankRange);
    

    }
  });



  // Initialise Sliders
  // Set min/max range on sliders as well as default values
  var $rankSlider = $('#filter-rank').slider({ tooltip_split: true, min: 1,  max: 10, range: true, value: [4, 9] });


  function updateRangeSlider(slider, slideEvt) {
    console.log('Current slider:' + slider);
    var sldmin = +slideEvt.value[0],
        sldmax = +slideEvt.value[1],
        // Find which filter group this slider is in (in this case it will be either height or weight)
        // This can be changed by modifying the data-filter-group="age" attribute on the slider HTML
        filterGroup = slider.attr('data-filter-group'),
        // Set current selection in variable that can be pass to the label
        currentSelection = sldmin + ' - ' + sldmax;

   

      // Update filter label with new range selection
      
      // Set min and max values for current selection to current selection
      // If no values are found set min to 0 and max to 100000
      // Store min/max values in rangeFilters array in the relevant filter group
      console.log('Filtergroup: '+ filterGroup);
      rangeFilters[filterGroup] = {
        min: sldmin || 0,
        max: sldmax || 100000
      };
      // Trigger isotope again to refresh layout
    
      $grid.isotope();

  		
  }

  // Trigger Isotope Filter when slider drag has stopped  
  $rankSlider.on('slideStop', function(slideEvt){
    var $this =$(this);
    updateRangeSlider($this, slideEvt);
  });
 
    // Trigger isotope again to refresh layout
    $grid.isotope();
 });

   //Grid or list view
	$("#list-icon").click(function(){
		$(".box-film").removeClass("box-film-grid").addClass("box-film-list");
		 $('.grid').isotope({
			  itemSelector: '.box-film-list',
			  percentPosition: true,

		})
	});
	$("#grid-icon").click(function(){
		$(".box-film").removeClass("box-film-list").addClass("box-film-grid");
		 $('.grid').isotope({
			  itemSelector: '.box-film',
			  percentPosition: true,

		})
	});

	// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.box-film',
  layoutMode: 'fitRows',
  getSortData: {   
    number: '.data-rank',
    }
  
});






// search
function toggleSearch() {
  var searchContainer = document.getElementById("search-container");
  if (searchContainer.style.display === "" || searchContainer.style.display === "none") {
    searchContainer.style.display = "block";
  } else {
    searchContainer.style.display = "none";
  }
}



var prevScrollpos = window.pageYOffset;
        var navbar = document.getElementById("navbar");

        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            
            if (prevScrollpos > currentScrollPos) {
                navbar.classList.remove("hidden");
            } else {
                navbar.classList.add("hidden");
            }
            
            prevScrollpos = currentScrollPos;
        }

// init Isotope
var $grid = $('.collection-list').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter-btn');
    $grid.isotope({ filter: filterValue });
  });
  
  var filterBtns = $('.filter-button-group').find('button');
  function resetFilterBtns(){
    filterBtns.each(function(){
      $(this).removeClass('active-filter-btn');
    });
  }



  
            
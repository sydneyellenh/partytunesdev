console.log('Custom.js is running');

jQuery(function(jQuery) {

    jQuery('.navbar .dropdown > a').click(function () {
        location.href = this.href;
    });

    // Toggle mobile menu


    jQuery(document).ready(function(){

        jQuery('.navbar-toggle').on('click', function(e){
            e.preventDefault();
            console.log('hello');
            document.querySelector('.navbar-collapse').toggle();
        });

    });

    //Add chevron down arrow to parent menu items with children
    jQuery('.menu-item-has-children > a').append('<i class="fas fa-chevron-down"></i>');

});
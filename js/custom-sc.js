console.log('Custom.JS is running');

jQuery(document).ready(function(){

    jQuery('.navbar-toggler').on('click', function(e){
        e.preventDefault();
        document('#navbar.collapse').addClass('.in');
    });

});


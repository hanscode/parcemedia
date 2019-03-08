(function($) {
$('#menu-primary li:has(ul)').addClass('dropdown dropdown-animate').attr('data-toggle', 'hover');
$('.sub-menu').addClass('list-group');
$('.sub-menu li > a').addClass('list-group-item list-group-item-action text-dark scroll-me');
$('.sub-menu li > a').removeClass('nav-link');
$('.widget-footer ul').addClass('list-unstyled');
$('.elm-wrapper > button').addClass('btn btn-dark btn-circle shadow');

} )( jQuery );
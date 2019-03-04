(function($) {
$('#menu-primary li:has(ul)').addClass('dropdown dropdown-animate').attr('data-toggle', 'hover');
$('.sub-menu').addClass('list-group');
$('.sub-menu li > a').addClass('list-group-item list-group-item-action text-dark scroll-me');
} )( jQuery );
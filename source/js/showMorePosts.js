$(document).ready(function () {
    $('#showMore').click(function() { 
        $('.post').addClass('hidden');
        $('.btn-showmore').addClass('hidden');
        $('.moreposts').removeClass('hidden');

        document.title = 'Api Posts';
    });
});
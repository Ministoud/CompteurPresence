$(function() {
    $('#toggleCharts').change(function() {
        if(!$(this).prop('checked')) {
            $('.graphic').each(function(index, element) {
                element.style.display = 'block';
            });
            $('.counter').each(function(index, element) {
                element.style.display = 'none';
            });

            loadAllCharts();
        } else {
            $('.counter').each(function(index, element) {
                element.style.display = 'block';
            });
            $('.graphic').each(function(index, element) {
                element.style.display = 'none';
            });

            initializeCounters();
        }
    });
});
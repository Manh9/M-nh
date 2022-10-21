$(function () {

    //Get the background color ofthe first list item
    var backgroundColor = $('li').css('background-color');

    // Write what the background color was after the list.
    $('li').css( {
        'background-Color' : '#c5a996',
        'border': '1px solid #fff',
        'color': '#000',
        'text-shadow': 'none',
        'font-family': 'Georgia',
        'padding-left': '+=75'
    });
});
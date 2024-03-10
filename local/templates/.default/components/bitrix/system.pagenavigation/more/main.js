$(document).ready(function(){

    $(document).on('click', '.load-more-items', function(){

        var targetContainer = $('.news__list'),
            url =  $('.load-more-items').attr('href');

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    $('.load-more-items').remove();

                    var elements = $(data).find('.news__item-cont'),
                        pagination = $(data).find('.load-more-items');

                    targetContainer.append(elements);
                    $('#pag').append(pagination);

                }
            });
        }

    });

});
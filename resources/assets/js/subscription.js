(function ($) {

    $('button.generate').on('click', function () {
        var $button = $(this);
        var $input = $button.closest('div.input-group').find('input');
        var key = $input.attr('name');
        var buttonHtml = $button.html();
        var $buttonIcon = $button.find('i');

        var loading = '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>';

        $.ajax({
            method: 'post',
            url: 'try-and-buy/regenerate',
            data: {keys: [key]},
            beforeSend: function () {
                Pace.restart();
                $button.attr('disabled', true);

                if($buttonIcon.length){
                    $buttonIcon.replaceWith(loading);
                    return;
                }

                $button.html(loading + ' ' + buttonHtml);
            },
            success: function (response) {
                $input.val(response[key]);
            },
            complete: function () {
                $button.attr('disabled', false);
                $button.html(buttonHtml);
            }
        });
    });

    $('button.validate').on('click', function () {

        var $button = $(this);
        var buttonHtml = $button.html();
        var loadingClass = 'fa fa-spinner fa-spin';
        var $buttonIcon = $button.find('i');

        if ($buttonIcon.length) {
            $buttonIcon.attr('class', loadingClass);
        } else {
            $button.html('<i class="' + loadingClass + '"></i>' + ' ' + buttonHtml);
        }
    });

    $('form.subscription').on('submit', function () {
        $('button.validate').attr('disabled', true);
    });

    $('.footable').footable();

})(jQuery);

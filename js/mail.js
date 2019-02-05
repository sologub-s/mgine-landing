(function( $ ){

    $(function() {

        $('.contact-us-form').each(function(){
            // Объявляем переменные (форма и кнопка отправки)
            var form = $(this);
            var btn = form.find('#submitForm');

            // Добавляем каждому проверяемому полю, указание что поле пустое
            form.find('.checkable-field').addClass('empty_field');

            // Функция проверки полей формы

            function checkInput(){
                form.find('.checkable-field').each(function(){
                    if($(this).val() != '' && $(this).val() !=' () _-____'){
                        // Если поле не пустое удаляем класс-указание
                        $(this).removeClass('empty_field');
                    } else {
                        // Если поле пустое добавляем класс-указание
                        $(this).addClass('empty_field');
                    }
                });
            }


            // Функция подсветки незаполненных полей
            function lightEmpty(){
                //form.find('.empty_field').css({'background':'#cc0000'});
                form.find('.empty_field').addClass('red-border');
                // Через полсекунды удаляем подсветку
                setTimeout(function(){
                    form.find('.empty_field').removeClass('red-border');
                }, 1000);
            }

            function showSuccessMessage () {
                /*
                $('.overlay').stop().fadeIn();
                $('.pop_up_success').fadeIn();
                */

                $('body').addClass('show-overlay');
                $('#successPopup').addClass('show');
            }

            // Проверка в режиме реального времени

            setInterval(function(){
                // Запускаем функцию проверки полей на заполненность
                checkInput();
                // Считаем к-во незаполненных полей
                var sizeEmpty = form.find('.empty_field').length;
                // Вешаем условие-тригер на кнопку отправки формы
                if(sizeEmpty > 0){
                    if(btn.hasClass('disabled')){
                        return false
                    } else {
                        btn.addClass('disabled')
                    }
                } else {
                    btn.removeClass('disabled')
                }
            },500);


            // Событие клика по кнопке отправить
            btn.click(function(){
                /*
                if ($(this).hasClass('grayscale')) {
                    return false;
                }
                */
                if($(this).hasClass('disabled')){
                    // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
                    lightEmpty();
                    return false;
                } else {
                    // Все хорошо, все заполнено, отправляем форму
                    //form.submit();

                    $.ajax('/?service', {
                        type: 'POST',
                        async: true,
                        beforeSend: function () {
                            btn.attr("disabled", true);
                            //btn.addClass('grayscale');
                        },
                        dataType: 'json',
                        data: {
                            your_name: form.find("input[name='your_name']").length ? form.find("input[name='your_name']").val() : '-',
                            your_email: form.find("input[name='your_email']").length ? form.find("input[name='your_email']").val() : '-',
                            message: form.find("textarea[name='message']").length ? form.find("textarea[name='message']").val() : '-',
                            submitted: form.find("input[name='submitted']").val()
                        },
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (jqXHR, text_status) {
                            console.error(text_status);
                        },
                        complete: function () {
                            btn.attr("disabled", false);
                            //btn.removeClass('grayscale');
                            //$('.closepopuplink').click();
                            setTimeout(showSuccessMessage, 200);
                            form[0].reset();
                        }
                    });

                    return false;
                }
            });
        });
    });

})( jQuery );
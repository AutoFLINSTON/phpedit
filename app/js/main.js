$(document).ready(function() {
    $('input, textarea').placeholder();
});

var myWork = (function(){


    var init = function () {
        _setUpListeners();
    };


    var _setUpListeners = function () {
        $('#new-project-popup').on('submit', _formSubmit);
    };


    var _formSubmit = function (e) {
        console.log('отправка формы');
        e.preventDefault();

        var form = $(this),
                url = "add_project.php",
                defObj = _ajaxForm(form, url);
                //работа с ответом от сервера
    };


    var _ajaxForm = function (form, url) {
        //console.log('ajax запрос, но с проверкой!');
        if (!validation.validateForm(form)) {
            return false;
        }
        //работа php-файла "contact_me.php"
    };



    return {
        init : init
    };


}());

myWork.init();
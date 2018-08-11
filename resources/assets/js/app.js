
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

var notification = $('#notification')
$('.add-to-cart').click(function () {
    var id = $(this).data('id')
    axios.post('/add-to-cart',{id: id})
        .then(function () {
            notification.find('.dialog').text('Your product have been successfully added.');
            notification.find('.button-close').text('Keep shopping');
            notification.find('.button-success').text('Go to Cart');
            notification.find('.button-success').data('url', '/payment');
            $('#notification').modal('show');
        })
        .catch(function (error) {
            switch (error.response.status) {
                case 401:
                    notification.find('.dialog').text('Your need been a registered user.');
                    notification.find('.button-close').hide();
                    notification.find('.button-success').text('Go to Login');
                    notification.find('.button-success').data('url', '/');
                    $('#notification').modal('show');
                    break;
                default:
                    notification.find('.dialog').text('Someting wrong is happening :(.');
                    notification.find('.button-close').hide();
                    notification.find('.button-success').hide();
                    break;
            }
            notification.modal('show');
        })
});
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/* require('./bootstrap');

window.Vue = require('vue'); */

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/* Vue.component('example-component', require('./components/ExampleComponent.vue').default); */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* const app = new Vue({
    el: '#app',
}); */
$(".preview").show();
$(".newReview").show();

$(".jpnav .nav-link").on("click", function() {
    $(".jp_tabPage").hide();
    let onglet = $(this).attr("data-ong");
    $(".active").removeClass("active");
    $(this).addClass("active");
    console.log(onglet);
    $("." + onglet).show();
    if (onglet == "description") {
        chartJP();
    }
});


function chartJP() {
    /* Add a basic data series with six labels and values */
    var data = {
        labels: ['1', '2', '3', '4', '5', '6'],
        series: [{
            data: [1, 2, 3, 5, 8, 13]
        }]
    };

    /* Set some base options (settings will override the default settings in Chartist.js *see default settings*). We are adding a basic label interpolation function for the xAxis labels. */
    var options = {
        axisX: {
            labelInterpolationFnc: function(value) {
                return +value;
            }
        }
    };

    /* Now we can specify multiple responsive settings that will override the base settings based on order and if the media queries match. In this example we are changing the visibility of dots and lines as well as use different label interpolations for space reasons. */
    var responsiveOptions = [
        ['screen and (min-width: 641px) and (max-width: 1024px)', {
            showPoint: false,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return +value;
                }
            }
        }],
        ['screen and (max-width: 640px)', {
            showLine: false,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return +value;
                }
            }
        }]
    ];

    /* Initialize the chart with the above settings */
    new Chartist.Line('#my-jpchart1', data, options, responsiveOptions);
    new Chartist.Line('#my-jpchart2', data, options, responsiveOptions);
    new Chartist.Line('#my-jpchart3', data, options, responsiveOptions);
}
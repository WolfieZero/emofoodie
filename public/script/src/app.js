(function() {
    'use strict';


    /**
     * Main Angular app
     * @type {angular.module}
     */
    var app = angular.module('emoFoodie', ['ngResource']);





    // Controller: Log
    // =========================================================================

    app.controller('ViewLogController', ['$resource', function($resource) {

        var vm = this;

        // Get the logs from the API
        // ---------------------------------------------------------------------

        var Logs = $resource('api/log').query();
        vm.items = Logs;

    }]);





    // Controller: Food
    // =========================================================================

    app.controller('AddLogController', ['$resource', function($resource) {

        var vm = this;

        vm.food_values = [];
        vm.emotion_values = [];

        // Get lists from API
        // ---------------------------------------------------------------------

        var Foods = $resource('api/food').query();
        vm.foods = Foods;

        var Emotions = $resource('api/emotion').query();
        vm.emotions = Emotions;


        vm.addEmotionValue = function() {
            alert(vm.emotion_val);
            vm.emotion_values.push(vm.emotion_val);
            vm.emotion_val = '';
        };


        // Store logs into the API
        // ---------------------------------------------------------------------

        var StoreLog = function() {
            vm.items.push({
                'note': 'boom'
            });
        };
        vm.store = StoreLog;

    }]);


})();

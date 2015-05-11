(function() {
    'use strict';


    /**
     * Main Angular app
     * @type {angular.module}
     */
    var app = angular.module('emoFoodie', ['ngResource']);





    // Controller: Log
    // =========================================================================

    app.controller('LogController', ['$resource', function($resource) {

        // Get the logs from the API
        var Logs = $resource('api/log').query();
        this.items = Logs;

    }]);


})();

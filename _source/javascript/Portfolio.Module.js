(function () {
  'use strict';

  angular
    .module('templates', [])

  angular
    .module('orientanda', ['templates', 'ngMaterial'])

    .config(($mdThemingProvider) => {
      $mdThemingProvider.theme('default')
      .primaryPalette('deep-orange')
      .accentPalette('green')
    })

}());

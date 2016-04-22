(function() {
  'use strict';

  angular
    .module('orientanda')
    .controller('NavCtrl', NavCtrl);

  NavCtrl.$inject = ['$mdSidenav'];

  function NavCtrl($mdSidenav){
    let ctrl = this;

    /*  bindings  */
    ctrl.toggleMenu = toggleMenu;
    ctrl.navigateTo = navigateTo;

    ctrl.tabs = [
      {title: 'Home', content: 'tabs/home.tpl.html'},
      {title: 'The Team', content: 'tabs/team.tpl.html'},
      {title: 'Etc', content: 'tabs/etc.tpl.html'}
    ];

    ctrl.currentTab = 0;


    /*  methods  */
    let filter = { images: false };


    /*
     toggles if the menu is open (on sml screens)
     */
    function toggleMenu() {
      event.stopPropagation();
      $mdSidenav('menu').toggle()
    }


    /*
     changes the current tab of the browser
     */
    function navigateTo(newTab){
      event.stopPropagation();
      ctrl.currentTab = newTab;
      toggleMenu()
    }

  }

}());

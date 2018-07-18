var app = angular.module('APP',[])
.filter('to_trusted', ['$sce', function($sce){
    return function(text) {
        return $sce.trustAsHtml(text);
    };
}])
.filter('reverse', function() {
    return function(items) {
        return items.slice().reverse(); 
    };
})
.filter('filterWithOr', function ($filter) {
  var comparator = function (actual, expected) {
    if (angular.isUndefined(actual)) {
      // No substring matching against `undefined`
      return false;
    }
    if ((actual === null) || (expected === null)) {
      // No substring matching against `null`; only match against `null`
      return actual === expected;
    }
    if ((angular.isObject(expected) && !angular.isArray(expected)) || (angular.isObject(actual) && !hasCustomToString(actual))) {
      // Should not compare primitives against objects, unless they have custom `toString` method
      return false;
    }


    actual = angular.lowercase('' + actual);
    if (angular.isArray(expected)) {
      var match = false;
      expected.forEach(function (e) {
       // console.log('forEach')
       // console.log(e)
        e = angular.lowercase('' + e);
        if (actual.indexOf(e) !== -1) {
          match = true;
        }
      });
      return match;
    } else {
      expected = angular.lowercase('' + expected);
      return actual.indexOf(expected) !== -1;
    }
  };
  return function (array, expression) {
    return $filter('filter')(array, expression, comparator);
  };
});


app.controller('MainCtrl', function($rootScope, $scope) {
    $scope.myLang = $('html').attr('lang');
    $scope.products = JSON.parse($("#products").html());
    var vid = document.getElementById("Video"); 
    var vid3 = document.getElementById("Video3"); 
    $scope.state = 'p1';
  $scope.next = function() {
      vid.pause(); vid3.pause();
      if($scope.state == 'p1') { $scope.state = 'p2'} else
      if($scope.state == 'p2') { $scope.state = 'p3'; vid3.play()} else
      if($scope.state == 'p3') { $scope.state = 'p1'; vid.play();}
    }
  $scope.prev = function() {
      vid.pause(); vid3.pause();
      if($scope.state == 'p1') { $scope.state = 'p3'; vid3.play();} else
      if($scope.state == 'p2') { $scope.state = 'p1'; vid.play();} else
      if($scope.state == 'p3') { $scope.state = 'p2'}
    }
   $scope.goto = function(state) {
      vid.pause(); vid3.pause();
      if( state == 1) { $scope.state = 'p1'; vid.play();} else
      if( state == 2) { $scope.state = 'p2'; } else
      if( state == 3) { $scope.state = 'p3'; vid3.play();}
   }
   
    if(window.location.hash == '#b2s') {
      $scope.goto(3)

    } else if ( window.location.hash == '#woman'){
      $scope.goto(2)
    }


});
 app.directive('plusoneButton', function() {
 	return {
 		restrict: 'E', 
 		scope: {}, 
 		templateUrl: 'js/directives/plusoneButton.html', 
 		link: function(scope, element, attrs) {
 			scope.like = function() {
 				element.toggleClass('btn-like'); 
 			} 
 		} 
 	}; 
 }); 
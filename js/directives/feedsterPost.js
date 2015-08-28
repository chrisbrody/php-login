app.directive('feedsterPost', function() {
	return {
		restrict: 'E',
		scope: {
			info: '=info'
		},
		templateUrl: 'js/directives/feedsterPost.html'
	}
})
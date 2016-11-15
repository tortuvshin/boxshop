
'use strict';

var angular = require('bella-bower/angular/angular');

var app=angular.module('Bella');

//Template service
app.factory('Templates',function(){
	return {
		noticeDescription:function(actions){
			return function(notice){
				var filter={},template=(actions&&actions[notice.action_type_id]&&actions[notice.action_type_id].notice_template)||[];
				template.match(/\[[^\]]+\]/g).forEach(function(value){
					filter[value.replace(/\[|\]/g,'')]=value;
				});
				for(var item in filter)
					template=template.replace(filter[item],notice[item]||item);
				return template;
			};
		},
		noticeLink:function(actions){
			return function(notice){
				var link=(actions&&actions[notice.action_type_id]&&actions[notice.action_type_id].link)||'';
				return link.replace('source_id',notice.source_id);
			};
		}
	};
});

// Auto Complete Busqueda general
app.controller('AutoCompleteCtrl', function($scope,$http,$location) {

	//Envia formulario
	$scope.selectedItem = function(result){

		if (result.kind === 'suggestions') {

			window.location = '/products/'+result.originalObject.id;

		}else if(result.kind === 'categories'){

			var filter = {"categories":{"name":result.title,"id":result.originalObject.id}};
			$location.search('refine','['+JSON.stringify(filter)+']');
			$location.path('/products/');
            window.location = $location.absUrl();

		}else{

			$('#searchForm').submit();

		}
	};
});

//# sourceMappingURL=app.js.map

//# sourceMappingURL=app.js.map

var App = angular.module('App', [])
.controller('TasksController', TasksController);

function TasksController() {
	this.inputText = "";
	this.testInput = [
		"Frist Time",
	];

	this.mobile = {
		roda: "empat",
		bensin: "premium"
	};

	this.AddText = function(){
		this.testInput.push(this.inputText);
	};
}
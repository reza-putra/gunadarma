var App = angular.module('App', []);
App.controller('TasksController',  TasksController);

function TasksController(){
	this.inputText = "";
	this.testInput = [
	"data1",
	"data2",
	"data3",
	];

	this.mobile = {
		roda: "empat",
		bensin: "premium"
	};

	this.Addtext = function(){
		this.testInput.push(this.inputText);
		};
}
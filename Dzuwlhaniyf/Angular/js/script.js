var App= angular.module('App',[]).controller('TasksController',TasksController);

function TasksController(){

this.arraya = ["data1","data2","data3"];

this.mobile = {
	roda:"empat",
	bensin:"premium"
};

this.AddText = function(){
	this.arraya.push(this.Inputtext);
};

}
var App = angular.module('App', [])
.controller('TasksController', TasksController);

function TasksController($http, $scope) {

  this.tasks = [];
  this.api = "http://localhost/gunadarma/angular";

  // Mengambil data dari database dengan method get
  $http.get(this.api + "?method=get")
  .then(function(resp){
    $scope.list = resp.data;
    console.log($scope.list);
  });

  // Function untuk menambahkan todo baru ke server
  this.add = function(task, $index) {
    if ( task == '' || typeof task === 'undefined' ) {
      return false;
    }

    var data = {
      action: task,
      done: false,
    };

    $http.get(this.api+"?method=post&&action="+task+"&&id="+this.getID())
    .then( function(resp){
      $scope.list.push(resp.data);
      this.newTask = '';
    })
  };

  this.getID = function(){
    var dt = new Date();
    return dt.getMilliseconds();
  }





  this.completedTasks = [
    "pertemuan 6 membahas php da mysql",
    "pertmuan 5 membahas phh dasar",
  ];

  this.markAsComplete = function(index) {
    var task = this.tasks[index];
    this.tasks.splice(index, 1);
    this.completedTasks.push(task);
  };

  this.markAsIncomplete = function(index) {
    var task = this.completedTasks[index];
    this.completedTasks.splice(index, 1);
    this.tasks.push(task);
  };

  this.getTotalTasks = function() {
    return this.tasks.length + this.completedTasks.length;
  };

  this.calculatePercent = function(count) {
    var total = this.getTotalTasks();
    return Math.round(100 / total * count);
  };

}

var App = angular.module('App', [])
.controller('TasksController', TasksController);

function TasksController() {

  this.tasks = [
    'Feed the imaginary gold fish.',
    'Walk the non existant dog.',
    'Have a celebratory beer!'
  ];

  this.completedTasks = [
    'Start writing an example AngularJS todo app.',
    'Add the ability to add new tasks.',
    'Add the ability to mark tasks as completed.',
    'Add the ability to undo completed tasks.',
    'Finish writing an example AngularJS todo app.',
    'Write my first CodePen.'
  ];

  this.add = function(task) {
    if ( task == '' || typeof task === 'undefined' ) {
      return false;
    }

    this.tasks.push(task);
    this.newTask = '';
  };

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

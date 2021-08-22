<?php
include __DIR__ . "/data.php";
/*
INSTRUCTIONS:
This exam tests you on your familiarity with javascript and angular JS.

Item #1:
    host:testing.brightideastechnology.com
    username:exam_user or exam_user2
    password:exam_password
    database name:exam_db

    SQL Editor: http://testing.brightideastechnology.com/tools/testing-adminer.php

    Using the details above, create a table with the format <last name>_<first name initial>_table (santos_e_table) with the following fields:

    student_id (int)
    first_name (varchar)
    last_name (varchar)
    date_modified (datetime)

*/
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam 4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <body ng-app="myApp">
        <div ng-controller="myCtrl" class="container">
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="panel panel-primary"> 
                    <div class="panel-heading"> <h3 class="panel-title">{{btnCaption}}</h3> 
                    
                </div>
                    <div class="panel-body">

                    <form>
                      <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input ng-model="lastName" class="form-control" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <label for="firstName">First name</label>
                        <input ng-model="firstName" class="form-control" placeholder="First Name">
                      </div>
                      <button type="submit" style="float: right;" class="btn btn-primary">{{btnCaption}}</button>
                    </form>
            </div>
                </div>
              </div>
              <div class="col-md-7">
                <table border="1" cellspacing='0' cellpadding='0' class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan='4'><center>Students</center></th>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Date Modified</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item #2:
                        Display the following data below using the scope variable studentList. On the date modified, format the value to mm/dd/yyy.
                        NOTE: Use only angular JS functions/directives

                        Sample structure:
                          [0:{student_id:"1",
                              first_name:"Sarah",
                              last_name:"Geronimo",
                              date_modified: "2012-07-15 12:00:00"
                          }...];
                    -->
                    <!-- Item #2: Your output here -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <center>
                                <button class="btn btn-info" ng-click="updateData()">Update</button>
                                <!-- Upon clicking the update button, The first_name and last_name values in this row should appear on their corresponding textboxes on the left (or above depending on the screen resolution) and change the "Add" button name to "Update".  -->
                                |
                                <button class="btn btn-danger" ng-click="deleteData()">Delete</button>
                            </center>
                        </td>
                    </tr>
                    <!-- End Item #2 -->
                </tbody>
            </table>
              </div>
            </div>
        </div>
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http) {
                $scope.studentList = [];
                $scope.btnCaption  = "Add";
                fetchStudentData();

                /* A function that fetch the data for studentList using the angular directive $http
                    The data will come from the data.php file
                */
                function fetchStudentData(){
                    $http({
                        method:"POST",
                        url:"data.php",
                        header:{
                            'Content-Type': 'application/json'
                        },
                        data:{
                            "process": "fetchData"
                        }
                    }).then(function(response){
                        $scope.studentList = response.data; //data came from data.php
                    });
                }
                /*
                    Item #3: Create a function that inserts new student to the database using the
                        angular JS $http request
                    NOTE: Create your sql query on data.php file
                          Use the function fetchData() as reference
                */
                function insertData(){
                    var firstName = $scope.firstName;
                    var lastName = $scope.lastName;
                    $http({});
                }

                /*
                    Item #4: Create a function that updates student data using the
                        angular JS $http request
                    NOTE: Create your sql query on data.php file
                          Use the function fetchData() as reference.
                */
                function updateData(){ /* Upon update the date_modified field must change. */
                    $http({});
                }

                /*
                    Item #5: Create a function that deletes student data using the
                        angular JS $http request
                    NOTE: Create your sql query on data.php file
                          Use the function fetchData() as reference
                */
                function deleteData(){
                    $http({});
                }
            });
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

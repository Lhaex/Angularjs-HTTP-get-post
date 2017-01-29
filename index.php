<!DOCTYPE html>
<html ng-app="Jr" >
<head>

  <title>Angular</title>
</head>
<body ng-controller="ctrlr">
FirstName:<input type="text" ng-model="fname">LastName:<input type="text" ng-model="lname">Course:<input type="text" ng-model="cr"><br><br>
   <input type="button" value="Add" ng-click="insertData()">
    <br><br>

   <table border=9>
       <tr>
				<td>User ID</td>
				<td>First Name</td>
                <td>last Name</td>
                <td>Course</td>
			</tr>
			<tr ng-repeat="x in y">
				<td>c17-0{{x.id}}</td>
				<td>{{x.fn}}</td>
                <td>{{x.ln}}</td>
                <td>{{x.course}}</td>
			</tr>
		</table>
     <script src="js/angular.min.js"></script>
  <script src="js/index.js"></script>
</body>
    
 
</html>
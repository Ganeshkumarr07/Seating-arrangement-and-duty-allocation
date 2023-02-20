<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <style type="text/css">
  	.form {
  		margin: 0;
  		width: 50%;
  		padding: 70px 20px 50px 150px;


  	}
  </style>
</head>
<body>
	<center>
	<form>
		<div class="form">
		<div class="form-group">
			<div class="container mb-3 mt-3 border p-5">
				<div class="h2">Student Enrollment</div>
				<label class="form-label">Student Name</label>
				<input type="text" name="n1" class="form-control" placeholder="Enter your name">
				<div class="row">
					<div class="col">
						<label class="form-label">Degree</label>
						<select class="form-select" aria-label="Default select example">
  <option selected> select</option>
  <option value="1">B.E</option>
  <option value="2">B.TECH</option>
</select></div>
<div class="col">
						<label class="form-label">Department</label>
						<select class="form-select" aria-label="Default select example">
  <option selected> select</option>
  <option value="1">CSE</option>
  <option value="2">IT</option>
</select></div>
<div class="row">
<div class="col">
						<label class="form-label">Year</label>
						<select class="form-select" aria-label="Default select example">
  <option selected> select</option>
  <option value="1">3rd</option>
  <option value="2">Final Year</option>
</select></div>
<div class="col">
						<label class="form-label">Semester</label>
						<select class="form-select" aria-label="Default select example"><br><br>
  <option selected> select</option>
  <option value="1">6th</option>
  <option value="2">7th</option>
</select></div>
<button type="submit" class="btn btn-info form-control">Enroll</button><br>
<button type="cancel" class="btn btn-danger form-control">Cancel</button></div>
	</form></center>

</body>
</html>
<?php include 'inc/header.php';?>
<div class="create">
	<h2 class="page-header">Create Job Listing</h2>
	<form method="POST" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" name="company" class="form-control">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
        		<?php foreach($categories as $category): ?>
        			<option value="<?php echo $category->id; ?>"><?php echo $category->name;?></option>
        		<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" name="job_title" class="form-control">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" name="location" class="form-control">
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" name="salary" class="form-control">
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" name="contact_user" class="form-control">
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" name="contact_email" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="submit">
	</form>
	</div>
<?php include 'inc/footer.php';?>
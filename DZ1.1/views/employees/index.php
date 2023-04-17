<p>Here is a list of all Employees:</p>

<?php foreach($employees as $employee) { ?>
  <p>
    <?php echo $employee->firstName ." ".$employee->lastName  ?>
    <a href='?controller=employees&action=show&id=<?php echo $employee->employeeNumber; ?>'> See More</a>
  </p>
<?php } ?>

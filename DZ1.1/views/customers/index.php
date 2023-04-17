<p>Here is a list of all Customers:</p>

<?php foreach($customers as $customer) { ?>
  <p>
    <?php echo $customer->Name ." ".$customer->LastName  ?>
    <a href='?controller=customers&action=show&id=<?php echo $customer->ID_CUSTOMER; ?>'> See More</a>
  </p>
<?php } ?>

<p>Here is a list of all Orders:</p>

<?php foreach($orders as $order) { ?>
  <p>
    <?php echo $order->orderDate ." ".$order->requiredDate  ?>
    <a href='?controller=orders&action=show&id=<?php echo $order->orderNumber; ?>'> See More</a>
  </p>
<?php } ?>

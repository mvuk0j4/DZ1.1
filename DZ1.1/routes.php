<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  case 'customers':
        require_once('models/customer.php');
		$controller = new CustomerController();
      break;
	   case 'employees':
        require_once('models/employees.php');
		$controller = new EmployeesController();
      break;
      case 'orders':
        // we need the model to query the database later in the controller
        require_once('models/orders.php');
        $controller = new OrdersController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
                       'posts' 		=> ['index', 'show'],
					   'customers' => ['index', 'show'],
					   'employees' 	=> ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>

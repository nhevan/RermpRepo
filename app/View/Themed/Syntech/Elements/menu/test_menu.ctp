<div class="nav-collapse" id="nav-container">
	<ul class="nav nav-pills nav-justified" style="margin-bottom:20px;">
	  
	  <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	      Districts <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
	      <li><?php echo $this->Html->link(__('Gazipur'), array('controller' => 'districts', 'action' => 'overview',1 )); ?> </li>
	      <li><?php echo $this->Html->link(__('Mymensingh'), array('controller' => 'districts', 'action' => 'overview',2 )); ?> </li>

	    </ul>
	  </li>
	  
	   <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	      Accounts <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
	      <li><?php echo $this->Html->link(__('List All'), array('controller' => 'accounts', 'action' => 'index' )); ?> </li>
	      <li><?php echo $this->Html->link(__('Add Division Account'), array('controller' => 'accounts', 'action' => 'addDivisionAccount' )); ?> </li>
	      <li><?php echo $this->Html->link(__('Add District Account'), array('controller' => 'accounts', 'action' => 'addDistrictAccount' )); ?> </li>
	      <li><?php echo $this->Html->link(__('Add Upazilla Account'), array('controller' => 'accounts', 'action' => 'addUpazillaAccount' )); ?> </li>
	      <li><?php echo $this->Html->link(__('Add Union Account'), array('controller' => 'accounts', 'action' => 'addUnionAccount' )); ?> </li>
 	    </ul>
	  </li>
	  
	  
	  <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	      Transactions <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
	      <li><?php echo $this->Html->link(__('Transfer Fund to Division'), array('controller' => 'transactions', 'action' => 'transferMoneyToDivision')); ?> </li>
	      <li><?php echo $this->Html->link(__('Transfer Fund to District'), array('controller' => 'transactions', 'action' => 'transferMoneyToDistrict')); ?> </li>
	      <li><?php echo $this->Html->link(__('Transfer Fund to Upazilla'), array('controller' => 'transactions', 'action' => 'transferMoneyToUpazilla')); ?> </li>
	      <li><?php echo $this->Html->link(__('Transfer Fund to Union'), array('controller' => 'transactions', 'action' => 'transferMoneyToUnion')); ?> </li>
	      <li><?php echo $this->Html->link(__('Transfer Fund to Employee'), array('controller' => 'transactions', 'action' => 'transferMoneyToEmployee')); ?> </li>
	    </ul>
	  </li>
	  
	  <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	      Add Users <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Add Division User'), array('controller' => 'users', 'action' => 'addDivisionUser')); ?> </li>
			<li><?php echo $this->Html->link(__('Add District User'), array('controller' => 'users', 'action' => 'addDistrictUser')); ?> </li>
			<li><?php echo $this->Html->link(__('Add Upazilla User'), array('controller' => 'users', 'action' => 'addUpazillaUser')); ?> </li>
			<li><?php echo $this->Html->link(__('Add Union User'), array('controller' => 'users', 'action' => 'addUnionUser')); ?> </li>
	    </ul>
	  </li>
	  
	  
	  <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	      Add Elements <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Add Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Add District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Add Upazilla'), array('controller' => 'upazillas', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Add Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Add Employee'), array('controller' => 'employees', 'action' => 'addEmployee')); ?> </li>
	     </ul>
	  </li>
	</ul>
</div>
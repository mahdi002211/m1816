<?php

?>
<?php
						if($_SESSION['admin'] == 1 || $_SESSION['admin'] == 0)
						{
						?>
<ul class="breadcrumb">
							<li>
								
<a href="projects.php">ADD Projects</a>

<a href="#modal-table" role="button" id="addproject" class="green" data-toggle="modal"> Add project </a>

<a href="clients.php"> ADD Clients </a>
<a href="tickets.php">ADD Tickets</a>								
<a href="messages.php"> ADD Messages </a>
<a href="invoices.php">ADD Invoices</a>
							</li>							
						</ul><!-- .breadcrumb -->
						<?php
						}
						?>
						
						
						
						
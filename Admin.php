<?php 
include_once 'header.php';
require_once 'includes/dbh.inc.php';


 ?>
	<section class="w3-container">
		<div class="profile-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-m-12">
						<h2 class="">Roles and permissions</h2>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <?php
                           include 'includes/getrole.inc.php';
                        ?>
                    </div>
                </div>
                <div class="row table-header">
                    <div class="col-xs-2 text-center">
                        <h4>
                            Delete
                        </h4>
                    </div>
                    <div class="col-xs-5 text-center">
                        <h4>
                            Role Description
                        </h4>
                    </div>
                    <div class="col-xs-5 text-center">
                        <h4>
                            Permissions
                        </h4>
                    </div>
                </div>  
                <!--Row for adding Roles with permissions-->
                <div class="row align-items-center">
                    <form action="">
                        <div class="col-xs-2 text-center roles_table_column align-self-center">
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col-xs-5 text-center roles_table_column">
                            <input type="text" name="role_name" class="form-control form-control-lg">
                        </div>
                        <div class="col-xs-5 text-center roles_table_column">
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="checkbox" class="form-check-input">
                                    <span>Profile Section</span>
                                </div>
                                <div class="col-xs-6">
                                    <input type="checkbox" class="form-check-input">
                                    <span>App Section</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="checkbox" class="form-check-input">
                                    <span>Blog Section</span>
                                </div>
                                <div class="col-xs-6">
                                    <input type="checkbox" class="form-check-input">
                                    <span>Role Section</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>      
            </div>            
		</div>					
	</section>
 <?php 
include_once 'footer.php';
  ?>
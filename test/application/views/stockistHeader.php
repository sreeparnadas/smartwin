<div class="d-flex col-12">
    <div class="my-flex-item col-12">

                
               
                
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    	<a class="navbar-brand" href="#">SmartWin</a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      	<li class="nav-item">
				        <a class="nav-link" ng-href="{{base_url + '#!cpanel'}}">Home</a>
				    </li>
				     <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				            Master
				        </a>
				        <div class="dropdown-menu">
				            <a class="dropdown-item" href="#!terminal">Terminal</a>
				        </div>
				    </li>
			     
				      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					            Limits
					        </a>
					        <div class="dropdown-menu">
					            <a class="dropdown-item" href="#!trlim">Terminal</a>
					        </div>
					    </li>

				         <li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				                Report
				            </a>
				            <div class="dropdown-menu">
				                <a class="dropdown-item" href="#!custSalesReportCtrl"></i>Customer Sales Report</a>
				                <a class="dropdown-item" href="#!barcodereport"></i>Barcode Report</a>
				            </div>
				        </li>
			        
			        
				        <li class="nav-item">
				            <a class="nav-link" ng-href="#!result">Result</a>
				        </li>

						
			    </ul>
				<ul class="nav navbar-nav navbar-right">
						<li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<i class="fas fa-power-off"></i>
							</a>
				            <div class="dropdown-menu">
								<a class="dropdown-item" href="#" ng-click="logoutCpanel()"><b>Logout</b></a>
								<a class="dropdown-item" href="#" type="button" data-toggle="modal" data-target="#reset-modal">Reset</a>
				            </div>
				        </li>
			     
				</ul>
				
		    <!-- <form class="form-inline my-2 my-lg-0">
		      <a class="nav-link btn btn-info text-white" href="#" ng-click="logoutCpanel()"><b>Logout</b></a>
		    </form> -->
		  </div>
		</nav>    
        

		 <!-- The modal -->
                            <div class="modal fade" id="reset-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="modalLabel">Reset Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
	                            			<div class="container">
												<form name="resetpsw_form">
														
														<div class="form-group">
														<label for="pwd">Password:</label>
														<input type="password" class="form-control" ng-model="resetData.user_password"  placeholder="Enter password" required>
														</div>
														<button type="submit" ng-click="resetPassword(resetData)"  ng-disabled="resetpsw_form.$invalid" class="btn btn-primary">Reset</button>
												</form>
											</div>
										</div>
										
                                    </div>
                                </div>
                            </div>
                
    </div>
</div>



        
        
                    

        
        
        
        
        
        
        
        
        
        

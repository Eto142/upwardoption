@include('manager.header')
@include('manager.navbar')
<!-- Content wrapper start -->
<div class="container">
	<!-- Row start -->
	<div class="row gx-3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card card-cover rounded-2">
				<div class="contact-card p-3">
					<div class="d-flex justify-content-end mb-2">
						<a href="{{route('clear.account',$userProfile->id)}}" class="clear-account-card btn btn-danger" >
							<i class="bi bi-trash"></i> Clear Account
						</a>
					</div>

					<h5>{{$userProfile->name}} {{$userProfile->lname}}</h5>

					<div class="row mb-3">
						<div class="col-md-6">
							<ul class="list-group mb-3">
								<li class="list-group-item d-flex justify-content-between">
									<span>Email: </span>
									<span>{{$userProfile->email}}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span>Country: </span>
									<span>{{$userProfile->country}}</span>
								</li>
								
									<li class="list-group-item d-flex justify-content-between">
									<span>Signal Strength: </span>
									<span>{{$userProfile->signal_strength}}%</span>
								</li>
								
									<li class="list-group-item d-flex justify-content-between">
									<span>Withdrawal Code: </span>
									<span>{{$userProfile->withdrawal_code}}</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-group mb-3">
								<li class="list-group-item d-flex justify-content-between">
									<span>Total Balance: </span>
									<span>{{$userProfile->currency}}{{$user_balance}}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span>Total Profit: </span>
									<span>{{$userProfile->currency}}{{$totalProfit}}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span>Total Deposit: </span>
									<span>{{$userProfile->currency}}{{$totalDeposit}}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span>Total Withdrawals: </span>
									<span>{{$userProfile->currency}}{{$totalWithdrawal}}</span>
								</li>
							
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>





	<div class="col-xxl-12">
		<!-- Card start -->
		<div class="card m-2">
			<div class="card-body">
				<!-- Modal XL -->
				<button type="button" class="btn btn-success" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter">
					Add Deposit
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Add User Deposit
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-deposit')}}" method="POST">
								@csrf
								<div class="modal-body">
									<label class="form-label">Amount</label>
									<input type="hidden" name="email" value="{{$userProfile->email}}" />
									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<input type="hidden" class="form-control" id="exampleInputEmail1"
										name="payment_method" value="Bitcoin">
									<input type="date" name="deposit_date" placeholder="e.g 3 days"
										class="form-control" />
									<div class="m-0">
										<label class="form-label">Transaction Id</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-success">
										Add User Deposit
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>




				<!-- Modal XL -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter2">
					Add Bonus
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Add {{$userProfile->name}} Bonus
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-referral')}}" method="POST">
								@csrf
								<div class="modal-body">
									<input type="hidden" name="email" value="{{$userProfile->email}}" />

									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<label class="form-label">Amount</label>
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-danger">
										Add Bonus
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Card end -->
	</div>
	<!-- Card end -->


	<div class="col-xxl-12">
		<!-- Card start -->
		<div class="card m-2">
			<div class="card-body">
				<!-- Modal XL -->
				<button type="button" class="btn btn-success" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter3">
					Top Up Profit
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter3" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Top Up {{$userProfile->name}} Profit
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-profit')}}" method="POST">
								@csrf
								<div class="modal-body">
									<label class="form-label">Amount</label>
									<input type="hidden" name="email" value="{{$userProfile->email}}" />
									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-success">
										Top Up Profit
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>




				<!-- Modal XL -->
				<button type="button" class="btn btn-danger" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter4">
					Debit Profit
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter4" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Debit {{$userProfile->name}} Total Balance
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/debit-profit')}}" method="POST">
								@csrf
								<div class="modal-body">
									<input type="hidden" name="email" value="{{$userProfile->email}}" />

									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<label class="form-label">Amount</label>
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-danger">
										Debit Total Balance
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- Card end -->
	</div>
	<!-- Card end -->
				
				
				
					
				<div class="col-xxl-12">
					<!-- Card start -->
					<div class="card m-2">
						<div class="card-body">
							<!-- Modal XL -->
							<button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="#exampleModalCenter6">
								 Signal Strength
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter6" tabindex="-1"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">
												Update {{$userProfile->name}} Signal Strength
											</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="{{ route('signal.strength',$userProfile->id)}}" method="POST">
											@csrf
											<div class="modal-body">
												<label class="form-label">Amount</label>
												<input type="number" step="0.0000000001" name="signal_strength"
													class="form-control" value="{{$userProfile->signal_strength}}"
													min="1" max="100" style="color:blue" placeholder="E.g 40 " />


											</div>
											<div class="modal-footer">

												<button type="submit" class="btn btn-success">
													Update Signal Strength
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>

					
							<button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="#exampleModalCenter5">
								 Withdrawal Code
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter5" tabindex="-1"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">
												Update {{$userProfile->name}} Withdrawal Code
											</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="{{ route('update.withdrawal_code',$userProfile->id)}}" method="POST">
											@csrf
											<div class="modal-body">
												<label class="form-label">Amount</label>
												<input type="number" step="0.0000000001" name="withdrawal_code"
													class="form-control" value="{{$userProfile->withdrawal_code}}"
													min="" max="" style="color:blue" placeholder="E.g 40 " />


											</div>
											<div class="modal-footer">

												<button type="submit" class="btn btn-success">
													Update Withdrawal Code
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
				
			</div>
		</div>
		
			<!--<div class="col-xxl-12">-->
					<!-- Card start -->
			<!--		<div class="card m-2">-->
			<!--			<div class="card-body">-->
							<!-- Modal XL -->
							
			<!--				<a href="{{ route('user.suspension', $userProfile->id) }}" >-->
			<!--				<button type="button" class="btn btn-danger" >-->
			<!--					Account Suspension-->
			<!--				</button>-->
			<!--				</a>-->
							
			<!--					<button type="button" class="btn btn-danger" >-->
			<!--					Account Suspension-->
			<!--				</button>-->
							
			<!--				</div>-->
			<!--				</div>-->
			<!--				</div>-->
				
				
				
								
				
				
		<!-- Card end -->

	

			 <div class="col-xxl-12">
					<!-- Card start -->
					<div class="card m-2">
						<div class="card-body">
							<!-- Modal XL -->
							<button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="#exampleModalCenter9">
								Update Notification
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter9" tabindex="-1"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">
												Update {{$userProfile->name}} Notification
											</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="{{ route('update.notification',$userProfile->id)}}" method="POST">
											@csrf
												<div class="m-0">
										<label class="form-label">Notification Message: </label>
										{{$userProfile->update_notification}}
										<textarea name="update_notification" class="form-control" rows="3" value="{{$userProfile->update_notification}}" ></textarea>
									</div>
											<div class="modal-footer">

												<button type="submit" class="btn btn-success">
													Update Notification
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- Card end -->
				</div>
				<!-- Card end -->
		



			<div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Deposit History</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColum" class="table custom-table">
									<thead>
										<tr>
											<th>Payment Method</th>
											<th>Amount</th>
											<th>Transaction ID</th>
											<th>Payment Proof</th>
											<th>Status</th>
											<th>Date</th>
											<th>Approve</th>
											<th>Decline</th>

										</tr>
									</thead>
									<tbody>

										@foreach($deposit as $deposit)
										<tr>
											<td>{{$deposit->payment_method}}</td>
											<td>${{number_format($deposit->amount, 2)}}
											</td>

											<td>{{$deposit->wallet_id}}</td>
											<td> <img src="{{asset('uploads/deposits/'.$deposit->image)}}" width="30%"></td>


											<td>
												@if ($deposit->status == '1')
												<span class="badge shade-light-green">Completed</span>
												@elseif($deposit->status == '0')
												<span class="badge shade-light-red">Pending</span>
												@elseif($deposit->status == '2')
												<span class="badge shade-light-red">Declined</span>
												@endif
											</td>
											<td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('D, M j, Y g:i
												A') }}
											</td>
											<td>
												<form action="{{url('approve-deposit/'.$deposit->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$deposit->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$deposit->payment_method}}">
													<button type="submit" class="badge shade-blue">Approve</button>
												</form>


											</td>
											<td>
												<form action="{{url('decline-deposit/'.$deposit->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$deposit->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$deposit->payment_method}}">
													<button type="submit" class="badge shade-red">Decline</button>
												</form>
											</td>
										</tr>
										@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>

			<div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Withdrawal History</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColumn" class="table custom-table">
									<thead>
										<tr>
											<th>Transaction ID</th>
											<th>Amount</th>
											<th>Wallet Address</th>
											<th>Status</th>
											<th>Date</th>
											<th>Approve</th>
											<th>Decline</th>
											<th>Bank Details</th>
											
											

										</tr>
									</thead>
									<tbody>

										@foreach($withdrawal as $withdrawal)
										<tr>
											<td>{{$withdrawal->transaction_id}}</td>
											<td>${{number_format($withdrawal->amount, 2)}}
											</td>

											<td>{{$withdrawal->wallet_address}}</td>


											<td>
												@if ($withdrawal->status == '1')
												<span class="badge shade-light-green">Completed</span>
												@elseif($withdrawal->status == '0')
												<span class="badge shade-light-red">Pending</span>
												@elseif($withdrawal->status == '2')
												<span class="badge shade-light-red">Declined</span>
												@endif
											</td>
											<td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('D, M j, Y g:i
												A') }}
											</td>
											<td>
												<form action="{{url('approve-withdrawal/'.$withdrawal->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$withdrawal->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$withdrawal->withdrawal_method}}">
													<button type="submit" class="badge shade-blue">Approve</button>
												</form>


											</td>
											<td>
												<form action="{{url('decline-withdrawal/'.$withdrawal->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$withdrawal->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$withdrawal->withdrawal_method}}">
													<button type="submit" class="badge shade-red">Decline</button>
												</form>
											</td>
											
											<td>Acc Name: {{$withdrawal->account_name}} 
											<br>
											 Account No: {{$withdrawal->account_number}} 
											 <br>
											  Bank Name: {{$withdrawal->bank_name}} 
											 <br>
											  SSN: {{$withdrawal->ssn}} 
											 
	
											</td>
										</tr>
										
										
										@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>






			<div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">KYC Details</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColumn" class="table custom-table">
									<thead>
										<tr>
											<th>Id Card Front</th>
											<th>Back</th>
											<th>Status</th>
											<th>Date</th>

										</tr>
									</thead>
									<tbody>

									
										<tr>

											<td> <img src="{{asset('uploads/kyc/'.$userProfile->id_card)}}" width="30%">
											</td>


											<td> <img src="{{asset('uploads/kyc/'.$userProfile->passport)}}" width="30%">
											</td>

											@if($userProfile->kyc_status=='0')
											<td>pending</td>
											@elseif($userProfile->kyc_status=='1')
											<td>approved</td>
											@elseif($userProfile->kyc_status=='2')
											<td>Declined</td>
											@endif
											<td>{{$userProfile->created_at}}</td>

											<td>
												<form action="{{url('accept-kyc/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<button type="submit" class="btn btn-primary me-2"
														href="">Approve</button>
												</form>

												<br>
												<form action="{{url('decline-kyc/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="0">
													<button type="submit" class="btn btn-danger"
														href="">Decline</button>
												</form>
											</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>



{{-- 


			<div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title"> QAI Protect Payment Proof</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColumn" class="table custom-table">
									<thead>
										<tr>
											<th>Proof</th>
											
											<th>Status</th>
											<th>Date</th>

										</tr>
									</thead>
									<tbody>

									
										<tr>

											<td> <img src="{{asset('user/uploads/bot/'.$userProfile->bot_image)}}" width="30%">
											</td>


										

											@if($userProfile->bot_status=='0')
											<td>pending</td>
											@elseif($userProfile->bot_status=='1')
											<td>approved</td>
											@elseif($userProfile->bot_status=='2')
											<td>Declined</td>
											@endif
											<td>{{$userProfile->created_at}}</td>

											<td>
												<form action="{{url('accept-bot/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<button type="submit" class="btn btn-primary me-2"
														href="">Approve</button>
												</form>

												<br>
												<form action="{{url('decline-bot/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="0">
													<button type="submit" class="btn btn-danger"
														href="">Decline</button>
												</form>
											</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div> --}}







{{-- 
			<div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Investment History</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColumn1" class="table custom-table">
									<thead>
										<tr>
											<th>Investment Package</th>
											<th>Amount</th>
											<th>Plan Duration</th>

											<th>Status</th>
											<th>Date</th>

										</tr>
									</thead>
									<tbody>
										@foreach($plan as $plan)
										<tr>
											<td>{{$plan->plan_name}}</td>
											<td>${{number_format($plan->amount, 2, '.', ',')}}</td>
											<td>{{$plan->plan_duration}}</td>

											@if($plan->status=='0')
											<td style="color: red">Active</td>
											@elseif($plan->status== '1')
											<td style="color: green">Completed</td>
											@endif
											<td>
												{{ \Carbon\Carbon::parse($plan->created_at)->format('D, M j, Y g:i A')
												}}
											</td>


										</tr>
										@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div> --}}

			{{-- <div class="row gx-3">
				<div class="col-sm-12 col-12">
					<!-- Card start -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Earning History</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="highlightRowColumn2" class="table custom-table">
									<thead>
										<tr>
											<th>Transaction</th>
											<th>Amount</th>
											<th>Description</th>
											<th>Date</th>

										</tr>
									</thead>
									<tbody>
										@foreach($earning as $earning)
										<tr>
											<td>{{$earning->transaction_id}}</td>
											<td>${{number_format($earning->amount, 2, '.', ',')}}</td>
											<td>{{$earning->description}}</td>
											<td>
												{{ \Carbon\Carbon::parse($earning->created_at)->format('D, M j, Y g:i
												A')
												}}
											</td>



										</tr>
										@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Card end --> --}}




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>








		</div>
		<!-- Content wrapper scroll end -->




		@include('manager.footer')
@extends('admin.main')
@section('content')
<div class="card-stats">
    <div class="card-stats-title">Order Statistics - 
      <div class="dropdown d-inline">
        <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
        <ul class="dropdown-menu dropdown-menu-sm">
          <li class="dropdown-title">Select Month</li>
          <li><a href="#" class="dropdown-item">January</a></li>
          <li><a href="#" class="dropdown-item">February</a></li>
          <li><a href="#" class="dropdown-item">March</a></li>
          <li><a href="#" class="dropdown-item">April</a></li>
          <li><a href="#" class="dropdown-item">May</a></li>
          <li><a href="#" class="dropdown-item">June</a></li>
          <li><a href="#" class="dropdown-item">July</a></li>
          <li><a href="#" class="dropdown-item active">August</a></li>
          <li><a href="#" class="dropdown-item">September</a></li>
          <li><a href="#" class="dropdown-item">October</a></li>
          <li><a href="#" class="dropdown-item">November</a></li>
          <li><a href="#" class="dropdown-item">December</a></li>
        </ul>
      </div>
    </div>
    <div class="card-stats-items">
      <div class="card-stats-item">
        <div class="card-stats-item-count">24</div>
        <div class="card-stats-item-label">Pending</div>
      </div>
      <div class="card-stats-item">
        <div class="card-stats-item-count">12</div>
        <div class="card-stats-item-label">Shipping</div>
      </div>
      <div class="card-stats-item">
        <div class="card-stats-item-count">23</div>
        <div class="card-stats-item-label">Completed</div>
      </div>
    </div>
  </div>
  @endsection
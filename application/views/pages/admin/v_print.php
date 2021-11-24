<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<style type="text/css">
.table-data{
 width: 100%;
 border-collapse: collapse;
 }
 .table-data tr th,
 .table-data tr td{
 border:1px solid black;
 font-size: 11pt;
 font-family:Verdana;
 padding: 10px 10px 10px 10px;
 }
 .table-data th{
 background-color:#4d17e2;
 color: white;
 }
 h3{
 font-family:Verdana;
 }
</style>
<h3><center>LAPORAN DATA BOOKING</center></h3>
<br/>
<table class="table-data">
 <thead>
 <tr>
 <th>No</th>
 <th>Username</th>
 <th>Email</th>
 <th>Start Booking</th>
 <th>End Booking</th>
 <th>Times</th>
 <th>Total Price</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach($bookings as $l){
 ?>
 <tr>
 <td scope="row"><?= $no++; ?></td> 
 <td><?= $l->username; ?></td>
 <td><?= $l->email; ?></td>
 <td><?= $l->start_booking; ?></td>
 <td><?= $l->end_booking; ?></td>
 <td><?= $l->days; ?></td>
 <td><?= $l->price_total; ?></td>
 </tr>
 <?php
 }
 ?>
</tbody>
</table>
<script>
    window.print();
</script>
</body>
</html>
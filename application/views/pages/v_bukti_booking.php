<!DOCTYPE html>
<html lang="en"><head>
    <title>Bukti Booking</title>
    <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    border-bottom: 2px solid #4d17e2;
    }

    .styled-table thead tr {
    background-color: #4d17e2;
    color: #ffffff;
    text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    
</style>
</head><body>
    <?php foreach($get_bookings as $booking): ?>
     <table class="table styled-table">
        <thead>
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Start Booking</th>
                <th scope="col">End Booking</th>
            </tr>
        </thead>
                <tbody>
                    <tr>
                    <th scope="row">#<?= $booking->id_user; ?>
                    </th>
                    <td><?= $booking->username; ?>
                    </td>
                    <td><?= $booking->email; ?>
                    </td>
                    <td><?= $booking->start_booking; ?>
                    </td>
                    </td>
                    <td><?= $booking->end_booking; ?>
                    </td>
                    </tr>
                </tbody>
            </table> 
            <?php endforeach ?>
</body></html>
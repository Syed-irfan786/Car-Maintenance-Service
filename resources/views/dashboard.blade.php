<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('{{ asset('images/hotelimg.jpeg') }}') center/cover no-repeat;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 4em;
            
            color: #fff;
        }

        .dashboard {
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .logout {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            text-decoration: underline;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .dashboard, table {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>YOUR BOOKINGS</h1>

        <a href="/" class="logout">Logout</a>

        <div class="dashboard">
            <h3>Hotel Booking Details</h3>
            

            <table>
            @php
    $customerId = session('customer_id'); // Assign the passed 'id' to a variable for clarity
@endphp
    <thead>
        <tr>
            <th>CUSTOMER ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CHECK IN</th>
            <th>CHECK OUT</th>
            <th>ROOM TYPE</th>
            <th>Message</th>
            <th>Actions</th> <!-- New column for buttons -->
        </tr>
    </thead>
    <tbody>
        @foreach($booking as $app)
            @if($app->customer_id == $customerId)
                <tr>
                    <td>{{ $app->customer_id }}</td>
                    <td>{{ $app->name }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->check_in }}</td>
                    <td>{{ $app->check_out }}</td>
                    <td>{{ $app->room_type }}</td>
                    <td>{{ $app->message }}</td>
                    <td>
                        <!-- Update button -->
                        <form action="{{ route('appointments.update', ['id' => $app->id]) }}" method="post" style="display:inline;">
                            @csrf
                            <button type="submit">Update</button>
                        </form>
                        
                
                        <!-- Delete button -->
                        <form action="{{ route('appointments.destroy', ['id' => $app->id]) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>






        </div>
    </div>

    <script>
        
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
</body>
</html>

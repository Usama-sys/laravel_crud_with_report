<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Post Details</title>
    <style>
        table.blueTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        table.blueTable td,
        table.blueTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }

        table.blueTable tbody td {
            font-size: 13px;
            padding-left: 10px;
        }

        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }

        table.blueTable thead {
            background: #1C6EA4;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            border-bottom: 2px solid #444444;
        }

        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #070707;
            border-left: 2px solid #D0E4F5;
        }

        table.blueTable thead th:first-child {
            border-left: none;
        }

    </style>
</head>


<body>


        <h1 style="text-align: center;">Report</h1>
    
        
    <table class="blueTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Post</th>
                <th>Discription</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sr = 1;
            @endphp
            @foreach ($data as $list)
                <tr>
                    <td><?php echo $sr; ?></td>
                    <td>{{ $list->title }}</td>
                    <td> {{ $list->body }}</td>
                    <td> {{ $list->created_at }}</td>
                </tr>
                @php
                    $sr++;
                @endphp
            @endforeach
        </tbody>
    </table>
</body>

</html>

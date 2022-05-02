<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #9de4b8;
    }

</style>
</head>

<body>

    <h2>Order Details</h2>

    <table>
        <tr>
            <th>Item Order Date</th>
            <td>{{ $body->created_at }}</td>
        </tr>
        <tr>
            <th>Item Name</th>
            <td>{{ $body->item_name }}</td>
        </tr>
        <tr>
            <th>Item Code</th>
            <td>{{ $body->item_code }}</td>
        </tr>
        <tr>
            <th>Item Price</th>
            <td>{{ $body->price }}</td>
        </tr>
        <tr>
            <th>Item Number Total</th>
            <td>{{ $body->quantity }}</td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td>{{ $body->Total_Price }}</td>
        </tr>

    </table>

</body>

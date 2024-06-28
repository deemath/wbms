<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            box-sizing: border-box;
        }
        .bill{
            background-color: #1eff0052 !important;
            text-align: center;
            /* align-items: center; */
        }
        .bill, .order {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .bill p, .order p {
            margin: 0;
            padding: 5px 0;
            font-size: 16px;
        }

        /* .bill p:first-child {
            display: flex;
            align-items: center;
        } */

        .btn-conf {
            font-size: 20px;
            color: green;
            margin-left: 10px;
        }

        .order p {
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th, td:first-child {
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .bill, .order {
                margin: 10px;
                padding: 15px;
            }

            table, th, td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="bill"><center>
        <p><b>Bill Confirmed</b><span class="btn-conf">✔</span></p>
        <p><b>Notified Customer via SMS</b></p>
        <p>Mobile : {{$CalculatedData['Cus_phone']}}</p></center>
    </div>

    <div class="order">
        <p style="font-size: large; text-align: center;">Account Number : {{$CalculatedData['CusAcc_NO']}}</p>
        <br>
        <p style="text-align: center;">{{$CalculatedData['CusName']}}</p>
        <p style="text-align: center;">{{$CalculatedData['Cus_No']}}</p>
        <p style="text-align: center;">{{$CalculatedData['CusAddress']}}</p>
        {{-- <p style="text-align: center;"></p> --}}
        <p style="text-align: center;">{{$CalculatedData['date']}}</p>
        <br>
        <p style="color: red; text-align: center;">Total Amount</p>
        <p style="text-align: center;"><b>Rs . {{$CalculatedData['TotalAmount']}}</b></p>
        <br>

        <table>
            <tr>
                <td>New reading</td>
                <td>{{$CalculatedData['NewReading']}}</td>
            </tr>
            <tr>
                <td>Post reading</td>
                <td>{{$CalculatedData['LastReading']}}</td>
            </tr>
            <tr>
                <td>Net Units</td>
                <td>{{$CalculatedData['NetUnits']}}</td>
            </tr>
            <tr>
                <td>Charging for Used Units</td>
                <td>{{$CalculatedData['ChargeForUsedUnits']}}</td>
            </tr>
            <tr>
                <td>Service Charge</td>
                <td>{{$CalculatedData['ServiceCharge']}}</td>
            </tr>
            <tr>
                <td>B/F</td>
                <td>{{$CalculatedData['B/F']}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>{{$CalculatedData['Tax']}}</td>
            </tr>
            <tr>
                <td>Discount</td>
                <td>{{$CalculatedData['Discount']}}</td>
            </tr>
            <tr>
                <td>Installments</td>
                <td>{{$CalculatedData['Installment']}}</td>
            </tr>
            <tr>
                <td>Interest</td>
                <td>{{$CalculatedData['Interest']}}</td>
            </tr>
            <tr>

                <td>Total Amount</td>
                <td><b>{{$CalculatedData['TotalAmount']}}</b></td>

            </tr>
        </table>
    </div>
</body>
</html>

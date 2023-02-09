<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
    <meta charset="utf-8">
    <title>Countries and Capitals</title>
    <style>
        body {
            text-align: center;
        }
  
        h1 {
            color: #44A075;
        }
  
        table {
            border: 2px solid #44A075;
        }
  
        caption {
            margin: 10px 0;
        }
  
        tr {
            height: 30px;
        }
  
        th,
        td {
            border: 1px solid #44A075;
            width: 100px;
        }
  
        .info {
            display: flex;
            justify-content: center;
        }
  
        button {
            margin: 20px 0;
            height: 40px;
            width: 100px;
            cursor: pointer;
        }
    </style>
    <script src="../jquery.min.js"></script>
</head>

<body>
    <h1>Get data using JSON file</h1>
    <div class="info">
        <table>
            <caption>Countries and their capitals</caption>
            <th>Countries</th>
            <th>Capitals</th>
            <tr>
                <td class="countries"></td>
                <td class="capitals"></td>
            </tr>
            <tr>
                <td class="countries"></td>
                <td class="capitals"></td>
            </tr>
            <tr>
                <td class="countries"></td>
                <td class="capitals"></td>
            </tr>
            <tr>
                <td class="countries"></td>
                <td class="capitals"></td>
            </tr>
            <tr>
                <td class="countries"></td>
                <td class="capitals"></td>
            </tr>
        </table>
    </div>
    <button id="fetchBtn" type="button" name="button">Fetch</button>
    <script src="capitals.js" charset="utf-8"></script>
</body>

</html>
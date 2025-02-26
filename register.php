<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1> Form document</h1>
    <form action="action.php" method="POST">
        <table border="1">
            <tr>
                <th> Question</th>
                <th> Answer</th>
            </tr>
            <tr>
                <td> Name</td>
                <td><input type="Text" name="Name" value=""></td>
            </tr>
            <tr>
                <td> Gender</td>
                <td><input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female</td>
            </tr>
            <tr>
                <td> Country</td>
                <td>
                    <select name="Country">
                        <option value="Select"> --Select Country--</option>
                        <option value="PH"> Philippines</option>
                        <option value="AUS"> Australia</option>
                        <option value="US"> United States</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button input type="SUBMIT" name="Save" value="Submit"> Save</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
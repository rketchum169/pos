<!DOCTYPE html>
<html>
<head>
<title>POS</title>
</head>

<body>
<h1>Ryan's POS System</h1>

<form action="/submit.php" method="post">
<?php $ledger = array() ?>
<table>
    <tr> 
    <td></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" id=ledger readonly/></td>
    <td>
        <input type="submit" value="Save Till" onclick=""/>
        <input type="button" value="Clear" onclick="document.getElementById('ledger').value = '' " />
    </td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" id="number"/></td>
    <td>
        <input type="button" value="Add Amount" onclick="createamount(newamount)" />
        <input type="button" value="Clear" onclick="document.getElementById('number').value = '' " />
    </td>
    </tr>

    <tr>
    <td><input type="button" value="7" onclick="insert('7')" class="button" /></td>
    <td><input type="button" value="8" onclick="insert('8')" class="button" /></td>
    <td><input type="button" value="9" onclick="insert('9')" class="button" /></td>
    </tr>

    <tr>
    <td><input type="button" value="4" onclick="insert('4')" class="button" /></td>
    <td><input type="button" value="5" onclick="insert('5')" class="button" /></td>
    <td><input type="button" value="6" onclick="insert('6')" class="button" /></td>
    </tr>

    <tr>
    <td><input type="button" value="1" onclick="insert('1')" class="button" /></td>
    <td><input type="button" value="2" onclick="insert('2')" class="button" /></td>
    <td><input type="button" value="3" onclick="insert('3')" class="button" /></td>
    </tr>

    <tr>
    <td colspan="2"><input type="button" value="0" onclick="insert('0')" class="button" /></td>
    <td><input type="button" value="." onclick="insert('.')" class="button" /></td>
    </tr>
 </table>

 </form>

<script src="./app.js"></script>

</body>

</html>
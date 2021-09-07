<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>institute_registeration</title>
	<script language="javascript">
var i = 0;
function changeIt()
{
var s="<br><br><select name=stream[]><option value=MCA>MCA</option><option value=BCA>BCA</option><option value=BTECH>BTECH</option></select>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"0  value=0 style=font-size:10px;width:10;padding: 5px 10px;>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"1  value=0>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"2  value=0>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"3  value=0>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"4  value=0>";

my_div.innerHTML = my_div.innerHTML +s;
i++;
}
</script>
</head>

<body style="background-color:white" onload="changeIt()">
    <div>
        <header class="header">
            <h1> Institute Registration Form</h1>
        </header>
    </div>

    <div class="body">
        <form>
            <table align="centre" width=90%>
                <tr>
                    <td>
                        <fieldset>
                            <legend>Institute Details</legend>
                            <table>
                                <tr>
                                    <td width=20%><label><b>Institute Name: </b>
                                        </label></td>
                                    <td width=80%>
                                        <input type="text" name="Uname" id="Uname" placeholder="Institutename">
                                    </td>
                                </tr>
                                <tr>
                                    <td width=20%><label><b>Institute Id: </b>
                                        </label></td>
                                    <td width=80%>
                                        <input type="text" name="Uname" id="Uname" placeholder="InstituteId">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>
                                            <b>Contact No:</b>
                                        </label>
                                    </td>
                                    <td>
                                        <!--input style="width: 90px;" type="text" name="country code" placeholder="Country Code" value="+91"
											size="1" /-->
                                        <input type="text" name="phone" placeholder="Contact no." size="10" / required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="email" / aria-required="true"><b>Email Address</b></label></td>
                                    <td><input type="text" placeholder="Enter Email" name="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Address : </b></td>
                                    <td><textarea cols="30" rows="5" placeholder="Current Address" value="address"
                                            required></textarea>
                                    </td>
                            </table>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset>
                            <legend>Fees Details</legend>
                            <table>
                                <tr>
                                    <td width=20%>

                                        <label><b>Pursuing Stream:<input type="button" value="+" onClick="changeIt()">
                                            </b>
                                        </label>
                                    </td>
                                    <td id="my_div"><!--select name="stream[]">
                                            <option value="Course">Stream:</option>
                                            <option value="BCA">BCA</option>
                                            <option value="BBA">BBA</option>
                                            <option value="B.Tech">B.Tech</option>
                                            <option value="MBA">MBA</option>
                                            <option value="MCA">MCA</option>
                                            <option value="M.Tech">M.Tech</option>
                                        </select-->
                                        <br><br></td>
                                </tr>
                                <tr>
                                    <td><!--label><b>Fees(in rupees):
                                            </b>
                                        </label--></td>
                                    <td><!--input type="text" name="Student_id" id="Sid" placeholder="Fees"-->
                                        <br><br></td>
                                </tr>


                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
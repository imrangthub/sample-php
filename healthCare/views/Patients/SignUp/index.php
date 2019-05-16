<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Patient | Sign In</title>

    <style type="text/css" media="all">
        @import "../../../healthStyle.css";
    </style>
</head>

<body>
<div id="farouter">
    <div id="outer">
        <div id="wrap">
            <div id="headermain">
                <div id="headTitle">
                    <h1 id="header">Online Medical</h1>
                    <h2 id="tagline">This is online based health care system...</h2>
                </div>


            </div>

            <div id="hmenu">
                <div id="hnav">

                    <ul id="navlist">
                        <li><a href="../../../index.php">Home</a></li>
                        <li><a href="">Menu 1</a></li>
                        <li><a href="">Menu 2</a></li>
                        <li><a href="">Menu 3</a></li>
                        <li><a href="">Menu 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="MainBody">
        <h1 align="center">Patient Registration:</h1>
        <hr/>
        <div style="width: 50%; margin: auto; padding: 10px; font-size: 12px">
            <form action="#" method="post" enctype="multipart/form-data">
                <table align="center" bgcolor="SILVER" border="0" height="300px" width="400px">
                    <tr>
                        <td>Name:</td><td><input type="text" name="patient_name"/></td>
                    </tr>
                    <tr>
                        <td>Age:</td><td><input type="text" name="age"/></td>
                    </tr>
                    <tr>
                        <td>Birth day:</td><td><input type="date" name="birthday" /></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="male"/>Male.
                            <input type="radio" name="gender" value="female"/>Female.
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td><td><input type="email" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Photo:</td>
                        <td><input type="file" name="photo"/> </td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Reset"/></td><td><input type="submit" value="Submit"/></td>
                    </tr>
                </table>
            </form>


        </div>

    </div>


    <div id="footer">
        <div style="padding: 2px;">
            <h4 align="center">This is Footer</h4>
        </div>
    </div>


</body>
</html>
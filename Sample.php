<html>
  <head>
      <link href="regstyle.css" rel="stylesheet" />
  </head>
      <body>
        <form action = "First.php" method = "get">
            <font face="gabriola" size="10pt"color="Crimson">
            <center>
                  <b>Registration Form</b>
            <br></font>
                  <table border="1">
                        <tr>
                              <td>Name</td>
                              <td colspan="2">
                                    <input type="text" name="txt_name"placeholder="Name"/>
                              </td>
                        </tr>
                        <tr>
                              <td>Address</td>
                              <td colspan="2">
                                    <textarea cols="50"rows="5"name = "txt_address"></textarea>
                              </td>
                        </tr>
                        <tr>
                              <td>State</td>
                              <td colspan="2">
                                    <select name = "ddl_state">
                                          <option value="-1">Slect State</option>
                                          <option>Maharashtra</option>
                                          <option>Gujrat</option>
                                          <option>Goa</option>
                                          <option>Karnataka</option>
                                          <option>Bihar</option>
                                          <option>Kerala</option>
                                          <option>Uttar Pradesh</option>
                                          <option>Rajasthan</option>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td>Gender</td>
                              <td>
                                    <input type="radio" value="Male" name="rb_gender">Male
                              </td>
                              <td>
                                    <input type="radio" value="Female" name="rb_gender">Female
                              </td>
                        </tr>
                        <tr>
                              <td>Hobbies</td>
                              <td>
                                    <input type="checkbox" name="chk_reading">Reading
                              </td>
                              <td>
                                    <input type="checkbox" name="chk_singing">
                                    Singing
                              </td>
                        </tr>
                        <tr>
                              <td>Username</td>
                              <td colspan="2">
                                    <input type="text" name="txt_username">
                              </td>
                        </tr>
                        <tr>
                              <td>Password</td>
                              <td colspan="2">
                                    <input type="text" name="txt_Password">
                              </td>
                        </tr>
                        <tr>
                              <td></td>
                              <td>
                                    <input type="submit" value="register" name="txt_regsister">
                              </td>
                        </tr>
                  </table>
            </center>  
      </body>
</html>
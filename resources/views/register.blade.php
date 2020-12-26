<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
      <div class="container">
       <div class="row">
        <div class="col-lg-12">
        <center>
        <form method="post" enctype="multipart/form-data" action="/register/insert">
              {{csrf_field()}}
           <table class="table table-bordered" style="width:90%">
           <tr >
                 <td colspan="2">
                      
                  </td>
              </tr>
              <tr >
                 <td colspan="2">
                      <h2 style="text-align:center;"><b>  Registeration Page</b></h2>
                  </td>
              </tr>
              <tr>
                    <td>
                        Name :
                    </td>
                    <td>
                        <input type="text" required name="txtname" class="form-control"/>
                    </td>
                    
              </tr>
              <tr>
                    <td>
                        Address :
                    </td>
                    <td>
                        <input type="text" name="txtaddress" class="form-control"/>
                    </td>
                    
              </tr>
              <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="email" required name="txtemail" class="form-control"/>
                    </td>
              </tr>
              <tr>
                    <td>
                        Phone :
                    </td>
                    <td>
                        <input type="phone" required name="txtphone" class="form-control"/>
                    </td>
              </tr>
              <tr>
                    <td>
                        Birthdate :
                    </td>
                    <td>
                        <input type="date" required name="txtdate" class="form-control"/>
                    </td>
              </tr>
              <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input type="password" required name="txtpass" class="form-control"/>
                    </td>
              </tr>
              <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    Male  <input type="radio" checked required name="rdgender" value="Male" />
                                </td>
                                <td>
                            
                                    Female  <input type="radio" required name="rdgender" value="Female" />
                                </td>
                            </tr>
                        </table>
                      
                      
                    </td>
              </tr>
              <tr>
                    <td>
                        Country :
                    </td>
                    <td>
                     <select name="scountry" class="form-control">
                       <option>Egypt</option>
                     </select>
                    </td>
              </tr>
              
              <tr>
                    <td>
                        Upload Image :
                    </td>
                    <td>
                    <input type="file" name="file">
                    </td>
              </tr>

              <tr>
                    <td colspan="2" style="text-align:right">
                        <input type="submit" name="btnsave" class="btn btn-primary" value="Register Now"/>
                    </td>
                     
              </tr>
           </table>     
           </form>
</center>
        </div>
       </div>
     </div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	 <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
   
	<div class="container">
        <form method="post" enctype="multipart/form-data" action="/insert/to/db">
          
			@csrf
              @method('put')
               
					  <table class="table table-bordered">
						     <h2 style="text-align:center;"><b> إضافة منتج </b></h2>
						  <tr>
							<th>رقم الظهور</th>
							<th> <input type="text" required name="order_products" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>اسم المنتج</th>
							<th> <input type="text" required name="prodcut_name" class="form-control"/></th>
						  </tr>
						 <tr>
							<th> اسم categories</th>
							<th> <input type="text" required name="prodcut_cat" class="form-control"/></th>
						  </tr>
						  <tr>
							<th> القسم</th>
							<th> <input type="text" required name="departmentNAME" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>السعر</th>
							<th> <input type="text" required name="prodcut_price" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>التخفيض</th>
							<th> <input type="text" required name="discount" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>الوصف المختصر</th>
							<th> <input type="text" required name="prodcut_wasf" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>التفاصيل</th>
							<th> <input type="text" required name="prodcut_info" class="form-control"/></th>
						  </tr>
						   <tr>
							<th>اضافة صورة </th>
							<th>   <input type="file" name="prodcut_img"></th>
						  </tr>
						   <tr>
							 <th>  <input type="submit" name="btnsave" class="btn btn-primary" value="Register Now"/></th>
						  </tr>
					  </table>
                  
           </form>
   </div>
</body>
</html>
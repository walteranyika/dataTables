<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" href="boot/css/bootstrap.css">
	<link rel="stylesheet" href="boot/css/dataTables.css">
	<script src="boot/js/jquery.min.js"></script>
	<script src="boot/js/dataTables.js"></script>
</head>
<body>
     <div class="container">
     	<div class="row">
     	   <div class="row">
     	   	  <div class="col-sm-4">
     	   	  	 <button class="btn btn-primary" onClick="refresher()">Reload</button>
     	   	  </div>
     	   	  <div class="col-sm-4">
     	   	   <select id="selectAge" class="form-control">
	           	   <option value="10">10</option>
	           	   <option value="20">20</option>
	           	   <option value="30">30</option>
	           	   <option value="40">40</option>
	           	   <option value="50">50</option>
               </select>
     	   	  </div>
     	   	  <div class="col-sm-4"></div>
     	   </div style="margin-bottom: 10px;">
          


    		<table id="example" class="display">
			    <thead>
			    	<tr>
			    		<th>ID</th>
			    		<th>NAMES</th>
			    		<th>EMAIL</th>
			    		<th>GENDER</th>
			    		<th>AGE</th>
			    		<th>COUNTRY</th>
			    	</tr>

			    </thead> 
			    <tfoot>
			    	<tr>
			    		<th>ID</th>
			    		<th>NAMES</th>
			    		<th>EMAIL</th>
			    		<th>GENDER</th>
			    		<th>AGE</th>
			    		<th>COUNTRY</th>
			    	</tr>			    	
			    </tfoot>
			    <tbody>     		
		       </tbody>
			</table>
     	</div>
     </div>
     <script type="text/javascript">
       var myTable = $('#example').DataTable({
       	 
		  'ajax': {
		    "type"   : "POST",
		    "url"    : 'api.php',
		    "data"   :function(d) {
		    	d.age=$('#selectAge').val()
		    },                   
		    "dataSrc": ""
		  },
		  'columns': [
		    {"data" : "id"},
		    {"data" : "names"},
		    {"data" : "email"},
		    {"data" : "gender"},
		    {"data" : "age"},
		    {"data" : "country"}
		  ]
        });
         myTable.ajax.reload()
       /* setInterval( function () {
      	     console.log("Reloding");
             myTable.ajax.reload();
        },3000);*/
         $('#selectAge').on("change", function()
          {
             console.log("Reloding");
             myTable.ajax.reload();
           });
         	

         
		   
     </script>

</body>
</html>
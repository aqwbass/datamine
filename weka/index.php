<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>เข้าเรียน?</h2>
    <p class="lead"></p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">ผลทำนาย</span>
        
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed" >
        <p id="demo"></p>
        </li>
      </ul>

      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">กรอกข้อมูล</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
          <label for="Exam">ช่วงสอบ?</label>
            <select class="custom-select d-block w-100" id="Exam"  rquired="procress()">
              <option >Choose...</option>
              <option value="yes">yes</option><option value="no">no</option>

            </select>
            <div class="invalid-feedback">
              Valid  is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
          <label for="Outlook">สภาพอากาศ</label>
            <select class="custom-select d-block w-100" id="Outlook" required="procress()">
              <option >Choose...</option>
              <option value="Sunny">Sunny</option><option value="Overcast">Overcast</option>
              <option value="Rain">Rain</option>

            </select>
            <div class="invalid-feedback">
              Valid is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="By">เดินทางโดย</label>
            <select class="custom-select d-block w-100" id="By" required="procress()">
              <option >Choose...</option>
              <option value="Car">Car</option><option value="Motorcycle">Motorcycle</option>
            </select>
            <div class="invalid-feedback">
              Please select 
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Temp">อุณหภูมิ</label>
            <select class="custom-select d-block w-100" id="Temp" required="procress()">
            <option >Choose...</option>
            <option value="Hot">Hot</option><option value="Mild">Mild</option>
              <option value="Cold">Cold</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
          <label for="PM">2.5pm</label>
            <select class="custom-select d-block w-100" id="PM" required="procress()">
              <option >Choose...</option>
              <<option value="Weak">Weak</option><option value="High">High</option>
              <option value="Normal">Normal</option>

            </select>
            <div class="invalid-feedback">
              
            </div>
          </div>
          <div class="col-md-3 mb-3">
          <label for="Task">มีงานค้าง</label>
            <select class="custom-select d-block w-100" id="Task" required="procress()">
              <option >Choose...</option>
              <option value="yes">yes</option><option value="no">no</option>
            </select>
            <div class="invalid-feedback">
              
            </div>
          </div>
          
          
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" onClick="procress()">Continue to predict</button>
        
    </div>
  </div>

  
</div>
<script>
function procress() {
    var Exam = document.getElementById("Exam").value ;
    var Outlook = document.getElementById("Outlook").value ;
    var By = document.getElementById("By").value ;
    var Temp = document.getElementById("Temp").value ;
    var PM = document.getElementById("PM").value ;
    var Task = document.getElementById("Task").value ;
    var check ;

    if(By=="Motorcycle"){
		if(PM=="High"){
			check = "ไม่เข้าเรียน";
		}
		if(PM=="Normal"){
			if(Temp=="Mild"){
				if(Outlook=="Overcast"){
					check = "ไม่เข้าเรียน";
				}
				if(Outlook=="Sunny"){
					check = "เข้าเรียน";
				}
				if(Outlook=="Rain"){
					check = "ไม่เข้าเรียน";
	           	}
			}
			if(Temp=="Hot"){
				check = "เข้าเรียน";
			}
			if(Temp=="Cool"){
				check = "ไม่เข้าเรียน";
			}
		if(PM=="Weak"){
			check = "เข้าเรียน";
		}
		}
	}
	else if(By=="Car"){
		if(Temp=="Mild"){
			if(Exam=="yes"){
				check = "ไม่เข้าเรียน";
			}
			if(Exam=="no"){
                check = "เข้าเรียน";
			}
		}
		if(Temp=="Hot"){
			check = "เข้าเรียน";
		}
		if(Temp=="Cool"){
			if(Exam=="yes"){
				check = "เข้าเรียน";
			}
			if(Exam=="no"){
				check = "ไม่เข้าเรียน";
			}
		}
	}

    
    document.getElementById("demo").innerHTML =  check;
}
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>

</body></html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
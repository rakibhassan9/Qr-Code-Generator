<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QR CODE</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row"style="display:flex; align-items:center; justify-content: center; gap:20px; position:relative; top:15rem">
            <div class="col-md-12" >
                <form action="{{ route('qrcode.generate') }}" class="form-inline" style="display:flex; align-items:center; justify-content: center; gap:20px;">
                   @csrf 
                <div class="">
                        <label class="sr-only" for="inlineFormInputName2">Enter Text</label>
                        <input type="text" name="qrcode" class="form-control mb-4 mr-sm-2" id="inlineFormInputName2" placeholder="">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Generate QR Code</button>
                    </div>
                    
                </form>
            </div>
           <div class="card col-md-4" style="">
            <div class="card-header">
                <h2>Qr Code</h2>
            </div>
            <div class="card-body">
                {{QrCode::size(150)->color(255, 50, 220)->generate($qcode)}}
                
                <!-- Need to Imagick to download QR Code Image... -->
            </div>
           </div> 
        </div>
        
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>
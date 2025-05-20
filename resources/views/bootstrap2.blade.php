<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            text-align: left;
        }
        
        .status-bar {
            display: flex;
            justify-content: space-between;
            padding: 15px 25px;
            font-size: 10px;
            background-color: #e0e0e0; 
            height: 50px;
        }
        .status-icons {
            display: flex;
            gap: 1px;
            margin-top: 1px;
        }
        .top-bar {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-top: 0; 
            margin-top: 0;
        }
        .top-bar img {
            height: 50px;
            margin-bottom: 5px;
            border: 1px solid black;
            border-radius: 30px;
            padding-top: 0; 
            margin-top: 0;
        }
        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: #d9d9d9;
            margin-left: 0px; 
            padding: 8px; 
            border-top: 1px solid black;
            position: relative; 
        }
        .search-container {
            display: flex;
            align-items: center;
            background-color: #d9d9d9;
            border-radius: 5px;
            padding: 5px;
            border: 1px solid black;
            width: 160px;
            height: 30px
        }
        .search-container input {
            border: none;
            outline: none;
            padding: 5px;
            width: 110px;
            height: 25px;
            background-color: #d9d9d9;
        }
        .search-container button {
            border: none;
            background: none;
            
        }
        .search-container button img {
            height: 21px;
            width: 21px;
            border: none;
        }
        .filter-btn {
            border: 1px solid #000000;
            background-color: #d9d9d9;
            padding: 5px;
            border-radius: 5px;
            margin-right: 5px;
            width: 30px;  
            height: 30px;
        }
        .filter-btn .filter-img {
            width: 20px;  
            height: 21px;
            border: none;
}
        .card {
            border: 1px solid black;
            border-radius: 10px;
            text-align: center;
            transform: translateX(-10px);
            padding: 10px;
            font-size: 10px;
            background: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            width: 125%; 
            height: 125px; 
        }
        .card img {
            width: 100%;
            height: 60px; 
            object-fit: contain; 
            border-radius: 5px; 
        }
        .card-title {
            font-size: 9px;
            font-weight: bold;
            text-align: left;
            margin-bottom: 2px;
        }
        .card p {
            color: rgb(88, 83, 83);
            font-size: 9px;
            font-weight: normal;
            text-align: left;
            margin-top: 0;
        }
        .badge-custom {
            position: absolute;
            top: 5px;
            left: 5px;
            background: rgb(33, 112, 216);
            color: white;
            padding: 3px 5px;
            font-size: 8px;
            border-radius: 3px;
        }
        .book-now{
            background-color: transparent; 
            border: 1px solid black; 
            color: black; 
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 20px;
            width: 35%; 
            height: 10%;
            display: block;
            margin: 0 auto; 
            margin-top: 30px;
            text-align: center;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        }
        .footer-menu {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            border-top: 1px solid rgb(214, 212, 212);
        }
        .footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px; 
            color: rgb(33, 112, 216);
        }        
        .footer-icon {
            width: 24px; 
            height: 24px;
            margin-bottom: 5px; 
            object-fit: contain; 
        }
        .text {
            opacity: 0.5;
        }
        .underline {
            text-decoration: underline;
            font-weight: bold;
        }   
  
    </style>
</head>
<body>
    <div class="status-bar">
        <img src="materialC/0f53549d-a28c-4169-92f5-74eed17b3c3c.png" alt="Clock" height="20">
        <div class="status-icons">
            <img src="materialC/7935f417-8cdf-4ae0-8dfe-67759152e7b4.png" alt="Signal" height="20">
            <img src="materialC/a3d4a563-fae3-47a2-a31f-ab643c220a9c.png" alt="WiFi" height="20">
            <img src="materialC/309adbdc-5145-4dd6-8c96-d59cbec061a3.png" alt="Battery" height="20">
        </div>
    </div>
    <div class="container mt-2">
        <div class="top-bar">
            <img src="Logo CekDong 1.png" alt="Logo">
            <div class="top-bar-content">
                <h5 class="mb-0"><strong>Equipment</strong></h5>
                <div class="d-flex align-items-center">
                    <button class="filter-btn">
                        <img src="materialC/107799.png" alt="filter-btn" class="filter-img">
                    </button>
                    <div class="search-container">
                        <input type="text" placeholder="Search...">
                        <button>
                            <img src="searchbar.png" alt="Search">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <p class="small">All list of goods, please tap the goods for start booking</p>
        
        <div class="row">
            <div class="col-3 col-md-3 mb-2">
                <div class="card">
                    <div class="badge-custom">Mostly Borrowed</div>
                    <img src="materialC/Frame 2377.png" alt="Lightning Set Sony" class="img-fluid">
                    <h6 class="card-title">Lightning Set Sony</h6>
                    <p class="p">🟢 Available</p>
                </div>
            </div>
            <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/Frame 2377 (2).png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Canon Lens EFS 18-135mm</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/Frame 2377 (3).png" alt="Sony PXW-Z90T XDCAM camrecorder" class="img-fluid">
                <h6 class="card-title">Sony PXW-Z90T XDCAM camrecorder</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <div class="badge-custom">Mostly Borrowed</div>
                <img src="materialC/Frame 2377 (4).png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Canon EOS 40000</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <div class="badge-custom">Mostly Borrowed</div>
                <img src="materialC/taffstudio-softbox-reflektor-photography-studio-lighting-kit-ks62.jpg" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">TaffSTUDIO Softbox Reflektor</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/ec36724c-5da0-4ba1-bb6d-9a0967106810.jpg" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Inbex Lighting Studio Softbox</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/lighting 4.png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Triopo LED 204 Video Lighting</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/ed2602f5-1cd2-424f-8a31-29ac9b996381.jpg" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">F8 Reflek Lens 900 mm</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/id-11134207-7r98p-lnwacr60wyrlcc.webp" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Sony FE 24-70mm F2.8 GM LENS</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/b48e67a287f7829621f2eef66293053a.webp" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Canon EFS 18-55mm</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/Frame 2377 (1).png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Nikon D7500</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/image 12.png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Instax slim-go</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/9be6fca24adc2281c4bb1c6bfcb5c60d 1.png" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">sony Zeiss</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <div class="badge-custom">Mostly Borrowed</div>
                <img src="materialC/8ftx12ft-black-screen-backdrop-with-9ftx12-ft-photo-backdrop-kit-original-imagbezzweghxmug.webp" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Black Backdrop kit</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <div class="col-3 col-md-3 mb-2">
            <div class="card">
                <img src="materialC/131-stand-2_675c19e6-57a6-4ddc-bf32-1b81d97e1193.webp" alt="Canon Lens EFS 18-135mm" class="img-fluid">
                <h6 class="card-title">Blue Backdrop kit</h6>
                <p class="p">🟢 Available</p>
            </div>
        </div>
        <button class="book-now">Book Now!</button>
    </div>
    <div class="footer-menu">
        <div class="footer-item">
            <img src="materialC/f131cfc3-3f0a-4011-89ca-95e909548ef4.png" alt="Profile" class="footer-icon">
            <div class="text">Profile</div>
        </div>
        <div class="footer-item">
            <img src="materialC/b6f79836-2dde-4d20-a4a4-17b3df9e990a.png" alt="Menu" class="footer-icon">
            <div class="text">Menu</div>
        </div>
        <div class="footer-item">
            <img src="materialC/4b42716d-2982-4fbe-b384-0e5edca6f468.png" alt="Riwayat" class="footer-icon">
            <div class="text">Riwayat</div>
        </div>
        <div class="footer-item active">
            <img src="materialC/b0b78a49-d47c-403b-aee2-408f1c8d3b0d.png" alt="Equipment" class="footer-icon">
            <div class="underline">Equipment</div>
        </div>
    </div>
    
</body>
</html>

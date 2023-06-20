<?php
// include_once "connect.php";

// if(isset($_POST['btnSubmit'])){
//     $img = str_replace(' ', '_', $_FILES['Pro_image']['name']);
//     $storedImage = "../ASM2New/images/";
//     $flag = move_uploaded_file($_FILES['Pro_image']['tmp_name'], $storedImage.$img);
    
//     if($flag){
//     $c = new connect();
//     $dblink = $c->connectToPDO();

  
//     $sql = "INSERT INTO `product`(`pid`, `pname`, `price`, `status`, `image`, `des`, `quantity`, `cat_id`) VALUES (?,?,?,?,?,?,?,?)";

//     $re = $dblink->prepare($sql);
//     $stmt = $re-> execute(array("D03","Taj Mahal","1500000",1,"$img","Lego",20,"C01"));
       
//     if ($stmt == TRUE)
//     {
//         echo "Congrats";
//     }             
//     else{
//         echo "Failed";
//     }
//     }
// }
?>
<!-- <div id="main" class="container mt-4">     
                        <form class="form form-vertical" method="POST" action="#"  enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image-vertical">Images</label>
                                            <input type="file" name="Pro_image" id="Pro_image" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mt-3 justify-content-center">
                                        <button type="submit" class="btn btn-warning me-1 mb-1 rounded-pill" name="btnSubmit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
    </div> main -->




    <?php
    include_once './header.php';
    include_once './connect.php';
    if(isset($_POST['btnSubmit'])){
        
        $pid = $_POST['pid'];
        $pName = $_POST['pname'];
        $pPrice = $_POST['price'];
        $pStatus = $_POST['status'];
        $img = str_replace(' ','-',$_FILES['Pro_image']['name']);
        $pDesc = $_POST['des'];
        $pQuantity = $_POST['quantity'];
        $pCat_id = $_POST['cat_id'];
        $pstaff = $_POST['Staff_ID'];
        $pSupplier = $_POST['Sup_ID'];
        /*lưu ảnh trong project, không lưu trong ổ c,d */            
        $storedImage = "../images/";

        $flag = move_uploaded_file($_FILES['Pro_image']['tmp_name'],$storedImage.$img);
        if($flag){
        $c = new Connect();
        $dblink = $c -> connectToPDO();     
    //     $sql = "INSERT INTO `product`(`pid`, `pName`, `pPrice`,`pStatus`, `pImage`, `pDesc`, `pQuantity`, `pCat_id`) VALUES (?,?,?,?,?,?,?,?)";

    // $re = $dblink->prepare($sql);
    // $stmt = $re-> execute(array("P003","Deathadder essential","650000",1,"$img","Mouse",23,"C01"));
    $sql = "INSERT INTO `product`(`pid`, `pname`, `price`, `status`, `image`, `des`, `quantity`, `cat_id`,`Staff_ID`,`Sup_ID`) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $re = $dblink->prepare($sql);
        $stmt = $re->execute(array($pid,$pName,$pPrice,$pStatus,$img,$pDesc,$pQuantity,$pCat_id,$pstaff,$pSupplier));
        // $stmt = $re->execute([
        //     ':pid' => $pid,
        //     ':pName' => $pName,
        //     ':pPrice' => $pPrice,
        //     ':pStatus' => $pStatus,
        //     ':pImage' => $img,
        //     ':pDesc' => $pDesc,
        //     ':pQuantity' => $pQuantity,
        //     ':pCat_id' => $pCat_id
        // ]);
        if($stmt == TRUE)
        {
            echo "Create Success!";
        }else{
            echo "Failed";
        }            
        }
    }

?>
<div id="main" class="container mt-4">     
                        <form class="form form-vertical" method="POST" action="#"  
                        enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Product ID: </label>
                                            <input type="text" name="pid" id="pid" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Product name: </label>
                                            <input type="text" name="pname" id="pname" 
                                            class="form-control" value="">
                                        </div>
                                        </div>
<div class="col-12">
                                        <div class="form-group">
                                            <label>Price: </label>
                                            <input type="text" name="price" id="price" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Product Status: </label>
                                            <input type="text" name="status" id="status" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Description: </label>
                                            <input type="text" name="des" id="des" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Quantity: </label>
                                            <input type="text" name="quantity" id="quantity" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Category: </label>
                                            <input type="text" name="cat_id" id="cat_id" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Staff ID: </label>
                                            <input type="text" name="Staff_ID" id="Staff_ID" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="text-vertical">Supplier:</label>
                                            <input type="text" name="Sup_ID" id="Sup_ID" 
                                            class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image-vertical">Image</label>
                                            <input type="file" name="Pro_image" id="Pro_image" 
class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mt-3 justify-content-center">
                                        <button type="submit" class="btn btn-warning me-1 mb-1 rounded-pill" 
                                        name="btnSubmit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
    </div> <!--main-->
   

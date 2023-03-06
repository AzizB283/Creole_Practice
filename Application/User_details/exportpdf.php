<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;


$html = '<form enctype="multipart/form-data" action="" method="post" id="updateimage">'. 
                '<div class="container h-100">'. 
                '<div class="row d-flex justify-content-center align-items-center h-100">'.
                '<div class="col col-lg-6 mb-4 mb-lg-0">'.
                '<div class="card mb-3" style="border-radius: .5rem;">'.
                '<div class="row g-0">'.
                '<div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">'.
                '<img src="../images/<?php echo$row[\'id\']. \'/\'. $row[\'image\']; ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />'.
                '<h3><?php echo $name; ?></h3>'.
                '<i class="far fa-edit mb-5"></i><br><br>'.
                '<div class="col-sm-10 mx-auto">'.
                '<input class="form-control error" type="file" id="image" name="image" value = "<?php echo $row[\'image\'] ?>">'.
                '</div>'.
                ' </div>'.
                '<div class="col-md-8">'.
                '<div class="card-body p-4">'.
                '<h2>Information</h2>'.
                '<hr class="mt-0 mb-4">'.
                '<div class="row pt-1">'.
                '<div class="col-6 mb-3">'.
                '<h5>Name</h5>'.
                '<div class="col-sm-10">'.
                '<input type="text" class="form-control error" id="cname" name="name" value="<?php echo $name; ?>" required>'.
                '</div>'.
                '<div class="col-6 mb-3">'.
                '<h5>Gender</h5>'.
                '<div class="col-sm-10">'.
                '<span class="span">Male</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Male" <?php if($gender == \'Male\'){ echo "checked";} ?>>'.
                '&nbsp; <span class="span">Female</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Female" <?php if($gender == \'Female\'){ echo "checked";} ?>>'.
                '&nbsp;  <span class="span">Prefer Not To Say</span> <input type="radio" name="gender" class="form-check-input" id="gender" value="Prefer not to say" <?php if($gender == \'Prefer not to say\'){ echo "checked";} ?>><br>'.
                '<label id = "gender-error" class="error" for="gender"></label>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '<hr class="mt-0 mb-4">'.
                '<div class="row pt-1">'.
                '<div class="col-6 mb-3">'.
                '<h5>Email</h5>'.
                '<div class="col-sm-10">'.
                '<input type="email" class="form-control error" id="cemail" name="email" value = "<?php echo $email ?>" required>'.
                '</div>'.
                '</div>'.
                '<div class="col-6 mb-3">'.
                '<h5>Number</h5>'.
                '<div class="col-sm-10">'.
                '<input type="number" class="form-control error" id="cnumber" name="number" minlength=10 maxlength=10 value = "<?php echo $number; ?>" required>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '<hr class="mt-0 mb-4">'.
                '<div class="row pt-1">'.
                '<div class="col-6 mb-3">'.
                '<h5>Address</h5>'.
                '<div class="col-sm-10">'.
                '<textarea name="address" class="form-control error" id="caddress" rows="2" cols="2"> <?php echo htmlspecialchars($address); ?></textarea>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</form>';
                        
        
                        
        
        // Create new DOMPDF instance
        $dompdf = new Dompdf();
        $dompdf->set_option('dpi', 300);
        $dompdf->set_option('isRemoteEnabled', true);
        
        // Load HTML content
        $dompdf->loadHtml($html);
        
        // Render PDF
        $dompdf->render();
        
// Output PDF as file attachment
$dompdf->stream('profile.pdf');
?>

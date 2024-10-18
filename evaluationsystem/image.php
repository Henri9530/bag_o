<?php
if ($_FILES['hen']['error'] === 4) {
  echo "<script>alert('Image not exist');</script>";
} else {
  $imgname = $_FILES['hen']['name'];
  $imgsize = $_FILES['hen']['size'];
  $imgtmp = $_FILES['hen']['tmp_name'];

  $imgvalid = ['jpeg', 'jpg', 'png'];
  $imgEx = explode('.', $imgname);
  $imgEx = strtolower(end($imgEx));

  if (!in_array($imgEx, $imgvalid)) {
    echo "<script>alert('Invalid extension');</script>";
  } else if ($imgsize > 1000000) {
    echo "<script>alert(Image is to large);</script>";
  } else {
    $newimg = uniqid();
    $newimg .= '.' . $imgEx;

    move_uploaded_file($imgtmp, 'pics/' . $newimg);

    $sql = "INSERT INTO tblbooks (title, author, published, department, pics) VALUES ('$title', '$author', '$published', '$dept', '$newimg')";
    mysqli_query($conn, $sql);

    if ($sql) {
      header('location: department3.php');
    }
    echo "<script>
        alert('Product Successfully Added');
      </script>";
  }
}
?>
<input type="file" name="hen" id="hen" value="" accept=".jpeg, .jpg, .png" style="display: none;">

<script>
  let imgs = document.querySelector('#imgss');
  let img = document.querySelector('#hen');
  img.addEventListener('change', function(e) {
    imgs.src = URL.createObjectURL(e.target.files[0]);
  });
</script>
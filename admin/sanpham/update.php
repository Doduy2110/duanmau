<?php
    if(is_array($dm)){
        extract($dm);

    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Mã sản phẩm <br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
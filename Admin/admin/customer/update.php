<div>
    <h1 class="alert alert-success" style="color: green">Sửa Customer</h1>

    <form action="index.php?act=updatecustomer" method="post">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Id Customer</label>
            <input type="text" class="form-control" placeholder="auto_number" value="<?= $id_customer ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Name Customer</label>
            <input type="text" class="form-control" placeholder="" name="name_customer" value="<?= $name_customer ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email Customer</label>
            <input type="text" class="form-control" placeholder="" name="email_customer" value="<?= $email_customer ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="text" class="form-control" placeholder="" name="password_customer" value="<?= $password_customer ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="" name="address_customer" value="<?= $address_customer ?>">
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Phone</label>
            <input type="text" class="form-control" placeholder="" name="phone_customer" value="<?= $phone_customer ?>">
        </div>

        <div class="mb-3">
            <label for="inputPassword4" class="form-label">Role</label>
            <select class="form-select" id="validationDefault04" name="role_customer">
                <option selected value="boss">boss</option>
                <option selected value="user">user</option>
            </select>
        </div>

        <br>
        <div>
            <input type="hidden" name="id_customer" value="<?= $id_customer ?>">
            <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">cập nhật </button>
            <!-- <button type="reset" class="btn btn-primary">nhập lại </button> -->
            <a href="index.php?act=listcustomer" class="btn btn-primary"> danh sách </a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>
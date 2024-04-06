

<div>
<h1 class="alert alert-success" style="color: green"> Danh sách customer</h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">ID Customer</th>
                <th scope="col">name Customer</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">active</th>
                <th scope="col">role</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
              foreach($listcustomer as $customer) {
                extract($customer);
                $editcustomer=   "index.php?act=editcustomer&id_customer=".$id_customer;
                $deletecustomer= "index.php?act=deletecustomer&id_customer=".$id_customer;
                echo '<tr>
                <td></td>
                <td>'.$id_customer.'</td>
                <td>'.$name_customer.'</td>
                <td>'.$email_customer.'</td>
                <td>'.$password_customer.'</td>
                <td>'.$active.'</td>
                <td>'.$role.'</td>
                <td> <a href="'.$editcustomer.'"  class="btn btn-outline-success">edit</a>
                <a href="'.$deletecustomer.'"  class="btn btn-outline-success">delete</a></td>
               </tr>';
            }  
             ?>   

          
        
        </tbody>
       
  </table>
        <tfoot> 
            <td colspan="4">
            <button type="button" class="btn btn-primary">chọn tất cả </button>
            <button type="button" class="btn btn-primary">xóa tất cả </button>
            <button type="button" class="btn btn-primary">xóa các mục đã chọn </button>      
           
            </td>    
       </tfoot>
</div>
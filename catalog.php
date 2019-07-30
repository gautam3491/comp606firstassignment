<?php
require_once("header.php"); 

?>

        <div class="container">
            <form action="cart.php" method="POST">
                <table class="table">
                    <tr>
                        <th>Product Number</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="pnum" value="01" readonly/></td>
                        <td><input type="text" name="name" value="Dell" readonly/></td>
                        <td><input type="text" name="type" value="Laptop" readonly/></td>
                        <td><input type="text" name="price" value="$750" readonly/></td>
                        <td><input type="text" name="stock" value="5" readonly/></td>
                        <td><button type="submit" value="1">Add To Cart</button></td>
                    </tr>
                    
                </table>
            </form>
        </div>
<?php
require_once("footer.php"); 
?>
    
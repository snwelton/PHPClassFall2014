<?php include '../view/header.php'; ?>
<div id="main">

    <h1 class="top">Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    <!-- add categories table here -->
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;&nbsp;&nbsp;</th>
        </tr><tr>
            <th>Guitars</th>
            <td><form action="delete_product.php" method="post"
                              id="delete_product_form">
                        <input type="hidden" name="product_id"
                               value="<?php echo $product['productID']; ?>" />
                        <input type="hidden" name="category_id"
                               value="<?php echo $product['categoryID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
        </tr><tr>
            <th>Basses</th>
            <td><form action="delete_product.php" method="post"
                              id="delete_product_form">
                        <input type="hidden" name="product_id"
                               value="<?php echo $product['productID']; ?>" />
                        <input type="hidden" name="category_id"
                               value="<?php echo $product['categoryID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
        </tr><tr>
            <th>Drums</th>
            <td><form action="delete_product.php" method="post"
                              id="delete_product_form">
                        <input type="hidden" name="product_id"
                               value="<?php echo $product['productID']; ?>" />
                        <input type="hidden" name="category_id"
                               value="<?php echo $product['categoryID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
        </tr>
    </table>
    <br />

    <h2>Add Category</h2>
    <!-- add form for adding a category here -->

    <p>Name:</p> <form action="add_category.php" method="post">
            <input type="text" name="categoryName" value=""/>
            <input type="submit" value="add"/>
        </form>
    <p><a href="index.php?action=list_products">List Products</a></p>

</div>
<?php include '../view/footer.php'; ?>
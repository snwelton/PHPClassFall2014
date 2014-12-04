<?php include '../view/header.php'; ?>
<div id="main">

    <h1 class="top">Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    <!-- add categories table here -->
    <form action=""
    <label>Category:</label>
    <select name="category_id">
        <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category[$category_name]; ?>"></option>
        <?php endforeach; ?>
    </select>
    <br />
    
   
    
    </table>
    <br />

    <h2>Add Category</h2>
    <!-- add form for adding a category here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</div>
<?php include '../view/footer.php'; ?>
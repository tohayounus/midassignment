<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" required/>
        </div>
        
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>

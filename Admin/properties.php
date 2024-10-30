<?php
  include '../php/connection.php';
  include '../php/properties.php';

  $properties = getAllProperties($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <!-- side bar -->
    <aside class="aside">
        <h3 style="text-align: center; padding: 2.5rem;">Mr. Admin</h3>
        <ul class="sidebar">
            <li><i class="fa-solid fa-table-columns"></i> <span><a href="Dashboard.php">Dashboard</a></span></li>
            <li><i class="fa-solid fa-house"></i><span> <a href="Properties.html">Properties</a></span></li>
            <li><i class="fa-solid fa-hotel"></i><span><a href="Rent.html"></a>Rent/Buy</span></li>
            <li><i class="fa-solid fa-users"></i><span><a href="User.html">User</a></span></li>
            <li><i class="fa-regular fa-user"></i><span><a href="Agent.html">Agent</a></span></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="../index.html">Logout</a></li>
        </ul>
    </aside>
    <!-- end of side bar -->
    <div class="main">
        <div class="title"> Properties</div>
           <div class="list">
            <div class="head">
                <h3>All property</h3>
                <button class="btn"><a href="addform.php">Add</a></button>
            </div>
            <hr>
            <table>
                <thead>
                  <tr>
                    <th>Property ID</th>
                    <th>Property Name</th>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($properties as $property) {
                      ?>
                      <tr>
                        <td><?=$property['property_id']?></td>
                        <td><?=$property['property_name']?></td>
                        <td><?=$property['property_type']?></td>
                        <td><?=$property['property_location']?></td>
                        <td><?=$property['property_price']?></td>
                        <td><a href="deleteProperty.php?propertyId=<?=$property['property_id']?>"><button class="btn">Delete</button></a></td>
                      </tr>
                    <?php
                    } ?>
                 

                  <!-- Add more rows for additional properties -->
                </tbody>
              </table>
           </div>
           
           </div>
          
    
        </div>

    </div>
    </body>
</html>
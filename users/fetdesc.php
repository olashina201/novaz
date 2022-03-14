<?php 

include("../cpanel/link.php");
 
 
$qry  = mysqli_query($link, "SELECT * FROM business WHERE id = '$pid' ");
$rows = mysqli_num_rows($qry) ;


 
if($rows['cate'] == 1)
{
  $cate = 'House';
}
elseif($rows['cate'] == 2) 
{
    $cate = 'Hostel';
}
elseif($rows['cate'] == 3)
{
    $cate = 'Land';
}
elseif($rows['cate'] == 4)
{
    $cate = 'Shortlet';
}
elseif($rows['cate'] == 5) 
{
    $cate = 'Shop';
}
elseif($rows['cate'] == 6)
{ 
    $cate = 'Office';
}

if($rows['purpose'] == 1)
{
  $pup = 'For Rent';
}
elseif($rows['purpose'] == 2) 
{
    $pup = 'For Sale';
}


if($rows['pspace'] == 1)
{
  $pspace = 'Yes';
}
elseif($rows['purpose'] == 2) 
{
    $pspace = 'No';
}

if($rows['ptype'] == 1)
{
  $ptype = 'Condo';
}
elseif($rows['ptype'] == 2) 
{
    $pspace = 'Bungalow';
}
elseif($rows['ptype'] == 3) 
{
    $ptype = 'Duplex';
}
elseif($rows['ptype'] == 4) 
{
    $ptype = 'Detach';
}
elseif($rows['ptype'] == 5) 
{
    $ptype = 'Farmhouse';
}
elseif($rows['ptype'] == 6) 
{
    $ptype = 'Penthouse';
}
elseif($rows['ptype'] == 7) 
{
    $ptype = 'Studio';
}
elseif($rows['ptype'] == 8) 
{
    $ptype = 'Miniflat';
}
elseif($rows['ptype'] == 9) 
{
    $ptype = 'Villa';
}
elseif($rows['ptype'] == 10) 
{
    $ptype = 'Mansion';
}
elseif($rows['ptype'] ==11) 
{
    $ptype = 'Castle';
}
elseif($rows['ptype'] == 12) 
{
    $ptype = 'Room & Parlor';
}

if($rows['condition'] == 1) 
{
    $condition = 'Faily Used';
}
elseif($rows['condition'] ==2) 
{
    $condition = 'Newly Built';
}
elseif($rows['condition'] == 3) 
{
    $condition = 'Used';
}
if($rows['furnit'] == 1) 
{
    $furnit = 'Semi Furnishing';
}
elseif($rows['furnit'] ==2) 
{
    $furnit = 'Furnished';
}
elseif($rows['furnit'] == 3) 
{
    $furnit = 'Not Furnished';
}

if($rows['negotiable'] == 1) 
{
    $negotiable = 'Negotiable';
}
elseif($rows['negotiable'] ==2) 
{
    $negotiable = 'Not Negotiable';
}

?>




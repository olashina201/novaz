<?php include("cpanel/link.php"); ?>
<div class="row  slick-arrow-1">
	<?php

	$qr = mysqli_query($link, "SELECT * FROM business WHERE status = 1 ORDER BY promotion");
	$bsn = mysqli_num_rows($qr) > 0;
	if ($bsn) {
		while ($rowb = mysqli_fetch_assoc($qr)) {
			$uid = $rowb['uid'];
			$busiid = $rowb['busiid'];

			$qs = mysqli_query($link, "SELECT COUNT(*) AS totcount FROM images 
		WHERE transid ='$busiid'");
			if (mysqli_num_rows($qs) > 0) {

				while ($row = mysqli_fetch_array($qs)) {
					$myct = $row['totcount'];
				}
			}

			$bsn = mysqli_num_rows($qr) > 0;

	?>
			<div class="col-md-3">
				<div class="ltn__product-item ltn__product-item-4 text-center---">
					<div class="product-img" style="padding-bottom:5px; margin-bottom:5px; max-height:200px; min-height:200px; opacity: 0.5;">
						<a href="product-details?pid=<?php echo $rowb['id']; ?>"><img src="uploads/<?php echo $rowb['image']; ?>" alt="#" /></a>

						<div class="product-badgel">
							<ul>
								<?php
								if ($rowb['negotiable'] == 1) {
								?>
									<li class="sale-badge bg-green"> Negotiable </li>
								<?php
								} else {
								?>
									<li class="sale-badge bg-danger">Non Negotiable </li>
								<?php
								}
								?>
							</ul>
						</div>
						<div class="product-badge">
							<ul>
								<?php
								if ($rowb['promotion'] == 'active') {
									?>
									<li class="sale-badge bg-danger">Promoted</li>
								<?php }
								elseif ($rowb['status'] == 1) {
								?>
									<li class="sale-badge bg-green">Available</li>
								<?php
								} elseif ($rowb['status'] == 2) {
								?>
									<li class="sale-badge bg-danger">Not Available</li>
								<?php

								}
								?>
							</ul>
						</div>
						<div class="product-img-location-gallery" style="padding-left: 10px;">
							<div class="" style="padding-left: 0px;">
								<ul>
									<li>
										<a href="product-details?pid=<?php echo $rowb['id']; ?>"><i class="fas fa-camera"></i><?php echo $myct; ?></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div style="font-size:11px; padding-left:10px; color:#000;">
						<strong style="text-transform: uppercase;"><?php echo $rowb['psize']; ?> / FOR <?php
																										if ($rowb['purpose'] == 1) {
																											echo 'RENT';
																										} elseif ($rowb['purpose'] == 2) {
																											echo 'SALE';
																										}
																										?>
						</strong>

					</div>

					<div class="product-img-location meright" style="font-size: 12px; padding-left: 10px; margin-bottom: 3px; ">
						<i class="flaticon-pin"><?php echo $rowb['address']; ?></i>

					</div>
					<div class="product-description" style="color:#090909; line-height: 0.9; padding-left: 10px; padding-right:5px; font-size: 14px;">
						<p style="font-weight: bold;"><?php echo $rowb['catedescript']; ?>
						</p>
					</div>

					<?php
					include("bbrooms.php");
					?>

					<div class="product-info-bottom">
						<div class="real-estate-agent">
							<?php
							$qrs = mysqli_query($link, "SELECT * FROM user WHERE id ='$uid' ");
							$rowu = mysqli_fetch_array($qrs);

							?>
							<div class="agent-img">
								<img src="upreg/<?php echo $rowu['uimg']; ?>" height="40" width="40">
							</div>
							<div class="agent-brief">
								<h6><?php echo $rowu['fname'] . ' ' . $rowu['lname']; ?></h6>
								<small>Property Agent</small>
							</div>
						</div>
					</div>


				</div>
			</div>

	<?php

		}
	}

	?>
</div>
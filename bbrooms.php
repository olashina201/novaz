							<ul class="ltn__list-item-2 " style=" padding-left: 10px;"">
							<?php 
							if($rowb['broom'] > 0)
                                    { ?>
									<li> <span> <?php echo $rowb['broom'] ;?> <i class="flaticon-bed"></i></span>
                                     Bedrooms
                                    </li>
									<?php
									}
									else
									{ ?>
									<li><span> 0 <i class="flaticon-bed"></i></span>
                                     Bedroom
                                    </li>
									<?php
									}
                                   
						    ?> 
							 <?php 
							if($rowb['batroom'] > 0)
                                    { ?>
									<li><span> <?php echo $rowb['batroom']; ?> <i class="flaticon-clean"></i></span>
                                     Batrooms
                                    </li>
									<?php
									}
									else
									{ ?>
									<li><span> 0 <i class="flaticon-clean"></i></span>
                                     Batroom
                                    </li>
									<?php
									}
                                   
						    ?> 
                                
                                 
                               
                            </ul>

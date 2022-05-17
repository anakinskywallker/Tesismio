
                   <div class="col-xs-12 col-sm-12 col-md-6 my-5 my-md-0">
                    
                    <div class="">
                        
                            <div class="table-wrapper-scroll-y my-custom-scrollbar1">
                                <a style="color: #6f6f6f; margin: 240px;"  ></a>
                              <table class="table2" id="portfolio">
                                <tbody>
                                  <?php

                                      $mysqli = new mysqli($host, $user, $pw, $db);
                                      $sql ="SELECT  *  FROM productos WHERE (PRO_TIPO = 6 OR PRO_TIPO = 5 OR PRO_TIPO = 4 OR PRO_TIPO = 3 ) AND (PRO_CLASE = 1)";
                                      $result1 = $mysqli->query($sql);
                                      $row_cnt = $result1->num_rows;
                                    if (mysqli_num_rows($result1) > 0){
                                        while($row = mysqli_fetch_assoc($result1)){
                                            $id[] = $row['PRO_ID'];
                                            $foto[] = $row['PRO_FOTO'];
                                            $nombre[] = $row['PRO_NOMBRE'];
                                            $precio[] = $row['PRO_VENTA'];
                                                 }
                                                }
                                            
                                    for ($i = 0; $i <= $row_cnt ; $i++) {
                                      
                                    if ( $i < $row_cnt - 4) {
                                        $datos=$id[$i]."||".
                                                $foto[$i]."||".
                                                $nombre[$i]."||".
                                                $precio[$i];
                                        $datos1=$id[$i+1]."||". 
                                                $foto[$i+1]."||".
                                                $nombre[$i+1]."||".
                                                $precio[$i+1];
                                                                            
                                        
                                        $datos2=$id[$i+2]."||".
                                                $foto[$i+2]."||".
                                                $nombre[$i+2]."||".
                                                $precio[$i+2]; 
                                        $datos3=$id[$i+3]."||".
                                                $foto[$i+3]."||".
                                                $nombre[$i+3]."||".
                                                $precio[$i+3];
                                        $datos4=$id[$i+4]."||".
                                                $foto[$i+4]."||".
                                                $nombre[$i+4]."||".
                                                $precio[$i+4];
                                        }
                                  ?>
                                   <tr>    
                                    <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div>
                                  </td>
                                    <td><div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos1; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+1];?>" alt="">
                                          </a>
                                         
                                        </div>
                                        </div></td>
                                    <td><div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos2; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+2];?>" alt="">
                                          </a>
                                         
                                        </div>
                                        </div></td>
                                      
                                    <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos3; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+3];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div></td>
                                      <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos4; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+4];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div>
                                        </td>
                                      
                                  </tr>
                                  <?php
                                           $i = $i + 4;
                                     }
                                    echo '<tr></div>
                                        </div></tr>';
                                  ?>
                                                                  
                                    
                                   <tr></tr>
                                </tbody>
                              </table>

                            </div>

                        </div>
                   

                </div>
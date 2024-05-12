            </div>
        </section>
        
        <!-- Top products -->

        <section>            
            <div class="container-fluid">
                <div class="row">                    
                    <div class="col-md-6">
                        <?php include("inc/carousel.php"); ?>    
                    </div>
                    <div class="col-md-6 pt-2">
                    <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class=" text-warning nav-link active" data-bs-toggle="tab" href="#menu1">Nổi bật</a>
                        </li>
                        <li class="nav-item">
                          <a class="text-warning nav-link" data-bs-toggle="tab" href="#menu2">Xem nhiều</a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content ">                        
                        <div id="menu1" class="container tab-pane active"><br>
                          
                          <?php include("inc/topview.php"); ?>
                          
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                          <h3>Sản phẩm xem nhiều</h3>
                          <?php include("inc/topview.php"); ?>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- Footer-->
        <footer class="py-5 bg-secondary">
            <div class="text-center mb-5"><a class="text-warning" href="#top"><i class="bi bi-chevron-up"  style="font-size: 3rem; font-weight: bold; color:white;"></i></a></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-light">
                        <a href="index.php" class="text-decoration-none text-dark">
                        <h4><span class="badge text-light bg-warning">THÀNH</span>
                            <span class="badge text-light bg-warning">STORE</span>
                             Uy Tín - Chất Lượng</h4></a>
                        <p><b><i>Địa chỉ:</i></b> 77A Trần Hưng Đạo, Phường Mỹ Xuyên, TP Long Xuyên, An Giang<br>
                            <b><i>Điện thoại:</i></b> 0123456789<br> 
                            <b><i>Email:</i></b> thanhstore@gmail.com</p>
                    </div>
                    <div class="col-md-3 text-dark">
                        <h4>DANH MỤC HÀNG</h4>                        
                        <?php foreach ($danhmuc as $d): ?>
                            <a class="list-group-item text-white" href="?action=group&id=<?php echo $d["id"]; ?>">
							<?php echo $d["tendanhmuc"]; ?>
							</a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-3 text-dark">
                        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
                        <a href="#" class="list-group-item text-white">Chính sách mua hàng trả góp</a>
                        <a href="#" class="list-group-item text-white">Chính sách vận chuyển</a>
                        <a href="#" class="list-group-item text-white">Chính sách bảo mật</a>
                        <a href="#" class="list-group-item text-white">Chính sách đổi mới và bảo hành</a>
                        <a href="#" class="list-group-item text-white">Chính sách giải quyết khiếu nại</a>
                    </div>
                </div>
                <hr>
                <p class="m-0 text-center text-warning fw-bolder">Copyright &copy; THÀNH STORE 2023</p></div>
        </footer>

    </body>
</html>
